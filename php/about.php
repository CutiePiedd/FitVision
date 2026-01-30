<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitVision - Innovate Smart</title>
    <style>
        /* --- GENERAL STYLES --- */
        :root {
            --primary-text: #333333;
            --secondary-text: #555555;
            --sdg-12-color: #bf8b2e; /* Mustard/Gold */
            --sdg-9-color: #f36e21;  /* Orange */
            --bg-sky: #e0f2f7;
            --bg-white: #ffffff;
            --paper-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, var(--bg-sky) 0%, #ffffff 20%);
            color: var(--primary-text);
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1, h2, h3 {
            color: var(--primary-text);
            margin-bottom: 10px;
        }

        p {
            color: var(--secondary-text);
            font-size: 1rem;
            margin-bottom: 20px;
        }

        /* --- HEADER SECTION --- */
        header {
            text-align: center;
            padding-bottom: 40px;
            border-bottom: 2px dashed rgba(0,0,0,0.1); /* Simulating the ripped paper divider */
            margin-bottom: 40px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4a3b3b;
        }

        .header-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .sdg-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }

        .sdg-badge {
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .sdg-12 { background-color: var(--sdg-12-color); }
        .sdg-9 { background-color: var(--sdg-9-color); }

        .sdg-number { font-size: 1.5rem; font-weight: 900; }
        .sdg-label { font-size: 0.6rem; text-transform: uppercase; text-align: center; line-height: 1.2; }

        /* --- SECTIONS LAYOUT --- */
        section {
            margin-bottom: 60px;
        }

        .split-layout {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .split-layout.reverse {
            flex-direction: row-reverse;
        }

        .text-content {
            flex: 1;
        }

        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        /* --- POLAROID & TAPE EFFECTS --- */
        .polaroid {
            background: white;
            padding: 15px 15px 40px 15px; /* Extra bottom padding for polaroid look */
            box-shadow: var(--paper-shadow);
            transform: rotate(-2deg);
            position: relative;
            max-width: 300px;
        }

        .polaroid.right-tilt {
            transform: rotate(2deg);
        }

        /* The "Tape" Effect */
        .tape {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) rotate(2deg);
            width: 100px;
            height: 30px;
            background-color: rgba(255, 255, 255, 0.6);
            border-left: 1px dashed rgba(0,0,0,0.1);
            border-right: 1px dashed rgba(0,0,0,0.1);
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
            z-index: 10;
        }

        /* Placeholder images styling */
        .img-placeholder {
            background-color: #ddd;
            width: 100%;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-weight: bold;
            border-radius: 2px;
            object-fit: cover;
        }

        .phone-mockup {
            border: 8px solid #333;
            border-radius: 30px;
            overflow: hidden;
            width: 260px;
            height: 500px;
            background: #eef;
            position: relative;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .phone-inner {
            width: 100%;
            height: 100%;
            background: #d4eaf5; /* Simulates the app screen */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        /* --- SPECIFIC SECTION HEADERS --- */
        h2 {
            font-size: 1.8rem;
            color: #333;
            margin-top: 0;
        }

        h3 {
            font-size: 1.4rem;
            color: #444;
        }

        /* --- FOOTER --- */
        footer {
            text-align: center;
            padding-top: 40px;
            border-top: 2px dashed rgba(0,0,0,0.1);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .split-layout, .split-layout.reverse {
                flex-direction: column;
                text-align: center;
            }
            
            h1 { font-size: 2rem; }
            
            .polaroid { margin: 0 auto; }
        }
    </style>
</head>
<body>

    <div class="container">
        
        <header>
            <h1>Innovate Smart. Consume Responsibly.</h1>
            <p class="header-subtitle">How FitVision advances SDG 12 and SDG 9 through digital fashion technology</p>
            
            <div class="sdg-badges">
                <div class="sdg-badge sdg-12">
                    <span class="sdg-number">12</span>
                    <span class="sdg-label">Responsible Consumption</span>
                </div>
                <div class="sdg-badge sdg-9">
                    <span class="sdg-number">9</span>
                    <span class="sdg-label">Industry Innovation</span>
                </div>
            </div>
        </header>

        <section class="split-layout">
            <div class="text-content">
                <h2>SDG 12: Responsible Consumption & Production</h2>
                <p>
                    FitVision empowers smarter fashion choices that reduce waste before it can occur. By enabling virtual try-ons, FitVision helps users visualize how clothes will fit and look, leading to confident and responsible purchasing decisions and textiles.
                </p>
            </div>
            <div class="image-content">
                <div class="phone-mockup">
                    <div class="phone-inner">
                        <span style="color: #666;"></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="split-layout">
            <div class="image-content">
                <div class="polaroid">
                    <div class="tape"></div>
                    <img src="https://via.placeholder.com/400x300/e0e0e0/888888?text=Woman+with+Boxes" alt="Returns" class="img-placeholder" style="height: 200px;">
                </div>
            </div>
            <div class="text-content">
                <h3>Fewer Returns</h3>
                <p>
                    Virtual fitting gives shoppers confidence before purchase, cutting down on impulse buys and reducing the need for returns. This results in less packaging waste and lower transport emissions.
                </p>
            </div>
        </section>

        <section class="split-layout reverse">
            <div class="image-content">
                <div class="polaroid right-tilt">
                    <div class="tape"></div>
                    <img src="https://via.placeholder.com/400x300/e0e0e0/888888?text=Clothes+Rack" alt="Closet" class="img-placeholder" style="height: 200px;">
                </div>
            </div>
            <div class="text-content">
                <h3>Smarter Purchasing</h3>
                <p>
                    By ensuring accurate fit visualization, brands can better predict demand and minimize overproduction—preventing unsold inventory and textile waste.
                </p>
            </div>
        </section>

        <section class="split-layout">
            <div class="image-content">
                <div class="phone-mockup" style="height: 400px; width: 220px;">
                    <div class="phone-inner" style="background: #ddeeff;">
                         <span style="color: #666;"></span>
                    </div>
                </div>
            </div>
            <div class="text-content">
                <h3>Digital Fitting</h3>
                <p>
                    Accurate virtual try-ons reduce discarded and unused garments, leading to a reduction in textile waste and promoting sustainable fashion consumption.
                </p>
            </div>
        </section>

        <footer>
            <h2>Where Innovation Meets Responsibility</h2>
            <p>FitVision demonstrates how technological innovation (SDG 9) can directly enable responsible consumption and production (SDG 12).</p>
            
            <div class="sdg-badges" style="margin-top: 30px;">
                <div class="sdg-badge sdg-12">
                    <span class="sdg-number">12</span>
                    <span class="sdg-label">Responsible Consumption</span>
                </div>
                <div style="font-size: 2rem; color: #ccc;">&#8596;</div>
                <div class="sdg-badge sdg-9">
                    <span class="sdg-number">9</span>
                    <span class="sdg-label">Industry Innovation</span>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>