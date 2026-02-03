<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - JMAXINDO</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/contact.css">
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
                    <li><a href="/about" data-id="nav-about">About Us</a></li>
                    <li><a href="/contact" data-id="nav-contact" class="active">Contact Us</a></li>
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
            <h1 data-id="page-title">Contact Us</h1>
            <div class="breadcrumb">
                <a href="/"><i class="fas fa-home"></i> <span data-id="breadcrumb-home">Home</span></a>
                <span class="separator">/</span>
                <span data-id="breadcrumb-contact">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- FORM SIDE -->
                <div class="form-side">
                    <h3 data-id="form-subtitle">Get In Touch</h3>
                    <h2 data-id="form-title">Send Us A Message</h2>
                    <p data-id="form-desc">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name" data-id="label-name">Your Name</label>
                            <input type="text" id="name" name="name" data-id="placeholder-name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email" data-id="label-email">Your Email</label>
                            <input type="email" id="email" name="email" data-id="placeholder-email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="subject" data-id="label-subject">Subject</label>
                            <input type="text" id="subject" name="subject" data-id="placeholder-subject" placeholder="Enter subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message" data-id="label-message">Your Message</label>
                            <textarea id="message" name="message" data-id="placeholder-message" placeholder="Write your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit" data-id="btn-submit">Send Message</button>
                    </form>
                </div>

                <!-- INFO SIDE -->
                <div class="info-side">
                    <h3 data-id="info-subtitle">Contact Information</h3>
                    <h2 data-id="info-title">Reach Out To Us</h2>

                    <div class="contact-info">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4 data-id="info-phone">Call Us</h4>
                                <p>+62 (021) 2555-6755</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4 data-id="info-email-label">Email Us</h4>
                                <p>info@jmax.co.id</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="info-content">
                                <h4 data-id="info-website-label">Website</h4>
                                <p>www.jmaxindo.com</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4 data-id="info-address-label">Address</h4>
                                <p>Sahid Sudirman Center, 56th Floor<br>Jl. Jenderal Sudirman No. 86<br>Jakarta Pusat, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="map-section">
        <div class="container">
            <h2 class="map-title" data-id="map-title">Find Us On Map</h2>
            <p class="map-subtitle" data-id="map-subtitle">Visit our office located in the heart of Jakarta</p>
        </div>
        
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2616621919087!2d106.8088!3d-6.2254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f154c39e94d9%3A0x7e7c4d6c5e8f9a3b!2sSahid%20Sudirman%20Center!5e0!3m2!1sen!2sid!4v1234567890" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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
                <p data-id="footer-copyright">© 2025 JMAX Indonesia.</p>
            </div>
        </div>
    </footer>

    <script>
        // Directus API Configuration
        const DIRECTUS_API_URL = 'http://localhost:8055/items/contact_messages';

        // Contact Form Submission Handler
        document.querySelector('.contact-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const form = e.target;
            const submitButton = form.querySelector('.btn-submit');
            const originalButtonText = submitButton.textContent;
            
            // Get form data
            const formData = new FormData(form);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                subject: formData.get('subject'),
                message: formData.get('message'),
                status: 'new'
            };
            
            // Disable submit button
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
            submitButton.style.opacity = '0.6';
            submitButton.style.cursor = 'not-allowed';
            
            try {
                const response = await fetch(DIRECTUS_API_URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                if (response.ok) {
                    // Success - Reset form
                    form.reset();
                    alert('Message sent successfully!');
                } else {
                    // Error
                    alert('Failed to send message. Please try again.');
                }
                
            } catch (error) {
                console.error('Form submission error:', error);
                alert('Network error. Please check your connection.');
            } finally {
                // Re-enable button
                submitButton.disabled = false;
                submitButton.textContent = originalButtonText;
                submitButton.style.opacity = '1';
                submitButton.style.cursor = 'pointer';
            }
        });

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
                'page-title': 'Hubungi Kami',
                'breadcrumb-home': 'Beranda',
                'breadcrumb-contact': 'Hubungi Kami',
                'form-subtitle': 'Hubungi Kami',
                'form-title': 'Kirim Pesan',
                'form-desc': 'Ada pertanyaan? Kami ingin mendengar dari Anda. Kirimkan pesan dan kami akan merespons sesegera mungkin.',
                'label-name': 'Nama Anda',
                'label-email': 'Email Anda',
                'label-subject': 'Subjek',
                'label-message': 'Pesan Anda',
                'placeholder-name': 'Masukkan nama Anda',
                'placeholder-email': 'Masukkan email Anda',
                'placeholder-subject': 'Masukkan subjek',
                'placeholder-message': 'Tulis pesan Anda di sini...',
                'btn-submit': 'Kirim Pesan',
                'info-subtitle': 'Informasi Kontak',
                'info-title': 'Hubungi Kami',
                'info-phone': 'Telepon',
                'info-email-label': 'Email',
                'info-website-label': 'Situs Web',
                'info-address-label': 'Alamat',
                'map-title': 'Temukan Kami di Peta',
                'map-subtitle': 'Kunjungi kantor kami yang terletak di jantung Jakarta',
                'footer-home': 'Beranda',
                'footer-about': 'Tentang Kami',
                'footer-contact': 'Hubungi Kami',
                'footer-gallery': 'Galeri',
                'footer-career': 'Karir',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            en: {
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-contact': 'Contact Us',
                'nav-gallery': 'Gallery',
                'nav-career': 'Career',
                'page-title': 'Contact Us',
                'breadcrumb-home': 'Home',
                'breadcrumb-contact': 'Contact Us',
                'form-subtitle': 'Get In Touch',
                'form-title': 'Send Us A Message',
                'form-desc': 'Have questions? We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.',
                'label-name': 'Your Name',
                'label-email': 'Your Email',
                'label-subject': 'Subject',
                'label-message': 'Your Message',
                'placeholder-name': 'Enter your name',
                'placeholder-email': 'Enter your email',
                'placeholder-subject': 'Enter subject',
                'placeholder-message': 'Write your message here...',
                'btn-submit': 'Send Message',
                'info-subtitle': 'Contact Information',
                'info-title': 'Reach Out To Us',
                'info-phone': 'Call Us',
                'info-email-label': 'Email Us',
                'info-website-label': 'Website',
                'info-address-label': 'Address',
                'map-title': 'Find Us On Map',
                'map-subtitle': 'Visit our office located in the heart of Jakarta',
                'footer-home': 'Home',
                'footer-about': 'About Us',
                'footer-contact': 'Contact Us',
                'footer-gallery': 'Gallery',
                'footer-career': 'Career',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            jp: {
                'nav-home': 'ホーム',
                'nav-about': '会社概要',
                'nav-contact': 'お問い合わせ',
                'nav-gallery': 'ギャラリー',
                'nav-career': '採用情報',
                'page-title': 'お問い合わせ',
                'breadcrumb-home': 'ホーム',
                'breadcrumb-contact': 'お問い合わせ',
                'form-subtitle': '連絡を入れてください',
                'form-title': 'メッセージを送信する',
                'form-desc': 'ご質問がありますか?お気軽にお問い合わせください。メッセージをお送りいただければ、できるだけ早くご返信いたします。',
                'label-name': 'お名前',
                'label-email': 'メールアドレス',
                'label-subject': '件名',
                'label-message': '内容',
                'placeholder-name': 'お名前を入力してください',
                'placeholder-email': 'メールアドレスを入力してください',
                'placeholder-subject': '件名を入力してください',
                'placeholder-message': 'メッセージをここに書いてください',
                'btn-submit': 'メッセージを送信',
                'info-subtitle': '連絡先情報',
                'info-title': 'お問い合わせ先',
                'info-phone': 'お電話',
                'info-email-label': 'メール',
                'info-website-label': 'ウェブサイト',
                'info-address-label': '住所',
                'map-title': '地図で探す',
                'map-subtitle': 'ジャカルタの中心部にあるオフィスをご訪問ください',
                'footer-home': 'ホーム',
                'footer-about': '会社概要',
                'footer-contact': 'お問い合わせ',
                'footer-gallery': 'ギャラリー',
                'footer-career': '採用情報',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            cn: {
                'nav-home': '首页',
                'nav-about': '关于我们',
                'nav-contact': '联系我们',
                'nav-gallery': '画廊',
                'nav-career': '招聘',
                'page-title': '联系我们',
                'breadcrumb-home': '首页',
                'breadcrumb-contact': '联系我们',
                'form-subtitle': '保持联系',
                'form-title': '给我们发送消息',
                'form-desc': '有问题吗?我们很乐意听取您的意见。给我们发送消息,我们会尽快回复。',
                'label-name': '您的姓名',
                'label-email': '您的电子邮件',
                'label-subject': '主题',
                'label-message': '您的留言',
                'placeholder-name': '输入您的姓名',
                'placeholder-email': '输入您的电子邮件',
                'placeholder-subject': '输入主题',
                'placeholder-message': '在此处写下您的消息...',
                'btn-submit': '发送消息',
                'info-subtitle': '联系信息',
                'info-title': '联系我们',
                'info-phone': '致电我们',
                'info-email-label': '电子邮件',
                'info-website-label': '网站',
                'info-address-label': '地址',
                'map-title': '在地图上找到我们',
                'map-subtitle': '访问我们位于雅加达市中心的办公室',
                'footer-home': '首页',
                'footer-about': '关于我们',
                'footer-contact': '联系我们',
                'footer-gallery': '画廊',
                'footer-career': '招聘',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            }
        };

        // Function to change language
        function changeLanguage(lang) {
            const translation = translations[lang];
            
            document.querySelectorAll('[data-id]').forEach(element => {
                const id = element.getAttribute('data-id');
                if (translation[id]) {
                    if (id.startsWith('placeholder-')) {
                        element.placeholder = translation[id];
                    } else if (translation[id].includes('<br>')) {
                        element.innerHTML = translation[id];
                    } else {
                        element.textContent = translation[id];
                    }
                }
            });
            
            localStorage.setItem('preferredLanguage', lang);
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
                
                const langLabels = {
                    'id': '🌐 ID',
                    'en': '🌐 EN',
                    'jp': '🌐 JP',
                    'cn': '🌐 CN'
                };
                
                currentLang.textContent = langLabels[lang];
                languageDropdown.classList.remove('show');
            });
        });

        document.addEventListener('click', function() {
            languageDropdown.classList.remove('show');
        });

        // Load saved language preference
        window.addEventListener('DOMContentLoaded', function() {
            const savedLang = localStorage.getItem('preferredLanguage') || 'en';
            changeLanguage(savedLang);
            
            const langLabels = {
                'id': '🌐 ID',
                'en': '🌐 EN',
                'jp': '🌐 JP',
                'cn': '🌐 CN'
            };
            
            currentLang.textContent = langLabels[savedLang];
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