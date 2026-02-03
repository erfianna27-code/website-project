<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - JMAXINDO</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/about.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <img src="{{ asset('image/logo jmax.jpg') }}" alt="Logo JMAX" class="logo">

                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="close-icon">×</span>
                </div>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="/" data-id="nav-home">Home</a></li>
                    <li><a href="/about" data-id="nav-about" class="active">About Us</a></li>
                    <li><a href="/contact" data-id="nav-contact">Contact Us</a></li>
                    <li><a href="/gallery" data-id="nav-gallery">Gallery</a></li>
                    <li><a href="/career" data-id="nav-career">Career</a></li>
                    <li class="language-selector">
                        <button class="btn-language" id="languageBtn">
                            <span id="currentLang">🌐 ID</span>
                            <span class="arrow">▼</span>
                        </button>
                        <ul class="language-dropdown" id="languageDropdown">
                            <li><a href="#" data-lang="id">🇮🇩 Indonesia</a></li>
                            <li><a href="#" data-lang="en">🇬🇧 English</a></li>
                            <li><a href="#" data-lang="jp">🇯🇵 日本語</a></li>
                            <li><a href="#" data-lang="cn">🇨🇳 中文</a></li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Breadcrumb -->
    <section class="page-header">
        <div class="header-overlay"></div>
        <div class="container">
            <h1 data-id="page-title">About Us</h1>
            <div class="breadcrumb">
                <a href="/"><i class="fas fa-home"></i> <span data-id="breadcrumb-home">Home</span></a>
                <span class="separator">/</span>
                <span data-id="breadcrumb-about">About Us</span>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <div class="about-intro">
                <div class="about-intro-text">
                    <h2 data-id="intro-title">Your Trusted HR Partner Since 2013</h2>
                    <p data-id="intro-p1">Founded in 2013, JMAX Indonesia aims to support clients in HR services so they can focus on their core business. We've grown to provide a complete HR solution including outsourcing, recruitment, and translation to ensure client satisfaction.</p>
                    <p data-id="intro-p2">JMAX provides complete HR solutions from outsourcing, recruitment, payroll, to compliance. With experience since 2013 and strong understanding of Indonesian regulations, we help your business operate more efficiently, compliant, and focus on growth.</p>
                </div>
                <div class="about-intro-image">
                    <img src="/image/team.jpg" alt="JMAX Team">
                </div>
            </div>

               <!-- Vision & Mission -->
            <div class="vision-mission">
                <div class="vm-card">
                    <h2 data-id="vision-title">Our Vision</h2>
                    <p data-id="vision-text">We believe that business success is about accommodating the best employees for your company.</p>
                </div>
                <div class="vm-card">
                    <h2 data-id="mission-title">Our Mission</h2>
                    <p data-id="mission-text">Our mission is to discover talents from our vast networks and deliver them to proper companies.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-main">
                <div class="footer-brand">
                    <h3>JMAX Indonesia</h3>
                </div>
                
                <div class="footer-links">
                    <a href="/" data-id="footer-home">Home</a>
                    <a href="/about" data-id="footer-about">About Us</a>
                    <a href="/contact" data-id="footer-contact">Contact Us</a>
                    <a href="/gallery" data-id="footer-gallery">Gallery</a>
                    <a href="/career" data-id="footer-career">Career</a>
                </div>
                
                <div class="footer-right">
                    <div class="footer-social">
                        <a href="https://www.instagram.com/jmaxindonesia?igsh=ZmtxaHAwZDU2dG44" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/jmax-indonesia/" target="_blank" aria-label="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:info@jmax.co.id" aria-label="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2025 JMAX Indonesia.</p>
            </div>
        </div>
    </footer>

    <script>
        // Hamburger Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navMenu.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);
            
            if (!isClickInsideNav && !isClickOnHamburger && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Translations object
        const translations = {
            id: {
                // Navigation
                'nav-home': 'Beranda',
                'nav-about': 'Tentang Kami',
                'nav-contact': 'Hubungi Kami',
                'nav-gallery': 'Galeri',
                'nav-career': 'Karir',
                
                // Page Header
                'page-title': 'Tentang Kami',
                'breadcrumb-home': 'Beranda',
                'breadcrumb-about': 'Tentang Kami',
                
                // About Content
                'intro-title': 'Mitra HR Terpercaya Sejak 2013',
                'intro-p1': 'Didirikan pada tahun 2013, JMAX Indonesia bertujuan mendukung klien dalam layanan HR agar mereka dapat fokus pada bisnis inti mereka. Kami telah berkembang untuk menyediakan solusi HR lengkap termasuk outsourcing, rekrutmen, dan penerjemahan untuk memastikan kepuasan klien.',
                'intro-p2': 'JMAX menyediakan solusi HR lengkap dari outsourcing, rekrutmen, payroll, hingga compliance. Dengan pengalaman sejak 2013 dan pemahaman kuat regulasi Indonesia, kami membantu bisnis Anda beroperasi lebih efisien, compliant, dan fokus pada pertumbuhan.',
                
                // Vision & Mission
                'vision-title': 'Visi Kami',
                'vision-text': 'Kami percaya bahwa kesuksesan bisnis adalah tentang mengakomodasi karyawan terbaik untuk perusahaan Anda.',
                'mission-title': 'Misi Kami',
                'mission-text': 'Misi kami adalah menemukan talenta dari jaringan luas kami dan mengirimkan mereka ke perusahaan yang tepat.',
                
                // Footer
                'footer-home': 'Beranda',
                'footer-about': 'Tentang Kami',
                'footer-contact': 'Hubungi Kami',
                'footer-gallery': 'Galeri',
                'footer-career': 'Karir',
            },
            en: {
                // Navigation
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-contact': 'Contact Us',
                'nav-gallery': 'Gallery',
                'nav-career': 'Career',
                
                // Page Header
                'page-title': 'About Us',
                'breadcrumb-home': 'Home',
                'breadcrumb-about': 'About Us',
                
                // About Content
                'intro-title': 'Your Trusted HR Partner Since 2013',
                'intro-p1': 'Founded in 2013, JMAX Indonesia aims to support clients in HR services so they can focus on their core business. We\'ve grown to provide a complete HR solution including outsourcing, recruitment, and translation to ensure client satisfaction.',
                'intro-p2': 'JMAX provides complete HR solutions from outsourcing, recruitment, payroll, to compliance. With experience since 2013 and strong understanding of Indonesian regulations, we help your business operate more efficiently, compliant, and focus on growth.',
                
                // Vision & Mission
                'vision-title': 'Our Vision',
                'vision-text': 'We believe that business success is about accommodating the best employees for your company.',
                'mission-title': 'Our Mission',
                'mission-text': 'Our mission is to discover talents from our vast networks and deliver them to proper companies.',
                
                // Footer
                'footer-home': 'Home',
                'footer-about': 'About Us',
                'footer-contact': 'Contact Us',
                'footer-gallery': 'Gallery',
                'footer-career': 'Career',
            },
            jp: {
                // Navigation
                'nav-home': 'ホーム',
                'nav-about': '会社概要',
                'nav-contact': 'お問い合わせ',
                'nav-gallery': 'ギャラリー',
                'nav-career': '採用情報',
                
                // Page Header
                'page-title': '会社概要',
                'breadcrumb-home': 'ホーム',
                'breadcrumb-about': '会社概要',
                
                // About Content
                'intro-title': '2013年から信頼されるHRパートナー',
                'intro-p1': '2013年に設立されたJMAXインドネシアは、クライアントがコアビジネスに集中できるように、HRサービスでサポートすることを目指しています。アウトソーシング、採用、翻訳を含む完全なHRソリューションを提供してクライアントの満足を確保するまでに成長しています。',
                'intro-p2': 'JMAXは、アウトソーシング、採用、ペイロールからコンプライアンスまで、完全なHRソリューションを提供しています。2013年以来の経験とインドネシアの規制に関する深い理解により、お客様のビジネスがより効率的に、コンプライアンスを遵守し、成長に集中できるよう支援します。',
                
                // Vision & Mission
                'vision-title': 'ビジョン',
                'vision-text': 'ビジネスの成功は、貴社に最適な従業員を受け入れることだと信じています。',
                'mission-title': 'ミッション',
                'mission-text': '私たちのミッションは、広大なネットワークから人材を発見し、適切な企業に届けることです。',
                
                // Footer
                'footer-home': 'ホーム',
                'footer-about': '会社概要',
                'footer-contact': 'お問い合わせ',
                'footer-gallery': 'ギャラリー',
                'footer-career': '採用情報',
            },
            cn: {
                // Navigation
                'nav-home': '首页',
                'nav-about': '关于我们',
                'nav-contact': '联系我们',
                'nav-gallery': '画廊',
                'nav-career': '招聘',
                
                // Page Header
                'page-title': '关于我们',
                'breadcrumb-home': '首页',
                'breadcrumb-about': '关于我们',
                
                // About Content
                'intro-title': '自2013年以来值得信赖的人力资源合作伙伴',
                'intro-p1': 'JMAX印度尼西亚成立于2013年，旨在为客户提供人力资源服务支持，使他们能够专注于核心业务。我们已发展成为提供包括外包、招聘和翻译在内的完整人力资源解决方案，以确保客户满意度。',
                'intro-p2': 'JMAX提供从外包、招聘、薪资到合规的完整人力资源解决方案。凭借自2013年以来的经验和对印度尼西亚法规的深刻理解，我们帮助您的企业更高效地运营、合规，并专注于增长。',
                
                // Vision & Mission
                'vision-title': '我们的愿景',
                'vision-text': '我们相信，业务成功在于为您的公司容纳最优秀的员工。',
                'mission-title': '我们的使命',
                'mission-text': '我们的使命是从广泛的网络中发现人才，并将他们输送到合适的公司。',
                
                // Footer
                'footer-home': '首页',
                'footer-about': '关于我们',
                'footer-contact': '联系我们',
                'footer-gallery': '画廊',
                'footer-career': '招聘',
            }
        };

        // Function to change language
        function changeLanguage(lang) {
            const translation = translations[lang];
            
            document.querySelectorAll('[data-id]').forEach(element => {
                const id = element.getAttribute('data-id');
                if (translation[id]) {
                    if (translation[id].includes('<br>')) {
                        element.innerHTML = translation[id];
                    } else {
                        element.textContent = translation[id];
                    }
                }
            });
        }

        // Language selector
        const languageBtn = document.getElementById('languageBtn');
        const languageDropdown = document.getElementById('languageDropdown');
        const currentLang = document.getElementById('currentLang');

        languageBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            languageDropdown.classList.toggle('show');
        });

        document.querySelectorAll('.language-dropdown a').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const lang = this.getAttribute('data-lang');
                
                changeLanguage(lang);
                
                if(lang === 'id') {
                    currentLang.textContent = '🌐 ID';
                } else if(lang === 'en') {
                    currentLang.textContent = '🌐 EN';
                } else if(lang === 'jp') {
                    currentLang.textContent = '🌐 JP';
                } else if(lang === 'cn') {
                    currentLang.textContent = '🌐 CN';
                }
                
                languageDropdown.classList.remove('show');
            });
        });

        document.addEventListener('click', function() {
            languageDropdown.classList.remove('show');
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>