<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools Wonder - All-in-One Tool Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables for Theme */
        :root {
            --primary-blue: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-light: #3b82f6;
            --secondary-blue: #0ea5e9;
            --accent-blue: #38bdf8;
            --dark-bg: #0f172a;
            --card-bg: #1e293b;
            --light-text: #f8fafc;
            --gray-text: #cbd5e1;
            --gradient: linear-gradient(135deg, #2563eb 0%, #0ea5e9 100%);
            --shadow: 0 10px 30px rgba(37, 99, 235, 0.15);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            color: var(--light-text);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1.2rem 0;
            border-bottom: 1px solid rgba(56, 189, 248, 0.1);
            animation: slideDown 0.8s ease-out;
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            text-decoration: none;
        }
        
        .logo-icon {
            font-size: 2.2rem;
            color: var(--accent-blue);
            animation: rotate 20s linear infinite;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }
        
        .nav-link {
            color: var(--gray-text);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.05rem;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--accent-blue);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--gradient);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .contact-email {
            background: rgba(37, 99, 235, 0.1);
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            color: var(--accent-blue);
            text-decoration: none;
            font-weight: 500;
            border: 1px solid rgba(56, 189, 248, 0.2);
            transition: var(--transition);
        }
        
        .contact-email:hover {
            background: rgba(37, 99, 235, 0.2);
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero {
            padding: 12rem 0 8rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.1) 0%, transparent 50%);
            z-index: -1;
        }
        
        .hero-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: 3.8rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            animation: fadeUp 1s ease-out;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--gray-text);
            margin-bottom: 3rem;
            animation: fadeUp 1s ease-out 0.2s backwards;
        }
        
        .hero-cta {
            display: inline-block;
            background: var(--gradient);
            color: white;
            padding: 1.2rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            box-shadow: var(--shadow);
            transition: var(--transition);
            animation: fadeUp 1s ease-out 0.4s backwards;
        }
        
        .hero-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.3);
        }
        
        .hero-icons {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 4rem;
            flex-wrap: wrap;
            animation: fadeUp 1s ease-out 0.6s backwards;
        }
        
        .hero-icon {
            width: 80px;
            height: 80px;
            background: var(--card-bg);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--accent-blue);
            border: 1px solid rgba(56, 189, 248, 0.2);
            transition: var(--transition);
            animation: float 6s ease-in-out infinite;
        }
        
        .hero-icon:nth-child(2) {
            animation-delay: 1s;
        }
        
        .hero-icon:nth-child(3) {
            animation-delay: 2s;
        }
        
        .hero-icon:nth-child(4) {
            animation-delay: 3s;
        }
        
        /* Search Section */
        .search-section {
            padding: 2rem 0 4rem;
        }
        
        .search-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            animation: fadeUp 1s ease-out 0.8s backwards;
        }
        
        .search-input {
            width: 100%;
            padding: 1.5rem 2rem;
            background: var(--card-bg);
            border: 2px solid rgba(56, 189, 248, 0.2);
            border-radius: 16px;
            color: var(--light-text);
            font-size: 1.1rem;
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .search-icon {
            position: absolute;
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent-blue);
            font-size: 1.3rem;
        }
        
        /* Tools Sections */
        .section {
            padding: 6rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: inline-block;
            animation: bounce 2s infinite;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray-text);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        /* Tool Card */
        .tool-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(56, 189, 248, 0.1);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            animation: fadeUp 0.8s ease-out backwards;
        }
        
        .tool-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-blue);
            box-shadow: var(--shadow);
        }
        
        .tool-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .tool-card:hover::before {
            transform: scaleX(1);
        }
        
        .tool-icon {
            width: 60px;
            height: 60px;
            background: rgba(56, 189, 248, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--accent-blue);
            margin-bottom: 1.5rem;
            transition: var(--transition);
        }
        
        .tool-card:hover .tool-icon {
            background: var(--gradient);
            color: white;
            transform: rotateY(180deg);
        }
        
        .tool-name {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }
        
        .tool-desc {
            color: var(--gray-text);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }
        
        .tool-button {
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary-light);
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        
        .tool-button:hover {
            background: var(--gradient);
            color: white;
            transform: translateX(5px);
        }
        
        /* Footer */
        .footer {
            padding: 5rem 0 3rem;
            background: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(56, 189, 248, 0.1);
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        .footer-logo {
            flex: 1;
            min-width: 300px;
        }
        
        .footer-logo .logo {
            margin-bottom: 1rem;
        }
        
        .footer-tagline {
            color: var(--gray-text);
            font-size: 1.1rem;
            max-width: 300px;
        }
        
        .footer-links {
            display: flex;
            gap: 4rem;
            flex-wrap: wrap;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--accent-blue);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column a {
            color: var(--gray-text);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .footer-column a:hover {
            color: var(--accent-blue);
            transform: translateX(5px);
        }
        
        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid rgba(56, 189, 248, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        
        .copyright {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        .footer-legal {
            display: flex;
            gap: 2rem;
        }
        
        .footer-legal a {
            color: var(--gray-text);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-legal a:hover {
            color: var(--accent-blue);
        }
        
        /* Animations */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }
        
        /* Floating Elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient);
            z-index: -1;
            filter: blur(60px);
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Search Results */
        .search-results {
            display: none;
            background: var(--card-bg);
            border-radius: 16px;
            margin-top: 1rem;
            padding: 1.5rem;
            border: 1px solid rgba(56, 189, 248, 0.2);
            box-shadow: var(--shadow);
        }
        
        .search-result-item {
            padding: 1rem;
            border-bottom: 1px solid rgba(56, 189, 248, 0.1);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .search-result-item:hover {
            background: rgba(56, 189, 248, 0.05);
            padding-left: 1.5rem;
        }
        
        .search-result-item:last-child {
            border-bottom: none;
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 3.2rem;
            }
            
            .section-title {
                font-size: 2.4rem;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .nav-links {
                gap: 1.5rem;
            }
            
            .hero {
                padding: 10rem 0 6rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .hero-icons {
                gap: 1.5rem;
            }
            
            .hero-icon {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }
            
            .section {
                padding: 4rem 0;
            }
            
            .tools-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .footer-content {
                flex-direction: column;
                gap: 2rem;
            }
            
            .footer-links {
                gap: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 0 1.5rem;
            }
            
            .nav-links {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-cta {
                padding: 1rem 2rem;
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .tools-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
        
        /* Utility Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-element" style="width: 300px; height: 300px; top: 10%; left: 5%;"></div>
    <div class="floating-element" style="width: 200px; height: 200px; top: 60%; right: 8%; animation-delay: 2s;"></div>
    <div class="floating-element" style="width: 150px; height: 150px; bottom: 20%; left: 15%; animation-delay: 4s;"></div>
    
    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-tools logo-icon"></i>
                <span class="logo-text">Tools Wonder</span>
            </a>
            
            <ul class="nav-links">
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#tools" class="nav-link">Tools</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <a href="mailto:toolswonder1@gmail.com" class="contact-email">
                <i class="fas fa-envelope"></i> toolswonder1@gmail.com
            </a>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container hero-content">
            <h1 class="hero-title">Your Daily Tools, All in One Place</h1>
            <p class="hero-subtitle">Convert, calculate, compress, and simplify your everyday tasks — fast and free.</p>
            <a href="#tools" class="hero-cta">
                <i class="fas fa-rocket"></i> Explore Tools
            </a>
            
            <div class="hero-icons">
                <div class="hero-icon">
                    <i class="fas fa-image"></i>
                </div>
                <div class="hero-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="hero-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="hero-icon">
                    <i class="fas fa-video"></i>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Search Section -->
    <section class="search-section">
        <div class="container search-container">
            <input type="text" class="search-input" id="searchInput" placeholder="Search a tool...">
            <i class="fas fa-search search-icon"></i>
            <div class="search-results" id="searchResults"></div>
        </div>
    </section>
    
    <!-- Main Tools Content -->
    <main id="tools">
        <!-- Image Tools -->
        <section class="section" id="image-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🖼</div>
                    <h2 class="section-title">Image Tools</h2>
                    <p class="section-subtitle">Professional image editing and conversion tools</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="tool-name">Image Converter</h3>
                        <p class="tool-desc">Convert between JPG, PNG, WebP, and more formats</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-compress-alt"></i>
                        </div>
                        <h3 class="tool-name">Image Compressor</h3>
                        <p class="tool-desc">Reduce image size without losing quality</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-expand-alt"></i>
                        </div>
                        <h3 class="tool-name">Image Resizer</h3>
                        <p class="tool-desc">Resize images to specific dimensions</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-crop-alt"></i>
                        </div>
                        <h3 class="tool-name">Image Cropper</h3>
                        <p class="tool-desc">Crop images to focus on important areas</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-font"></i>
                        </div>
                        <h3 class="tool-name">Image to Text (OCR)</h3>
                        <p class="tool-desc">Extract text from images using OCR technology</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="tool-name">Image Rotator/Flipper</h3>
                        <p class="tool-desc">Rotate and flip images in any direction</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Document Tools -->
        <section class="section" id="document-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">📄</div>
                    <h2 class="section-title">Document Tools</h2>
                    <p class="section-subtitle">Manage and convert documents with ease</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <h3 class="tool-name">PDF to Word / Word to PDF</h3>
                        <p class="tool-desc">Convert between PDF and Word documents</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-file-archive"></i>
                        </div>
                        <h3 class="tool-name">PDF Compressor</h3>
                        <p class="tool-desc">Reduce PDF file size while maintaining quality</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-object-group"></i>
                        </div>
                        <h3 class="tool-name">PDF Merger & Splitter</h3>
                        <p class="tool-desc">Combine multiple PDFs or split large PDFs</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="tool-name">Document Converter</h3>
                        <p class="tool-desc">Convert between various document formats</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="tool-name">PDF Lock/Unlock</h3>
                        <p class="tool-desc">Add or remove passwords from PDF files</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-signature"></i>
                        </div>
                        <h3 class="tool-name">eSign PDF</h3>
                        <p class="tool-desc">Add electronic signatures to PDF documents</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Calculator Tools -->
        <section class="section" id="calculator-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🧮</div>
                    <h2 class="section-title">Calculator Tools</h2>
                    <p class="section-subtitle">Powerful calculators for various purposes</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3 class="tool-name">Scientific Calculator</h3>
                        <p class="tool-desc">Advanced calculator for complex calculations</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                        <h3 class="tool-name">Age Calculator</h3>
                        <p class="tool-desc">Calculate age in years, months, and days</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-weight"></i>
                        </div>
                        <h3 class="tool-name">BMI Calculator</h3>
                        <p class="tool-desc">Calculate Body Mass Index</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="tool-name">Loan EMI Calculator</h3>
                        <p class="tool-desc">Calculate Equated Monthly Installments</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <h3 class="tool-name">GST Calculator</h3>
                        <p class="tool-desc">Calculate Goods and Services Tax</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <h3 class="tool-name">Currency Converter</h3>
                        <p class="tool-desc">Convert between world currencies</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Text Tools -->
        <section class="section" id="text-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🔤</div>
                    <h2 class="section-title">Text Tools</h2>
                    <p class="section-subtitle">Text manipulation and analysis tools</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-text-height"></i>
                        </div>
                        <h3 class="tool-name">Text Case Converter</h3>
                        <p class="tool-desc">Convert text between different cases</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-font"></i>
                        </div>
                        <h3 class="tool-name">Word & Character Counter</h3>
                        <p class="tool-desc">Count words, characters, and sentences</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-filter"></i>
                        </div>
                        <h3 class="tool-name">Remove Duplicate Lines</h3>
                        <p class="tool-desc">Remove duplicate lines from text</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-sort-alpha-down"></i>
                        </div>
                        <h3 class="tool-name">Text Sorter</h3>
                        <p class="tool-desc">Sort text lines alphabetically</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-retweet"></i>
                        </div>
                        <h3 class="tool-name">Text Reverser</h3>
                        <p class="tool-desc">Reverse text or character order</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="tool-name">Text Encryptor/Decryptor</h3>
                        <p class="tool-desc">Encrypt and decrypt text securely</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Web/Developer Tools -->
        <section class="section" id="web-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🌐</div>
                    <h2 class="section-title">Web/Developer Tools</h2>
                    <p class="section-subtitle">Essential tools for web development</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="tool-name">HTML/CSS/JS Minifier</h3>
                        <p class="tool-desc">Minify HTML, CSS, and JavaScript code</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-brackets-curly"></i>
                        </div>
                        <h3 class="tool-name">JSON Formatter & Validator</h3>
                        <p class="tool-desc">Format and validate JSON data</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <h3 class="tool-name">Base64 Encoder/Decoder</h3>
                        <p class="tool-desc">Encode and decode Base64 strings</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-link"></i>
                        </div>
                        <h3 class="tool-name">URL Encoder/Decoder</h3>
                        <p class="tool-desc">Encode and decode URL strings</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="tool-name">Color Picker & Converter</h3>
                        <p class="tool-desc">Pick colors and convert between formats</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="tool-name">Regex Tester</h3>
                        <p class="tool-desc">Test and debug regular expressions</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Color Tools -->
        <section class="section" id="color-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🎨</div>
                    <h2 class="section-title">Color Tools</h2>
                    <p class="section-subtitle">Color manipulation and analysis tools</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-eye-dropper"></i>
                        </div>
                        <h3 class="tool-name">Color Picker from Image</h3>
                        <p class="tool-desc">Extract colors from images</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="tool-name">HEX to RGB Converter</h3>
                        <p class="tool-desc">Convert between HEX and RGB color values</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="tool-name">Gradient Generator</h3>
                        <p class="tool-desc">Create beautiful CSS gradients</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 class="tool-name">Contrast Checker</h3>
                        <p class="tool-desc">Check color contrast for accessibility</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <h3 class="tool-name">Palette Generator</h3>
                        <p class="tool-desc">Generate color palettes from base colors</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="tool-name">Color Blindness Simulator</h3>
                        <p class="tool-desc">Simulate how colors appear to color blind</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SEO & Marketing Tools -->
        <section class="section" id="seo-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🌍</div>
                    <h2 class="section-title">SEO & Marketing Tools</h2>
                    <p class="section-subtitle">Tools for search engine optimization</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3 class="tool-name">Keyword Density Checker</h3>
                        <p class="tool-desc">Analyze keyword density in text</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="tool-name">Meta Tag Analyzer</h3>
                        <p class="tool-desc">Analyze and generate meta tags</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-font"></i>
                        </div>
                        <h3 class="tool-name">Word Counter</h3>
                        <p class="tool-desc">Count words and analyze text</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Utility Tools -->
        <section class="section" id="utility-tools">
            <div class="container">
                <div class="section-header reveal">
                    <div class="section-icon">🛠️</div>
                    <h2 class="section-title">Utility Tools</h2>
                    <p class="section-subtitle">Various utility tools for everyday tasks</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <h3 class="tool-name">QR Code Generator & Scanner</h3>
                        <p class="tool-desc">Create and scan QR codes</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <h3 class="tool-name">Barcode Generator</h3>
                        <p class="tool-desc">Generate various barcode types</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <h3 class="tool-name">UUID Generator</h3>
                        <p class="tool-desc">Generate unique identifiers</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 class="tool-name">Unit Converter</h3>
                        <p class="tool-desc">Convert between various units</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="tool-name">Time Zone Converter</h3>
                        <p class="tool-desc">Convert time between different zones</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                    
                    <div class="tool-card reveal">
                        <div class="tool-icon">
                            <i class="fas fa-random"></i>
                        </div>
                        <h3 class="tool-name">Random Number/Password Generator</h3>
                        <p class="tool-desc">Generate random numbers and passwords</p>
                        <a href="#" class="tool-button">
                            <i class="fas fa-external-link-alt"></i> Use Tool
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="#" class="logo">
                        <i class="fas fa-tools"></i>
                        <span class="logo-text">Tools Wonder</span>
                    </a>
                    <p class="footer-tagline">Simplifying your digital life.</p>
                    <a href="mailto:toolswonder1@gmail.com" class="contact-email" style="display: inline-block; margin-top: 1rem;">
                        <i class="fas fa-envelope"></i> toolswonder1@gmail.com
                    </a>
                </div>
                
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#tools"><i class="fas fa-tools"></i> All Tools</a></li>
                            <li><a href="#image-tools"><i class="fas fa-image"></i> Image Tools</a></li>
                            <li><a href="#document-tools"><i class="fas fa-file-alt"></i> Document Tools</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>More Tools</h3>
                        <ul>
                            <li><a href="#calculator-tools"><i class="fas fa-calculator"></i> Calculators</a></li>
                            <li><a href="#text-tools"><i class="fas fa-font"></i> Text Tools</a></li>
                            <li><a href="#web-tools"><i class="fas fa-code"></i> Developer Tools</a></li>
                            <li><a href="#utility-tools"><i class="fas fa-wrench"></i> Utilities</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    © 2023 Tools Wonder. All rights reserved.
                </div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Search Functionality
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            
            // All tools data
            const allTools = [
                // Image Tools
                { name: "Image Converter", category: "Image Tools", desc: "Convert between JPG, PNG, WebP, and more formats" },
                { name: "Image Compressor", category: "Image Tools", desc: "Reduce image size without losing quality" },
                { name: "Image Resizer", category: "Image Tools", desc: "Resize images to specific dimensions" },
                { name: "Image Cropper", category: "Image Tools", desc: "Crop images to focus on important areas" },
                { name: "Image to Text (OCR)", category: "Image Tools", desc: "Extract text from images using OCR technology" },
                { name: "Image Rotator/Flipper", category: "Image Tools", desc: "Rotate and flip images in any direction" },
                
                // Document Tools
                { name: "PDF to Word / Word to PDF", category: "Document Tools", desc: "Convert between PDF and Word documents" },
                { name: "PDF Compressor", category: "Document Tools", desc: "Reduce PDF file size while maintaining quality" },
                { name: "PDF Merger & Splitter", category: "Document Tools", desc: "Combine multiple PDFs or split large PDFs" },
                { name: "Document Converter", category: "Document Tools", desc: "Convert between various document formats" },
                { name: "PDF Lock/Unlock", category: "Document Tools", desc: "Add or remove passwords from PDF files" },
                { name: "eSign PDF", category: "Document Tools", desc: "Add electronic signatures to PDF documents" },
                
                // Calculator Tools
                { name: "Scientific Calculator", category: "Calculator Tools", desc: "Advanced calculator for complex calculations" },
                { name: "Age Calculator", category: "Calculator Tools", desc: "Calculate age in years, months, and days" },
                { name: "BMI Calculator", category: "Calculator Tools", desc: "Calculate Body Mass Index" },
                { name: "Loan EMI Calculator", category: "Calculator Tools", desc: "Calculate Equated Monthly Installments" },
                { name: "GST Calculator", category: "Calculator Tools", desc: "Calculate Goods and Services Tax" },
                { name: "Currency Converter", category: "Calculator Tools", desc: "Convert between world currencies" },
                
                // Text Tools
                { name: "Text Case Converter", category: "Text Tools", desc: "Convert text between different cases" },
                { name: "Word & Character Counter", category: "Text Tools", desc: "Count words, characters, and sentences" },
                { name: "Remove Duplicate Lines", category: "Text Tools", desc: "Remove duplicate lines from text" },
                { name: "Text Sorter", category: "Text Tools", desc: "Sort text lines alphabetically" },
                { name: "Text Reverser", category: "Text Tools", desc: "Reverse text or character order" },
                { name: "Text Encryptor/Decryptor", category: "Text Tools", desc: "Encrypt and decrypt text securely" },
                
                // Web/Developer Tools
                { name: "HTML/CSS/JS Minifier", category: "Web/Developer Tools", desc: "Minify HTML, CSS, and JavaScript code" },
                { name: "JSON Formatter & Validator", category: "Web/Developer Tools", desc: "Format and validate JSON data" },
                { name: "Base64 Encoder/Decoder", category: "Web/Developer Tools", desc: "Encode and decode Base64 strings" },
                { name: "URL Encoder/Decoder", category: "Web/Developer Tools", desc: "Encode and decode URL strings" },
                { name: "Color Picker & Converter", category: "Web/Developer Tools", desc: "Pick colors and convert between formats" },
                { name: "Regex Tester", category: "Web/Developer Tools", desc: "Test and debug regular expressions" },
                
                // Color Tools
                { name: "Color Picker from Image", category: "Color Tools", desc: "Extract colors from images" },
                { name: "HEX to RGB Converter", category: "Color Tools", desc: "Convert between HEX and RGB color values" },
                { name: "Gradient Generator", category: "Color Tools", desc: "Create beautiful CSS gradients" },
                { name: "Contrast Checker", category: "Color Tools", desc: "Check color contrast for accessibility" },
                { name: "Palette Generator", category: "Color Tools", desc: "Generate color palettes from base colors" },
                { name: "Color Blindness Simulator", category: "Color Tools", desc: "Simulate how colors appear to color blind" },
                
                // SEO & Marketing Tools
                { name: "Keyword Density Checker", category: "SEO & Marketing Tools", desc: "Analyze keyword density in text" },
                { name: "Meta Tag Analyzer", category: "SEO & Marketing Tools", desc: "Analyze and generate meta tags" },
                { name: "Word Counter", category: "SEO & Marketing Tools", desc: "Count words and analyze text" },
                
                // Utility Tools
                { name: "QR Code Generator & Scanner", category: "Utility Tools", desc: "Create and scan QR codes" },
                { name: "Barcode Generator", category: "Utility Tools", desc: "Generate various barcode types" },
                { name: "UUID Generator", category: "Utility Tools", desc: "Generate unique identifiers" },
                { name: "Unit Converter", category: "Utility Tools", desc: "Convert between various units" },
                { name: "Time Zone Converter", category: "Utility Tools", desc: "Convert time between different zones" },
                { name: "Random Number/Password Generator", category: "Utility Tools", desc: "Generate random numbers and passwords" }
            ];
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                
                if (searchTerm.length === 0) {
                    searchResults.style.display = 'none';
                    return;
                }
                
                const filteredTools = allTools.filter(tool => 
                    tool.name.toLowerCase().includes(searchTerm) || 
                    tool.category.toLowerCase().includes(searchTerm) ||
                    tool.desc.toLowerCase().includes(searchTerm)
                );
                
                if (filteredTools.length > 0) {
                    searchResults.innerHTML = '';
                    filteredTools.forEach(tool => {
                        const resultItem = document.createElement('div');
                        resultItem.className = 'search-result-item';
                        resultItem.innerHTML = `
                            <strong>${tool.name}</strong>
                            <div style="font-size: 0.9rem; color: #94a3b8; margin-top: 0.3rem;">${tool.category}</div>
                            <div style="font-size: 0.85rem; color: #64748b; margin-top: 0.2rem;">${tool.desc}</div>
                        `;
                        
                        resultItem.addEventListener('click', function() {
                            // Find and scroll to the tool section
                            const category = tool.category.replace(/\s+/g, '-').toLowerCase();
                            const section = document.getElementById(category + '-tools');
                            if (section) {
                                section.scrollIntoView({ behavior: 'smooth' });
                                searchResults.style.display = 'none';
                                searchInput.value = '';
                                
                                // Highlight the tool card
                                const toolCards = section.querySelectorAll('.tool-card');
                                toolCards.forEach(card => {
                                    if (card.querySelector('.tool-name').textContent === tool.name) {
                                        card.style.animation = 'none';
                                        card.style.boxShadow = '0 0 0 3px rgba(56, 189, 248, 0.5)';
                                        setTimeout(() => {
                                            card.style.boxShadow = '';
                                            card.style.animation = '';
                                        }, 2000);
                                    }
                                });
                            }
                        });
                        
                        searchResults.appendChild(resultItem);
                    });
                    
                    searchResults.style.display = 'block';
                } else {
                    searchResults.innerHTML = '<div style="padding: 1rem; text-align: center; color: #94a3b8;">No tools found matching your search.</div>';
                    searchResults.style.display = 'block';
                }
            });
            
            // Close search results when clicking outside
            document.addEventListener('click', function(event) {
                if (!searchInput.contains(event.target) && !searchResults.contains(event.target)) {
                    searchResults.style.display = 'none';
                }
            });
            
            // Tool button click handler
            document.querySelectorAll('.tool-button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const toolName = this.parentElement.querySelector('.tool-name').textContent;
                    
                    // Create a notification element
                    const notification = document.createElement('div');
                    notification.style.cssText = `
                        position: fixed;
                        top: 100px;
                        right: 20px;
                        background: var(--gradient);
                        color: white;
                        padding: 1rem 1.5rem;
                        border-radius: 10px;
                        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                        z-index: 10000;
                        animation: slideInRight 0.3s ease, fadeOut 0.3s ease 2.7s;
                        animation-fill-mode: forwards;
                    `;
                    notification.innerHTML = `
                        <i class="fas fa-rocket" style="margin-right: 0.5rem;"></i>
                        Opening ${toolName}...
                    `;
                    
                    document.body.appendChild(notification);
                    
                    // Remove notification after 3 seconds
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.parentNode.removeChild(notification);
                        }
                    }, 3000);
                    
                    // Add visual feedback to button
                    const originalHTML = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                    this.style.pointerEvents = 'none';
                    
                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.style.pointerEvents = 'auto';
                    }, 1500);
                });
            });
            
            // Scroll reveal animations
            const revealElements = document.querySelectorAll('.reveal');
            
            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const revealPoint = 150;
                
                revealElements.forEach(element => {
                    const revealTop = element.getBoundingClientRect().top;
                    
                    if (revealTop < windowHeight - revealPoint) {
                        element.classList.add('active');
                    }
                });
            };
            
            // Initial check
            revealOnScroll();
            
            // Listen for scroll events with throttling
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        revealOnScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Header scroll effect
            const header = document.querySelector('.header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.style.background = 'rgba(15, 23, 42, 0.98)';
                    header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.2)';
                } else {
                    header.style.background = 'rgba(15, 23, 42, 0.95)';
                    header.style.boxShadow = 'none';
                }
            });
            
            // Add animation for notifications
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideInRight {
                    from {
                        transform: translateX(100%);
                        opacity: 0;
                    }
                    to {
                        transform: translateX(0);
                        opacity: 1;
                    }
                }
                
                @keyframes fadeOut {
                    from {
                        opacity: 1;
                    }
                    to {
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
            
            // Floating elements animation
            const floatingElements = document.querySelectorAll('.floating-element');
            floatingElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 2}s`;
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    if (href === '#' || href === '#!') return;
                    
                    e.preventDefault();
                    const targetElement = document.querySelector(href);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add hover effects to tool cards
            const toolCards = document.querySelectorAll('.tool-card');
            toolCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>
</html>