<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitViSion: Precise Measurements</title>
    <style>
        /* (Use the same CSS as before) */
        body { margin: 0; font-family: 'Segoe UI', sans-serif; overflow: hidden; background: #f0f2f5; }
        #controls { position: absolute; top: 20px; left: 20px; background: white; padding: 20px; border-radius: 10px; width: 300px; }
        .input-group { margin-bottom: 10px; }
        label { display: block; font-size: 0.85rem; font-weight: bold; color: #555; }
        input { width: 100%; padding: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #3498db; color: white; border: none; margin-top: 10px; cursor: pointer; }
    </style>
    <script type="importmap">
        { "imports": { "three": "https://unpkg.com/three@0.160.0/build/three.module.js", "three/addons/": "https://unpkg.com/three@0.160.0/examples/jsm/" } }
    </script>
</head>
<body>
    <div id="controls">
        <h1>FitViSion Measures</h1>
        
        <div class="input-group">
            <label>Height (cm)</label>
            <input type="number" id="heightInput" value="165">
        </div>
        <div class="input-group">
            <label>Chest Circumference (cm)</label>
            <input type="number" id="chestInput" value="90">
        </div>
        <div class="input-group">
            <label>Waist Circumference (cm)</label>
            <input type="number" id="waistInput" value="75">
        </div>
        <div class="input-group">
            <label>Hip Circumference (cm)</label>
            <input type="number" id="hipInput" value="95">
        </div>

        <button id="updateBtn">Generate Body</button>
    </div>

  <script type="module">
    import * as THREE from 'three';
    import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
    import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

    // --- SCENE SETUP ---
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xf0f2f5); // Soft gray background

    const camera = new THREE.PerspectiveCamera(50, window.innerWidth/window.innerHeight, 0.1, 100);
    camera.position.set(0, 1.4, 3.5);

    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // --- LIGHTING ---
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambientLight);
    const dirLight = new THREE.DirectionalLight(0xffffff, 1.5);
    dirLight.position.set(2, 5, 5);
    scene.add(dirLight);

    // --- CONTROLS ---
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.target.set(0, 1, 0); // Rotate around the hips/center
    controls.enableDamping = true;

    // --- LOAD MODEL ---
    let humanMesh;
    const loader = new GLTFLoader();
    
    loader.load('avatar2.glb', function (gltf) {
        const model = gltf.scene;
        scene.add(model);

        // Find the mesh with shape keys
        model.traverse((child) => {
            if (child.isMesh && child.morphTargetInfluences) {
                humanMesh = child;
                console.log("Shape Keys Found:", Object.keys(humanMesh.morphTargetDictionary));
            }
        });
    }, undefined, function (error) {
        console.error(error);
    });

    // --- UPDATE LOGIC ---
    document.getElementById('updateBtn').addEventListener('click', () => {
        if (!humanMesh) return;

        // 1. GET USER INPUTS
        const h_val = parseFloat(document.getElementById('heightInput').value);
        const c_val = parseFloat(document.getElementById('chestInput').value);
        const w_val = parseFloat(document.getElementById('waistInput').value);
        const hip_val = parseFloat(document.getElementById('hipInput').value);

        // 2. HEIGHT SCALING (Simple Scale)
        // Base height is approx 165cm. 
        const heightScale = h_val / 165;
        humanMesh.parent.scale.set(heightScale, heightScale, heightScale);

        // 3. DEFINE "AVERAGE" MEASUREMENTS (The 0.0 state of your model)
        // Adjust these if your base model is naturally bigger/smaller
        const baseChest = 90; 
        const baseWaist = 75;
        const baseHips  = 95;

        // 4. CALCULATE DIFFERENCES
        const chestDiff = c_val - baseChest;
        const waistDiff = w_val - baseWaist;
        const hipsDiff  = hip_val - baseHips;

        // 5. BI-DIRECTIONAL FUNCTION
        // diff: The difference (e.g., +10cm or -10cm)
        // range: How many cm does the slider represent? (Sensitivity)
        const applyMorph = (diff, range, maxKey, minKey) => {
            let val = diff / range; 

            // Find the index of the keys
            const maxIdx = humanMesh.morphTargetDictionary[maxKey];
            const minIdx = humanMesh.morphTargetDictionary[minKey];

            // Reset both to 0 first
            if (maxIdx !== undefined) humanMesh.morphTargetInfluences[maxIdx] = 0;
            if (minIdx !== undefined) humanMesh.morphTargetInfluences[minIdx] = 0;

            if (val > 0) {
                // User is LARGER than average -> Use MAX key
                if (val > 1) val = 1; // Cap at 100%
                if (maxIdx !== undefined) humanMesh.morphTargetInfluences[maxIdx] = val;
            } else {
                // User is SMALLER than average -> Use MIN key
                val = Math.abs(val); // Flip negative to positive for the slider
                if (val > 1) val = 1;
                if (minIdx !== undefined) humanMesh.morphTargetInfluences[minIdx] = val;
            }
        };

        // 6. APPLY CHANGES
        // The number (25, 30, etc.) is the "Range". 
        // Example: 30 means "The slider covers 30cm of growth/shrinking"
        applyMorph(chestDiff, 25, 'Chest_Max', 'Chest_Min');
        applyMorph(waistDiff, 30, 'Waist_Max', 'Waist_Min');
        applyMorph(hipsDiff,  25, 'Hips_Max',  'Hips_Min');
    });

    // --- ANIMATION LOOP ---
    function animate() {
        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();
</script>
</body>
</html>