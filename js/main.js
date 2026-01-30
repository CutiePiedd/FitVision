// ===============================
// IMPORTS (LOCAL FILES ONLY)
// ===============================
import * as THREE from './three.module.js';
import { GLTFLoader } from './GLTFLoader.js';

console.log('MAIN.JS LOADED');

// ===============================
// SCENE
// ===============================
const scene = new THREE.Scene();
scene.background = new THREE.Color(0xeeeeee);

// ===============================
// CAMERA
// ===============================
const camera = new THREE.PerspectiveCamera(
  60,
  window.innerWidth / window.innerHeight,
  0.01,
  1000
);
camera.position.set(0, 1.6, 4);

// ===============================
// RENDERER
// ===============================
const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.outputColorSpace = THREE.SRGBColorSpace;
document.body.appendChild(renderer.domElement);

// ===============================
// LIGHTING
// ===============================
scene.add(new THREE.HemisphereLight(0xffffff, 0x444444, 0.8));

const dirLight = new THREE.DirectionalLight(0xffffff, 1.2);
dirLight.position.set(5, 10, 7);
scene.add(dirLight);

// ===============================
// HELPERS (DEBUG)
// ===============================
scene.add(new THREE.GridHelper(2, 10));
scene.add(new THREE.AxesHelper(0.5));

// ===============================
// LOAD AVATAR
// ===============================
const loader = new GLTFLoader();

loader.load(
  '../male__female_base_mesh_pack.glb',
  (gltf) => {
    const avatar = gltf.scene;
    avatar.name = 'FitVisionAvatar';
    scene.add(avatar);

    console.log('Avatar loaded:', avatar);

    // 🔧 FORCE VISIBILITY
    avatar.visible = true;

    avatar.traverse(obj => {
      if (obj.isMesh || obj.isSkinnedMesh) {
        obj.frustumCulled = false;

        // force visible material
        obj.material = new THREE.MeshStandardMaterial({
          color: 0xbfbfbf,
          metalness: 0.1,
          roughness: 0.8
        });
      }
    });

    // 📦 BOUNDING BOX DEBUG
    const box = new THREE.Box3().setFromObject(avatar);
    const size = box.getSize(new THREE.Vector3());
    const center = box.getCenter(new THREE.Vector3());

    console.log('Avatar size:', size);
    console.log('Avatar center:', center);

    // 🚨 IF MODEL IS TINY → SCALE UP
    const maxDim = Math.max(size.x, size.y, size.z);
    if (maxDim < 0.1) {
      const scale = 1 / maxDim;
      avatar.scale.setScalar(scale);
      console.log('Scaled avatar by:', scale);
    }

    // CENTER MODEL
    avatar.position.sub(center);

    // 🎥 CAMERA FRAME
    const newBox = new THREE.Box3().setFromObject(avatar);
    const newSize = newBox.getSize(new THREE.Vector3());
    const newCenter = newBox.getCenter(new THREE.Vector3());

    const camDist = Math.max(newSize.x, newSize.y, newSize.z) * 2.2;
    camera.position.set(0, camDist * 0.8, camDist);
    camera.lookAt(0, camDist * 0.5, 0);
    camera.near = camDist / 100;
    camera.far = camDist * 10;
    camera.updateProjectionMatrix();

    console.log('Camera positioned for avatar');

    // expose for inspection
    window.avatar = avatar;
  },
  undefined,
  (err) => console.error('GLTF load error:', err)
);


// ===============================
// RENDER LOOP
// ===============================
function animate() {
  requestAnimationFrame(animate);
  renderer.render(scene, camera);
}
animate();

// ===============================
// RESIZE HANDLER
// ===============================
window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});
