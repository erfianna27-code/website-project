<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - JMAXINDO</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/gallery.css">
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
                    <li><a href="/" data-id="nav-home">Home</a></li>
                    <li><a href="/about" data-id="nav-about">About Us</a></li>
                    <li><a href="/contact" data-id="nav-contact">Contact Us</a></li>
                    <li><a href="/gallery" data-id="nav-gallery" class="active">Gallery </a></li>
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

    <!-- Hero Gallery Section -->
    <section class="hero-gallery">
        <div class="container">
            <h1 data-id="gallery-hero-title">Experience Peace of Mind by Ensuring Local Compliance and Robust Protection for Data Privacy & Digital Asset</h1>
            <p data-id="gallery-hero-subtitle">We understand the need to match candidates with your company's future success requirements.</p>
            <a href="/" class="btn-leadership" data-id="gallery-btn-home">
                <span data-id="btn-home-text">Home</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- Gallery Carousel Section -->
    <section class="gallery-carousel">
        <div class="container">
            <div class="carousel-container">
                <button class="carousel-btn prev" onclick="moveCarousel(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="carousel-wrapper" id="carouselWrapper">
                    <!-- Gallery items will be loaded dynamically from Directus -->
                    <p style="color: white; text-align: center; width: 100%; padding: 2rem;">Loading gallery...</p>
                </div>

                <button class="carousel-btn next" onclick="moveCarousel(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-dots" id="carouselDots"></div>
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

    <!--JS-->
    <script>
        // ===== DIRECTUS API CONFIGURATION =====
        const DIRECTUS_URL = 'http://localhost:8055';
        const GALLERY_COLLECTION = 'gallery';

        // ===== FETCH GALLERY DATA FROM DIRECTUS =====
        async function fetchGalleryData() {
            try {
                const response = await fetch(`${DIRECTUS_URL}/items/${GALLERY_COLLECTION}?filter[status][_eq]=published&sort=-date_created`);
                
                if (!response.ok) {
                    throw new Error('Failed to fetch gallery data');
                }
                
                const result = await response.json();
                console.log('Gallery data loaded:', result.data.length, 'items');
                return result.data;
            } catch (error) {
                console.error('Error fetching gallery:', error);
                return [];
            }
        }

        // ===== RENDER GALLERY ITEMS =====
        async function renderGallery() {
            const wrapper = document.getElementById('carouselWrapper');
            const galleryData = await fetchGalleryData();
            
            // Clear existing items
            wrapper.innerHTML = '';
            
            if (galleryData.length === 0) {
                wrapper.innerHTML = '<p style="color: white; text-align: center; width: 100%; padding: 2rem;">No gallery items found. Please add photos in Directus admin panel.</p>';
                return;
            }
            
            // Create gallery items from Directus data
            galleryData.forEach(item => {
                const div = document.createElement('div');
                div.className = 'gallery-item';
                
                const img = document.createElement('img');
                img.src = `${DIRECTUS_URL}/assets/${item.image}`;
                img.alt = item.title || 'Gallery Image';
                img.loading = 'lazy';
                
                div.appendChild(img);
                wrapper.appendChild(div);
            });
            
            // Reinitialize carousel after loading images
            setTimeout(() => {
                initializeCarousel();
            }, 100);
        }

        // ===== CAROUSEL FUNCTIONALITY =====
        let currentIndex = 0;
        let items = [];
        let totalItems = 0;
        let itemsPerView = 4;
        let autoPlayInterval;

        function initializeCarousel() {
            const wrapper = document.getElementById('carouselWrapper');
            items = document.querySelectorAll('.gallery-item');
            totalItems = items.length;
            
            if (totalItems === 0) return;
            
            updateItemsPerView();
            createDots();
            updateCarousel();
            startAutoPlay();
        }

        // Update items per view based on screen size
        function updateItemsPerView() {
            if (window.innerWidth <= 768) {
                itemsPerView = 1;
            } else if (window.innerWidth <= 1024) {
                itemsPerView = 3;
            } else {
                itemsPerView = 4;
            }
            currentIndex = 0;
            if (totalItems > 0) {
                createDots();
                updateCarousel();
            }
        }

        function getMaxIndex() {
            return Math.max(0, Math.ceil(totalItems / itemsPerView) - 1);
        }

        function moveCarousel(direction) {
            if (totalItems === 0) return;
            
            const maxIndex = getMaxIndex();
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = maxIndex;
            } else if (currentIndex > maxIndex) {
                currentIndex = 0;
            }

            updateCarousel();
        }

        function updateCarousel() {
            if (items.length === 0) return;
            
            const wrapper = document.getElementById('carouselWrapper');
            const itemWidth = items[0].offsetWidth;
            const gap = 32;
            const offset = -(currentIndex * itemsPerView * (itemWidth + gap));
            
            const maxOffset = -((totalItems - itemsPerView) * (itemWidth + gap));
            const finalOffset = Math.max(offset, maxOffset);
            
            wrapper.style.transform = `translateX(${finalOffset}px)`;
            updateDots();
        }

        function createDots() {
            const dotsContainer = document.getElementById('carouselDots');
            dotsContainer.innerHTML = '';
            const numDots = getMaxIndex() + 1;
            
            for (let i = 0; i < numDots; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                dot.onclick = () => goToSlide(i);
                dotsContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = document.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        function goToSlide(index) {
            currentIndex = index;
            updateCarousel();
        }

        // Auto play carousel
        function startAutoPlay() {
            if (autoPlayInterval) clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(() => moveCarousel(1), 5000);
        }

        // Pause on hover
        const carouselContainer = document.querySelector('.carousel-container');
        carouselContainer.addEventListener('mouseenter', () => {
            if (autoPlayInterval) clearInterval(autoPlayInterval);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            startAutoPlay();
        });

        // ===== TRANSLATIONS =====
        const translations = {
            id: {
                // Navigation
                'nav-home': 'Beranda',
                'nav-about': 'Tentang Kami',
                'nav-contact': 'Hubungi Kami',
                'nav-gallery': 'Galeri',
                'nav-career': 'Karir',
                
                // Hero Section
                'gallery-hero-title': 'Rasakan Ketenangan Pikiran dengan Memastikan Kepatuhan Lokal dan Perlindungan Kuat untuk Privasi Data & Aset Digital',
                'gallery-hero-subtitle': 'Kami memahami kebutuhan untuk mencocokkan kandidat dengan persyaratan kesuksesan masa depan perusahaan Anda.',
                'btn-home-text': 'Beranda',
                
                // Footer
                'footer-home': 'Beranda',
                'footer-about': 'Tentang Kami',
                'footer-contact': 'Hubungi Kami',
                'footer-gallery': 'Galeri',
                'footer-career': 'Karir',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            en: {
                // Navigation
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-contact': 'Contact Us',
                'nav-gallery': 'Gallery',
                'nav-career': 'Career',
                
                // Hero Section
                'gallery-hero-title': 'Experience Peace of Mind by Ensuring Local Compliance and Robust Protection for Data Privacy & Digital Asset',
                'gallery-hero-subtitle': 'We understand the need to match candidates with your company\'s future success requirements.',
                'btn-home-text': 'Home',
                
                // Footer
                'footer-home': 'Home',
                'footer-about': 'About Us',
                'footer-contact': 'Contact Us',
                'footer-gallery': 'Gallery',
                'footer-career': 'Career',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            jp: {
                // Navigation
                'nav-home': 'ホーム',
                'nav-about': '会社概要',
                'nav-contact': 'お問い合わせ',
                'nav-gallery': 'ギャラリー',
                'nav-career': '採用情報',

                
                // Hero Section
                'gallery-hero-title': 'データプライバシーとデジタル資産に対する現地規制への準拠と強固な保護を確保することで、安心感を得られます。',
                'gallery-hero-subtitle': '貴社の将来の成功要件に候補者をマッチングする必要性を理解しています。',
                'btn-home-text': 'ホーム',
                
                // Footer
                'footer-home': 'ホーム',
                'footer-about': '会社概要',
                'footer-contact': 'お問い合わせ',
                'footer-gallery': 'ギャラリー',
                'footer-career': '採用情報',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            cn: {
                // Navigation
                'nav-home': '首页',
                'nav-about': '关于我们',
                'nav-contact': '联系我们',
                'nav-gallery': '画廊',
                'nav-career': '招聘',
                
                // Hero Section
                'gallery-hero-title': '通过确保本地合规性和数据隐私及数字资产的强大保护，体验安心',
                'gallery-hero-subtitle': '我们了解将候选人与贵公司未来成功要求相匹配的需求。',
                'btn-home-text': '首页',
                
                // Footer
                'footer-home': '首页',
                'footer-about': '关于我们',
                'footer-contact': '联系我们',
                'footer-gallery': '画廊',
                'footer-gallery': '招聘',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            }
        };

        // Function to change language
        function changeLanguage(lang) {
            const translation = translations[lang];
            
            document.querySelectorAll('[data-id]').forEach(element => {
                const id = element.getAttribute('data-id');
                if (translation[id]) {
                    element.textContent = translation[id];
                }
            });
            
            // Save language preference
            localStorage.setItem('preferredLanguage', lang);
        }

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
                
                // Update button display
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

        // ===== INITIALIZE ON PAGE LOAD =====
        window.addEventListener('DOMContentLoaded', async function() {
            // Load gallery from Directus
            await renderGallery();
            
            // Load saved language preference
            const savedLang = localStorage.getItem('preferredLanguage') || 'en';
            changeLanguage(savedLang);
            if(savedLang === 'id') {
                currentLang.textContent = '🌐 ID';
            } else if(savedLang === 'en') {
                currentLang.textContent = '🌐 EN';
            } else if(savedLang === 'jp') {
                currentLang.textContent = '🌐 JP';
            } else if(savedLang === 'cn') {
                currentLang.textContent = '🌐 CN';
            }
        });

        window.addEventListener('resize', updateItemsPerView);
    </script>
</body>
</html>