<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMAXINDO</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <img src="{{ asset('image/logo jmax.jpg') }}" alt="Logo JMAX" class="logo">

                <!-- Hamburger Button -->
                <div class="hamburger" id="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="close-icon">×</span>
                </div>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="/" data-id="nav-home" class="active">Home</a></li>
                    <li><a href="/about" data-id="nav-about">About Us</a></li>
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

   <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <span class="badge" data-id="badge">Welcome to JMAX</span>
                        <h1 data-id="heading">HR One-Stop Solution Company</h1>
                        <p data-id="description">With experience in Human Resources, we're ready to elevate your business.</p>
                        <div class="hero-buttons">
                            <a href="/about" class="btn-primary" data-id="btn-about">About Us</a>
                        </div>
                    </div>
                    
                    <div class="hero-image">
                        <div class="image-grid">
                            <div class="grid-item item-1">
                                <div class="arrow-decoration"></div>
                                <img src="{{ asset('image/person1.png') }}" alt="Person 1">
                            </div>
                            <div class="grid-item item-2">
                                <img src="{{ asset('image/person2.png') }}" alt="Person 2">  
                            </div>
                            <div class="grid-item item-3">
                                <img src="{{ asset('image/person3.png') }}" alt="Person 3">
                            </div>
                            <div class="grid-item item-4">
                                <img src="{{ asset('image/person4.png') }}" alt="Person 4">
                                <div class="x-decoration">✕</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="core-values">
            <div class="container">
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-card-top">
                            <div class="value-icon"><i class="fas fa-building"></i></div>
                        </div>
                        <div class="value-card-bottom">
                            <h3 data-id="core-established">Established in 2013 &<br>Originates from<br>Japan</h3>
                        </div>
                    </div>

                    <div class="value-card">
                        <div class="value-card-top">
                            <div class="value-icon"><i class="fas fa-check-circle"></i></div>
                        </div>
                        <div class="value-card-bottom">
                            <h3 data-id="core-served">Has served many<br>satisfied customers</h3>
                            <p><small data-id="core-served-desc">More than 120 existing<br>Clients & to date</small></p>
                        </div>
                    </div>

                    <div class="value-card">
                        <div class="value-card-top">
                            <div class="value-icon"><i class="fas fa-bolt"></i></div>
                        </div>
                        <div class="value-card-bottom">
                            <h3 data-id="core-professional">Professional,<br>skilled, competent,<br>and expert</h3>
                        </div>
                    </div>

                    <div class="value-card">
                        <div class="value-card-top">
                            <div class="value-icon"><i class="fas fa-globe-asia"></i></div>
                        </div>
                        <div class="value-card-bottom">
                            <h3 data-id="core-experienced">Experienced in<br>Indonesian regulatory,</h3>
                            <p><small data-id="core-experienced-desc">local wisdom, cultural, and<br>traditional matters</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose">
            <div class="container">
                <h2 class="section-title" data-id="why-title">Why Choose JMAX?</h2>
                <div class="why-grid">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-users"></i></div>
                        <h3 data-id="why-staff-title">Expert Staffing</h3>
                        <p data-id="why-staff-desc">Carefully chosen and skilled staff meet your specific needs.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-handshake"></i></div>
                        <h3 data-id="why-hr-title">Comprehensive HR Support</h3>
                        <p data-id="why-hr-desc">Expert help on all HR aspects by our experience team.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3 data-id="why-coord-title">On-Site Coordination</h3>
                        <p data-id="why-coord-desc">Skilled coordinators available for on-site support, ensuring seamless operations with minimal staff.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-graduation-cap"></i></div>
                        <h3 data-id="why-training-title">Training Facilities</h3>
                        <p data-id="why-training-desc">Fully equipped spaces for candidate preparation.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-sync-alt"></i></div>
                        <h3 data-id="why-replace-title">Ready Replacements</h3>
                        <p data-id="why-replace-desc">Unlimited backup candidates for any staffing shortfalls.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-flag"></i></div>
                        <h3 data-id="why-japan-title">Japanese Expertise</h3>
                        <p data-id="why-japan-desc">Access to top-tier Japanese professionals.</p>
                    </div>
                    
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-file-contract"></i></div>
                        <h3 data-id="why-contract-title">Flexible Contracts</h3>
                        <p data-id="why-contract-desc">Custom contract lengths with options for direct hire based on performance.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-values">
            <div class="container">
                <div class="values-header">
                    <h1 class="values-title" data-id="values-main-title">Our Core Values</h1>
                    <p class="values-subtitle" data-id="values-subtitle">Our identity is grounded in the values we carry with us everywhere we go</p>
                </div>
                
                <div class="values-list">
                    <div class="value-item">
                        <div class="value-number">1</div>
                        <div class="value-content">
                            <h3 data-id="value-honesty">Honesty</h3>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-number">2</div>
                        <div class="value-content">
                            <h3 data-id="value-respect">Respect</h3>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-number">3</div>
                        <div class="value-content">
                            <h3 data-id="value-professionalism">Professionalism</h3>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-number">4</div>
                        <div class="value-content">
                            <h3 data-id="value-teamwork">Teamwork</h3>
                        </div>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-number">5</div>
                        <div class="value-content">
                            <h3 data-id="value-kaizen">Kaizen (Continuous Improvement)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services Section -->

        <section class="our-services">
            <div class="container">
                <h2 class="section-title" data-id="services-title">Our Services</h2>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-image">
                            <img src="image/outsourcing.jpg" alt="Outsourcing">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-outsourcing">Outsourcing</h3>
                            <p data-id="service-outsourcing-desc">Tailored short-term and long-term staffing solutions for a variety of roles.</p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-image">
                            <img src="image/talent-management.jpg" alt="Talent Management">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-talent">Talent Management</h3>
                            <p data-id="service-talent-desc">Recruitment and staffing services to ensure your team meets your company's strategic goals.</p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-image">
                            <img src="image/hr-admin.jpg" alt="HR Admin & Payroll">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-hr-admin">HR Admin & Payroll</h3>
                            <p data-id="service-hr-admin-desc">Comprehensive payroll management including salary calculations and statutory payments.</p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-image">
                            <img src="image/risk-compliance.jpg" alt="Risk & Compliance">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-risk">Risk & Compliance</h3>
                            <p data-id="service-risk-desc">Dedicated support to maintain legal compliance and manage employment-related risks.</p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-image">
                            <img src="image/training.jpg" alt="Training">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-training">Training</h3>
                            <p data-id="service-training-desc">Professional development programs to enhance employee skills.</p>
                        </div>
                    </div>

                     <div class="service-card">
                        <div class="service-image">
                            <img src="image/security.JPG" alt="Security Services">
                        </div>
                        <div class="service-content">
                            <h3 data-id="service-security">Security Services</h3>
                            <p data-id="service-security-desc">Professional security personnel and integrated protection solutions with 24/7 monitoring and modern technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLIENTS SECTION -->
        <section class="clients-section">
            <div class="container">
                <h2 class="section-title" data-id="clients-title">Some Our Awesome Clients</h2>
                
                <div class="clients-grid">
                    <div class="client-logo">
                        <img src="image/kredit.jpg" alt="Kredit Plus">   
                    </div>                 
                    <div class="client-logo">
                        <img src="image/mitsubsihi.png" alt="Mitsubsihi">
                    </div>
                    <div class="client-logo">
                      <img src="image/jnt.png" alt="J&T Express">   
                    </div>
                    <div class="client-logo">
                        <img src="image/cbn.png" alt="CBN">
                    </div>
                    <div class="client-logo">
                      <img src="image/mufg.png" alt="MUFG">  
                    </div>
                    <div class="client-logo">
                      <img src="image/pesona.png" alt="Pesona">  
                    </div>
                    <div class="client-logo">
                       <img src="image/toyota.jpeg" alt="Toyota"> 
                    </div>
                    <div class="client-logo">
                        <img src="image/mandom.png" alt="Mandom">
                    </div>
                    <div class="client-logo">
                        <img src="image/asw.png" alt="ASW Food">
                    </div>
                    <div class="client-logo">
                        <img src="image/abc.png" alt="ABC">
                    </div>
                    <div class="client-logo">
                        <img src="image/bhea.jpeg" alt="BHEA">
                    </div>
                    <div class="client-logo">
                        <img src="image/ceva.png" alt="CEVA">
                    </div>
                    <div class="client-logo">
                      <img src="image/cp petindo.jpeg" alt="CP Petindo">  
                    </div>
                    <div class="client-logo">
                        <img src="image/cp bahari.jpg" alt="CP Bahari">
                    </div>
                    <div class="client-logo">
                        <img src="image/cp prima.jpg" alt="CP Prima">
                    </div>
                    <div class="client-logo">
                        <img src="image/danamon.png" alt="Danamon">
                    </div>
                    <div class="client-logo">
                        <img src="image/elnusa.png" alt="Elnusa">
                    </div>
                    <div class="client-logo">
                        <img src="image/epson.png" alt="Epson">
                    </div>
                    <div class="client-logo">
                        <img src="image/exxedi.png" alt="Exxedi">
                    </div>
                    <div class="client-logo">
                        <img src="image/fujitsu.png" alt="Fujitsu">
                    </div>
                    <div class="client-logo">
                        <img src="image/google.jpeg" alt="Google">
                    </div>
                    <div class="client-logo">
                        <img src="image/goto.png" alt="Goto">
                    </div>
                    <div class="client-logo">
                        <img src="image/hino.jpg" alt="Hino">
                    </div>
                    <div class="client-logo">
                        <img src="image/GTL.png" alt="GTL">
                    </div>
                    <div class="client-logo">
                        <img src="image/hitachi.png" alt="Hitachi">
                    </div>
                    <div class="client-logo">
                        <img src="image/honda power.png" alt="Honda Power">
                    </div>
                    <div class="client-logo">
                        <img src="image/ht.png" alt="HT">
                    </div>
                    <div class="client-logo">
                        <img src="image/itochu.png" alt="Iochu">
                    </div>
                    <div class="client-logo">
                        <img src="image/mnc.png" alt="MNC">
                    </div>
                    <div class="client-logo">
                       <img src="image/jatis.png" alt="Jatis"> 
                    </div>
                    <div class="client-logo">
                        <img src="image/ngk.png" alt="NGK">
                    </div>
                    <div class="client-logo">
                        <img src="image/nipon.png" alt="Nipon">
                    </div>
                    <div class="client-logo">
                        <img src="image/oriflame.png" alt="Oriflame">
                    </div>
                    <div class="client-logo">
                        <img src="image/sabic.png" alt="Sabic">
                    </div>
                    <div class="client-logo">
                        <img src="image/satria.png" alt="Satria">
                    </div>
                    <div class="client-logo">
                        <img src="image/shzmz.png" alt="SHZMZ">
                    </div>
                    <div class="client-logo">
                        <img src="image/sidomuncul.png" alt="Sidomuncul">
                    </div>
                    <div class="client-logo">
                        <img src="image/unipres.png" alt="Unpres">
                    </div>
                    <div class="client-logo">
                        <img src="image/velocity.png" alt="Velocity">
                    </div>
                    <div class="client-logo">
                        <img src="image/WIFT.jpeg" alt="WIFT">
                    </div>
                    <div class="client-logo">
                        <img src="image/yayasan.png" alt="Yayasan">
                    </div>
                    <div class="client-logo">
                        <img src="image/ymazaki.jpeg" alt="Ymazaki">
                    </div>
                    <div class="client-logo">
                        <img src="image/youlife.jpeg" alt="Youlife">
                    </div>
                     <div class="client-logo">
                        <img src="image/pt di.png" alt="PT DI">
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                'nav-home': 'Beranda',
                'nav-about': 'Tentang Kami',
                'nav-contact': 'Hubungi Kami',
                'nav-gallery': 'Galeri',
                'nav-career': 'Karir',
                'badge': 'Selamat Datang di JMAX',
                'heading': 'Perusahaan Penyedia Solusi HR Terpadu',
                'description': 'Dengan pengalaman di bidang Sumber Daya Manusia, kami siap meningkatkan bisnis Anda.',
                'btn-about': 'Tentang Kami',
                'core-established': 'Didirikan tahun 2013 &<br>Berasal dari<br>Jepang',
                'core-served': 'Telah melayani banyak<br>pelanggan yang puas',
                'core-served-desc': 'Lebih dari 120 klien<br>hingga saat ini',
                'core-professional': 'Profesional,<br>terampil, kompeten,<br>dan ahli',
                'core-experienced': 'Berpengalaman dalam<br>regulasi Indonesia,',
                'core-experienced-desc': 'kearifan lokal, budaya, dan<br>tradisi setempat',
                'why-title': 'Mengapa Memilih JMAX?',
                'why-staff-title': 'Staf Ahli',
                'why-staff-desc': 'Staf terlatih dan terpilih memenuhi kebutuhan spesifik Anda.',
                'why-hr-title': 'Dukungan HR Komprehensif',
                'why-hr-desc': 'Bantuan ahli untuk semua aspek HR oleh tim berpengalaman kami.',
                'why-coord-title': 'Koordinasi di Lokasi',
                'why-coord-desc': 'Koordinator terampil tersedia untuk dukungan di lokasi, memastikan operasi lancar dengan staf minimal.',
                'why-training-title': 'Fasilitas Pelatihan',
                'why-training-desc': 'Ruang lengkap untuk persiapan kandidat.',
                'why-replace-title': 'Pengganti Siap',
                'why-replace-desc': 'Kandidat cadangan tanpa batas untuk kekurangan staf.',
                'why-japan-title': 'Keahlian Jepang',
                'why-japan-desc': 'Akses ke profesional Jepang terbaik.',
                'why-contract-title': 'Kontrak Fleksibel',
                'why-contract-desc': 'Durasi kontrak khusus dengan opsi perekrutan langsung berdasarkan kinerja.',
                'values-main-title': 'Nilai-Nilai Inti Kami',
                'values-subtitle': 'Identitas kami didasarkan pada nilai-nilai yang kami bawa ke mana pun kami pergi',
                'value-honesty': 'Kejujuran',
                'value-respect': 'Rasa Hormat',
                'value-professionalism': 'Profesionalisme',
                'value-teamwork': 'Kerja Sama Tim',
                'value-kaizen': 'Kaizen (Perbaikan Berkelanjutan)',
                'services-title': 'Layanan Kami',
                'service-outsourcing': 'Outsourcing',
                'service-outsourcing-desc': 'Solusi kepegawaian jangka pendek dan panjang yang disesuaikan untuk berbagai peran.',
                'service-talent': 'Manajemen Talenta',
                'service-talent-desc': 'Layanan rekrutmen dan kepegawaian untuk memastikan tim Anda memenuhi tujuan strategis perusahaan.',
                'service-hr-admin': 'Admin HR & Penggajian',
                'service-hr-admin-desc': 'Manajemen penggajian komprehensif termasuk perhitungan gaji dan pembayaran wajib.',
                'service-risk': 'Risiko & Kepatuhan',
                'service-risk-desc': 'Dukungan khusus untuk menjaga kepatuhan hukum dan mengelola risiko terkait ketenagakerjaan.',
                'service-training': 'Pelatihan',
                'service-training-desc': 'Program pengembangan profesional untuk meningkatkan keterampilan karyawan.',
                'service-security': 'Layanan Keamanan',
                'service-security-desc': 'Personel keamanan profesional dan solusi perlindungan terintegrasi dengan pemantauan 24/7 dan teknologi modern.',
                'clients-title': 'Beberapa Klien Luar Biasa Kami',
                'footer-home': 'Beranda',
                'footer-about': 'Tentang Kami',
                'footer-contact': 'Hubungi Kami',
                'footer-gallery': 'Galeri',
                'footer-career': 'Karir',
            },
            en: {
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-contact': 'Contact Us',
                'nav-gallery': 'Gallery',
                'nav-career': 'Career',
                'badge': 'Welcome to JMAX',
                'heading': 'HR One-Stop Solution Company',
                'description': 'With experience in Human Resources, we\'re ready to elevate your business.',
                'btn-about': 'About Us',
                'core-established': 'Established in 2013 &<br>Originates from<br>Japan',
                'core-served': 'Has served many<br>satisfied customers',
                'core-served-desc': 'More than 120 existing<br>Clients & to date',
                'core-professional': 'Professional,<br>skilled, competent,<br>and expert',
                'core-experienced': 'Experienced in<br>Indonesian regulatory,',
                'core-experienced-desc': 'local wisdom, cultural, and<br>traditional matters',
                'why-title': 'Why Choose JMAX?',
                'why-staff-title': 'Expert Staffing',
                'why-staff-desc': 'Carefully chosen and skilled staff meet your specific needs.',
                'why-hr-title': 'Comprehensive HR Support',
                'why-hr-desc': 'Expert help on all HR aspects by our experience team.',
                'why-coord-title': 'On-Site Coordination',
                'why-coord-desc': 'Skilled coordinators available for on-site support, ensuring seamless operations with minimal staff.',
                'why-training-title': 'Training Facilities',
                'why-training-desc': 'Fully equipped spaces for candidate preparation.',
                'why-replace-title': 'Ready Replacements',
                'why-replace-desc': 'Unlimited backup candidates for any staffing shortfalls.',
                'why-japan-title': 'Japanese Expertise',
                'why-japan-desc': 'Access to top-tier Japanese professionals.',
                'why-contract-title': 'Flexible Contracts',
                'why-contract-desc': 'Custom contract lengths with options for direct hire based on performance.',
                'values-main-title': 'Our Core Values',
                'values-subtitle': 'Our identity is grounded in the values we carry with us everywhere we go',
                'value-honesty': 'Honesty',
                'value-respect': 'Respect',
                'value-professionalism': 'Professionalism',
                'value-teamwork': 'Teamwork',
                'value-kaizen': 'Kaizen (Continuous Improvement)',
                'services-title': 'Our Services',
                'service-outsourcing': 'Outsourcing',
                'service-outsourcing-desc': 'Tailored short-term and long-term staffing solutions for a variety of roles.',
                'service-talent': 'Talent Management',
                'service-talent-desc': 'Recruitment and staffing services to ensure your team meets your company\'s strategic goals.',
                'service-hr-admin': 'HR Admin & Payroll',
                'service-hr-admin-desc': 'Comprehensive payroll management including salary calculations and statutory payments.',
                'service-risk': 'Risk & Compliance',
                'service-risk-desc': 'Dedicated support to maintain legal compliance and manage employment-related risks.',
                'service-training': 'Training',
                'service-training-desc': 'Professional development programs to enhance employee skills.',
                'service-security': 'Security Services',
                'service-security-desc': 'Professional security personnel and integrated protection solutions with 24/7 monitoring and modern technology.',
                'clients-title': 'Some Our Awesome Clients',
                'footer-home': 'Home',
                'footer-about': 'About Us',
                'footer-contact': 'Contact Us',
                'footer-gallery': 'Gallery',
                'footer-career': 'Career',
            },
            jp: {
                'nav-home': 'ホーム',
                'nav-about': '会社概要',
                'nav-contact': 'お問い合わせ',
                'nav-gallery': 'ギャラリー',
                'nav-career': '採用情報',
                'badge': 'JMAXへようこそ',
                'heading': '人事ワンストップソリューション企業',
                'description': '人材管理の豊富な経験で、お客様のビジネスを次のレベルへ導きます。',
                'btn-about': '会社概要',
                'core-established': '2013年設立<br>日本発祥の<br>企業',
                'core-served': '多くの満足した<br>お客様にサービス提供',
                'core-served-desc': '現在までに120社以上の<br>クライアント実績',
                'core-professional': 'プロフェッショナル、<br>熟練、有能、<br>専門的',
                'core-experienced': 'インドネシアの<br>規制に精通、',
                'core-experienced-desc': '地域の知恵、文化、<br>伝統に関する経験',
                'why-title': 'なぜJMAXを選ぶのか?',
                'why-staff-title': '専門スタッフ',
                'why-staff-desc': '慎重に選ばれた熟練したスタッフがお客様の特定のニーズに応えます。',
                'why-hr-title': '包括的な人事サポート',
                'why-hr-desc': '経験豊富なチームによるすべての人事側面の専門的サポート。',
                'why-coord-title': '現場調整',
                'why-coord-desc': '熟練したコーディネーターが現場サポートを提供し、最小限のスタッフでシームレスな運営を保証します。',
                'why-training-title': '研修施設',
                'why-training-desc': '候補者準備のための完全装備されたスペース。',
                'why-replace-title': '代替要員の即時対応',
                'why-replace-desc': 'スタッフ不足に対する無制限のバックアップ候補者。',
                'why-japan-title': '日本の専門知識',
                'why-japan-desc': '一流の日本人プロフェッショナルへのアクセス。',
                'why-contract-title': '柔軟な契約形態',
                'why-contract-desc': 'パフォーマンスに基づく直接雇用オプション付きのカスタム契約期間。',
                'values-main-title': 'コアバリュー',
                'values-subtitle': '私たちのアイデンティティは、どこへ行っても持ち歩く価値観に根ざしています',
                'value-honesty': '真実味',
                'value-respect': '尊重',
                'value-professionalism': 'プロフェッショナリズム',
                'value-teamwork': 'チームワーク',
                'value-kaizen': '改善',
                'services-title': '私たちのサービス',
                'service-outsourcing': 'アウトソーシング',
                'service-outsourcing-desc': '様々な役割に対応したカスタマイズされた短期および長期のスタッフィングソリューション。',
                'service-talent': 'タレントマネジメント',
                'service-talent-desc': 'チームが会社の戦略目標を達成するための採用およびスタッフィングサービス。',
                'service-hr-admin': '人事管理と給与計算',
                'service-hr-admin-desc': '給与計算と法定支払いを含む包括的な給与管理。',
                'service-risk': 'リスクとコンプライアンス',
                'service-risk-desc': '法令遵守の維持と雇用関連リスクの管理のための専門サポート。',
                'service-training': 'トレーニング',
                'service-training-desc': '従業員のスキル向上のための専門的能力開発プログラム。',
                'service-security': 'セキュリティサービス',
                'service-security-desc': 'プロフェッショナルなセキュリティ人材と、24時間365日の監視と最新技術を備えた統合保護ソリューション。',
                'clients-title': '私たちの素晴らしいクライアント',
                'footer-home': 'ホーム',
                'footer-about': '会社概要',
                'footer-contact': 'お問い合わせ',
                'footer-gallery': 'ギャラリー',
                'footer-career': '採用情報',
            },
            cn: {
                'nav-home': '首页',
                'nav-about': '关于我们',
                'nav-contact': '联系我们',
                'nav-gallery': '画廊',
                'nav-career': '招聘',
                'badge': '欢迎来到JMAX',
                'heading': '人力资源一站式解决方案公司',
                'description': '凭借人力资源管理经验,我们已准备好提升您的业务。',
                'btn-about': '关于我们',
                'core-established': '成立于2013年<br>源自<br>日本',
                'core-served': '已为众多<br>满意客户提供服务',
                'core-served-desc': '迄今已有120多家<br>客户',
                'core-professional': '专业、<br>熟练、称职、<br>并且精通',
                'core-experienced': '精通<br>印尼法规,',
                'core-experienced-desc': '当地智慧、文化和<br>传统事务',
                'why-title': '为什么选择JMAX?',
                'why-staff-title': '专业人员',
                'why-staff-desc': '精心挑选的熟练员工满足您的特定需求。',
                'why-hr-title': '全面的人力资源支持',
                'why-hr-desc': '经验丰富的团队在所有人力资源方面提供专业帮助。',
                'why-coord-title': '现场协调',
                'why-coord-desc': '熟练的协调员提供现场支持,确保以最少的员工实现无缝运营。',
                'why-training-title': '培训设施',
                'why-training-desc': '为候选人准备提供设备齐全的空间。',
                'why-replace-title': '随时替换',
                'why-replace-desc': '无限的备份候选人应对任何人员短缺。',
                'why-japan-title': '日本专业知识',
                'why-japan-desc': '获得顶级日本专业人士。',
                'why-contract-title': '灵活的合同',
                'why-contract-desc': '根据绩效提供直接雇用选项的定制合同期限。',
                'values-main-title': '我们的核心价值观',
                'values-subtitle': '我们的身份植根于我们随身携带的价值观',
                'value-honesty': '诚实',
                'value-respect': '尊重',
                'value-professionalism': '专业精神',
                'value-teamwork': '团队合作',
                'value-kaizen': '改善(持续改进)',
                'services-title': '我们的服务',
                'service-outsourcing': '外包',
                'service-outsourcing-desc': '为各种角色量身定制的短期和长期人员配置解决方案。',
                'service-talent': '人才管理',
                'service-talent-desc': '招聘和人员配置服务,确保您的团队达到公司的战略目标。',
                'service-hr-admin': '人事管理与薪资',
                'service-hr-admin-desc': '包括工资计算和法定付款的全面薪资管理。',
                'service-risk': '风险与合规',
                'service-risk-desc': '专门支持以维持法律合规性并管理与就业相关的风险。',
                'service-training': '培训',
                'service-training-desc': '提高员工技能的专业发展计划。',
                'service-security': '安保服务',
                'service-security-desc': '专业安保人员和集成保护解决方案，提供24/7监控和现代技术。',
                'clients-title': '我们的优秀客户',
                'footer-home': '首页',
                'footer-about': '关于我们',
                'footer-contact': '联系我们',
                'footer-gallery': '画廊',
                'footer-career': '招聘',
            }
        };

        // Function to change language - FIXED to support HTML tags like <br>
        function changeLanguage(lang) {
            const translation = translations[lang];
            
            document.querySelectorAll('[data-id]').forEach(element => {
                const id = element.getAttribute('data-id');
                if (translation[id]) {
                    // Use innerHTML for content with HTML tags, otherwise textContent
                    if (translation[id].includes('<br>')) {
                        element.innerHTML = translation[id];
                    } else {
                        element.textContent = translation[id];
                    }
                }
            });
        }

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

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

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
</body>
</html>