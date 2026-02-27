<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Opportunities - JMAX Indonesia</title>
    <meta name="description" content="Join JMAX Indonesia. Explore career opportunities across Jakarta, Bekasi, and other major cities in Indonesia.">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/career.css">
</head>
<body>
    <!-- ========================================
         HEADER (NAVIGATION)
         ======================================== -->
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
                    <li><a href="/gallery" data-id="nav-gallery">Gallery</a></li>
                    <li><a href="/career" data-id="nav-career" class="active">Career</a></li>
                    <li class="language-selector">
                        <button class="btn-language" id="languageBtn">
                            <span id="currentLang">🌐 EN</span>
                            <span class="arrow">▼</span>
                        </button>
                        <ul class="language-dropdown" id="languageDropdown">
                            <li><a href="#" data-lang="en">🇬🇧 English</a></li>
                            <li><a href="#" data-lang="id">🇮🇩 Indonesia</a></li>
                            <li><a href="#" data-lang="jp">🇯🇵 日本語</a></li>
                            <li><a href="#" data-lang="cn">🇨🇳 中文</a></li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </nav>
    </header>

    <!-- ========================================
         HERO SECTION
         ======================================== -->
    <section class="hero-jobs">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title" data-id="hero-title">Join Our Team</h1>
                <p class="hero-subtitle" data-id="hero-subtitle">Discover exciting career opportunities at JMAX Indonesia</p>
            </div>
        </div>
    </section>

    <!-- ========================================
         FILTER & SEARCH
         ======================================== -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search position or location..." data-id="search-placeholder">
                </div>
                <div class="filter-group">
                    <select id="locationFilter" class="filter-select">
                        <option value="all" data-id="filter-all-location">All Locations</option>
                        <option value="jakarta">Jakarta</option>
                        <option value="depok">Depok</option>
                        <option value="bekasi">Bekasi</option>
                        <option value="tangerang">Tangerang</option>
                        <option value="bogor">Bogor</option>
                        <option value="bandung">Bandung</option>
                        <option value="cirebon">Cirebon</option>
                        <option value="tasikmalaya">Tasikmalaya</option>
                        <option value="karawang">Karawang</option>
                        <option value="cikarang">Cikarang</option>
                    </select>
                    <select id="categoryFilter" class="filter-select">
                        <option value="all" data-id="filter-all-category">All Categories</option>
                        <option value="sales">Sales & Marketing</option>
                        <option value="admin">Administration</option>
                        <option value="driver">Driver & Logistics</option>
                        <option value="security">Security</option>
                        <option value="technical">Technical & IT</option>
                        <option value="hospitality">Hospitality</option>
                        <option value="office_support">Office Support</option>
                        <option value="operasional">Operasional</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         JOB LISTINGS (POSTER CARDS)
         ======================================== -->
    <main class="jobs-main">
        <div class="container">
            <div class="jobs-grid" id="jobsGrid">
                <!-- Loading state -->
                <div class="jobs-loading">
                    <div class="spinner"></div>
                    <p data-id="loading-text">Loading job postings...</p>
                </div>
            </div>
        </div>
    </main>

    <!-- ========================================
         MODAL (DETAIL POP UP)
         ======================================== -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content" id="modalContent">
            <button class="btn-close-modal" onclick="closeJobModal()">
                <i class="fas fa-times"></i>
            </button>
            <div id="modalBody">
                <!-- Modal content will be dynamically inserted here -->
            </div>
        </div>
    </div>

    <!-- ========================================
         FOOTER
        ======================================== -->
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
                        <a href="mailto:info@jmaxindonesia.com" aria-label="Email">
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
        // ===== DIRECTUS API CONFIGURATION =====
        const DIRECTUS_URL = 'https://directus.jmaxindo.com';
        const JOB_COLLECTION = 'job_postings';

        // ===== FETCH JOBS FROM DIRECTUS =====
        async function fetchJobs() {
            try {
                const response = await fetch(
                    `${DIRECTUS_URL}/items/${JOB_COLLECTION}?filter[status][_eq]=published&sort=-date_created`
                );
                
                if (!response.ok) {
                    throw new Error('Failed to fetch job postings');
                }
                
                const result = await response.json();
                console.log('Jobs loaded:', result.data.length, 'positions');
                return result.data;
            } catch (error) {
                console.error('Error fetching jobs:', error);
                return [];
            }
        }

        // ===== RENDER JOB CARDS (POSTER ONLY) =====
        async function renderJobs() {
            const grid = document.getElementById('jobsGrid');
            const jobs = await fetchJobs();
            
            // Clear loading state
            grid.innerHTML = '';
            
            // Check if no jobs found
            if (jobs.length === 0) {
                grid.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-briefcase"></i>
                        <h3 data-id="empty-title">No job openings available</h3>
                        <p data-id="empty-subtitle">Please check back later or adjust your search filters</p>
                    </div>
                `;
                return;
            }
            
            // Render each job as POSTER CARD
            jobs.forEach(job => {
                const card = createJobCard(job);
                grid.appendChild(card);
            });
        }

        // ===== CREATE JOB CARD (POSTER + BUTTON) =====
        function createJobCard(job) {
            const card = document.createElement('div');
            card.className = 'job-card poster-card';
            
            // Add data attributes for filtering
            const locations = Array.isArray(job.locations) ? job.locations.join(',').toLowerCase() : '';
            card.setAttribute('data-location', locations);
            card.setAttribute('data-category', job.category || '');
            card.setAttribute('data-title', (job.title || '').toLowerCase());
            
            // Build card HTML (POSTER ONLY)
            let html = '';
            
            // Poster image (REQUIRED)
            if (job.poster_image) {
                const posterUrl = `${DIRECTUS_URL}/assets/${job.poster_image}`;
                html += `
                    <div class="job-poster-container">
                        <img src="${posterUrl}" alt="${job.title}" class="job-poster-image" loading="lazy">
                    </div>
                `;
            } else {
                // Fallback if no poster (shouldn't happen based on your requirement)
                html += `
                    <div class="job-poster-container no-poster">
                        <div class="no-poster-placeholder">
                            <i class="fas fa-briefcase"></i>
                            <h3>${job.title}</h3>
                            <p>${Array.isArray(job.locations) ? job.locations.join(', ') : ''}</p>
                        </div>
                    </div>
                `;
            }
            
            // View Details button
            html += `
                <button class="btn-view-details" onclick="openJobModal('${job.id}')">
                    <span data-id="btn-view-details">View Details</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            `;
            
            card.innerHTML = html;
            return card;
        }

        // ===== OPEN JOB MODAL (POP UP) =====
        async function openJobModal(jobId) {
            const modal = document.getElementById('modalOverlay');
            const modalBody = document.getElementById('modalBody');
            
            // Show loading
            modalBody.innerHTML = `
                <div class="jobs-loading">
                    <div class="spinner"></div>
                    <p data-id="loading-text">Loading details...</p>
                </div>
            `;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            try {
                // Fetch job details
                const response = await fetch(`${DIRECTUS_URL}/items/${JOB_COLLECTION}/${jobId}`);
                const result = await response.json();
                const job = result.data;
                
                // Build modal content
                let content = `
                    <div class="modal-header">
                        <h2>${job.title}</h2>
                `;
                
                if (job.locations && job.locations.length > 0) {
                    content += `
                        <div class="modal-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>${job.locations.join(', ')}</span>
                        </div>
                    `;
                }
                
                content += `</div><div class="modal-body">`;
                
                // Show poster in modal if available
                if (job.poster_image) {
                    const posterUrl = `${DIRECTUS_URL}/assets/${job.poster_image}`;
                    content += `
                        <div class="modal-poster">
                            <img src="${posterUrl}" alt="${job.title}" loading="lazy">
                        </div>
                    `;
                }
                
                // Requirements
                if (job.requirements && job.requirements.length > 0) {
                    content += `
                        <div class="modal-section">
                            <h3><i class="fas fa-check-circle"></i> <span data-id="modal-requirements">Requirements</span></h3>
                            <ul class="modal-list">
                    `;
                    job.requirements.forEach(req => {
                        content += `<li>${req.requirement || req}</li>`;
                    });
                    content += `</ul></div>`;
                }
                
                // Responsibilities
                if (job.responsibilities && job.responsibilities.length > 0) {
                    content += `
                        <div class="modal-section">
                            <h3><i class="fas fa-tasks"></i> <span data-id="modal-responsibilities">Responsibilities</span></h3>
                            <ul class="modal-list">
                    `;
                    job.responsibilities.forEach(resp => {
                        content += `<li>${resp.responsibility || resp}</li>`;
                    });
                    content += `</ul></div>`;
                }
                
                // Benefits
                if (job.benefits && job.benefits.length > 0) {
                    content += `
                        <div class="modal-section">
                            <h3><i class="fas fa-gift"></i> <span data-id="modal-benefits">Benefits</span></h3>
                            <ul class="modal-list benefits-list">
                    `;
                    job.benefits.forEach(ben => {
                        content += `<li>${ben.benefit || ben}</li>`;
                    });
                    content += `</ul></div>`;
                }
                
                content += `</div>`;
                
                modalBody.innerHTML = content;
                
                // Re-translate modal content if needed
                const currentLang = localStorage.getItem('preferredLanguage') || 'en';
                translateModalContent(currentLang);
                
            } catch (error) {
                console.error('Error loading job details:', error);
                modalBody.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Error</h3>
                        <p data-id="error-loading">Failed to load job details. Please try again.</p>
                    </div>
                `;
            }
        }

        // ===== CLOSE MODAL =====
        function closeJobModal() {
            const modal = document.getElementById('modalOverlay');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close modal on overlay click
        document.getElementById('modalOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeJobModal();
            }
        });

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeJobModal();
            }
        });

        // ===== FILTER & SEARCH FUNCTIONALITY =====
        function filterJobs() {
            const searchValue = document.getElementById('searchInput').value.toLowerCase();
            const locationValue = document.getElementById('locationFilter').value.toLowerCase();
            const categoryValue = document.getElementById('categoryFilter').value.toLowerCase();
            
            const cards = document.querySelectorAll('.job-card');
            let visibleCount = 0;
            
            cards.forEach(card => {
                const cardLocation = card.getAttribute('data-location') || '';
                const cardCategory = card.getAttribute('data-category') || '';
                const cardTitle = card.getAttribute('data-title') || '';
                
                const matchSearch = searchValue === '' || cardTitle.includes(searchValue) || cardLocation.includes(searchValue);
                const matchLocation = locationValue === 'all' || cardLocation.includes(locationValue);
                const matchCategory = categoryValue === 'all' || cardCategory === categoryValue;
                
                if (matchSearch && matchLocation && matchCategory) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Show empty state if no results
            const grid = document.getElementById('jobsGrid');
            let emptyState = grid.querySelector('.empty-state');
            
            if (visibleCount === 0 && cards.length > 0) {
                if (!emptyState) {
                    emptyState = document.createElement('div');
                    emptyState.className = 'empty-state';
                    emptyState.innerHTML = `
                        <i class="fas fa-search"></i>
                        <h3 data-id="empty-title">No jobs found</h3>
                        <p data-id="empty-subtitle">Try adjusting your search or filters</p>
                    `;
                    grid.appendChild(emptyState);
                }
            } else if (emptyState) {
                emptyState.remove();
            }
        }

        // Attach event listeners
        document.getElementById('searchInput').addEventListener('input', filterJobs);
        document.getElementById('locationFilter').addEventListener('change', filterJobs);
        document.getElementById('categoryFilter').addEventListener('change', filterJobs);

        // ===== TRANSLATIONS =====
        const translations = {
            en: {
                'nav-home': 'Home',
                'nav-about': 'About Us',
                'nav-contact': 'Contact Us',
                'nav-gallery': 'Gallery',
                'nav-career': 'Career',
                'hero-title': 'Join Our Team',
                'hero-subtitle': 'Discover exciting career opportunities at JMAX Indonesia',
                'search-placeholder': 'Search position or location...',
                'filter-all-location': 'All Locations',
                'filter-all-category': 'All Categories',
                'loading-text': 'Loading job postings...',
                'btn-view-details': 'View Details',
                'empty-title': 'No job openings available',
                'empty-subtitle': 'Please check back later or adjust your search filters',
                'modal-requirements': 'Requirements',
                'modal-responsibilities': 'Responsibilities',
                'modal-benefits': 'Benefits',
                'error-loading': 'Failed to load job details. Please try again.',
                'footer-home': 'Home',
                'footer-about': 'About Us',
                'footer-contact': 'Contact Us',
                'footer-gallery': 'Gallery',
                'footer-career': 'Career',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            id: {
                'nav-home': 'Beranda',
                'nav-about': 'Tentang Kami',
                'nav-contact': 'Hubungi Kami',
                'nav-gallery': 'Galeri',
                'nav-career': 'Karir',
                'hero-title': 'Bergabunglah Bersama Kami',
                'hero-subtitle': 'Temukan peluang karir menarik di JMAX Indonesia',
                'search-placeholder': 'Cari posisi atau lokasi...',
                'filter-all-location': 'Semua Lokasi',
                'filter-all-category': 'Semua Kategori',
                'loading-text': 'Memuat lowongan kerja...',
                'btn-view-details': 'Lihat Detail',
                'empty-title': 'Tidak ada lowongan tersedia',
                'empty-subtitle': 'Silakan periksa kembali nanti atau sesuaikan filter pencarian Anda',
                'modal-requirements': 'Persyaratan',
                'modal-responsibilities': 'Tanggung Jawab',
                'modal-benefits': 'Keuntungan',
                'error-loading': 'Gagal memuat detail lowongan. Silakan coba lagi.',
                'footer-home': 'Beranda',
                'footer-about': 'Tentang Kami',
                'footer-contact': 'Hubungi Kami',
                'footer-gallery': 'Galeri',
                'footer-career': 'Karir',
                'footer-copyright': '© 2025 JMAX Indonesia.'
            },
            jp: {
                'nav-home': 'ホーム',
                'nav-about': '会社概要',
                'nav-contact': 'お問い合わせ',
                'nav-gallery': 'ギャラリー',
                'nav-career': '採用情報',
                'hero-title': '私たちのチームに参加してください',
                'hero-subtitle': 'JMAXインドネシアでエキサイティングなキャリアの機会を見つけよう',
                'search-placeholder': '職種または勤務地を検索...',
                'filter-all-location': 'すべての勤務地',
                'filter-all-category': 'すべてのカテゴリー',
                'loading-text': '求人情報を読み込んでいます...',
                'btn-view-details': '詳細を見る',
                'empty-title': '求人情報がありません',
                'empty-subtitle': '後でもう一度確認するか、検索フィルターを調整してください',
                'modal-requirements': '応募資格',
                'modal-responsibilities': '職務内容',
                'modal-benefits': '福利厚生',
                'error-loading': '求人情報の読み込みに失敗しました。もう一度お試しください。',
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
                'hero-title': '加入我们的团队',
                'hero-subtitle': '在JMAX印度尼西亚探索激动人心的职业机会',
                'search-placeholder': '搜索职位或地点...',
                'filter-all-location': '所有地点',
                'filter-all-category': '所有类别',
                'loading-text': '正在加载招聘信息...',
                'btn-view-details': '查看详情',
                'empty-title': '没有职位空缺',
                'empty-subtitle': '请稍后再查看或调整搜索过滤器',
                'modal-requirements': '要求',
                'modal-responsibilities': '职责',
                'modal-benefits': '福利',
                'error-loading': '无法加载职位详情。请重试。',
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
                    if (id === 'search-placeholder') {
                        element.setAttribute('placeholder', translation[id]);
                    } else {
                        element.textContent = translation[id];
                    }
                }
            });
            
            localStorage.setItem('preferredLanguage', lang);
        }

        // Function to translate modal content specifically
        function translateModalContent(lang) {
            const translation = translations[lang];
            const modalBody = document.getElementById('modalBody');
            
            modalBody.querySelectorAll('[data-id]').forEach(element => {
                const id = element.getAttribute('data-id');
                if (translation[id]) {
                    element.textContent = translation[id];
                }
            });
        }

        // ===== NAVIGATION & UI =====

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
                
                const langMap = {
                    'en': '🌐 EN',
                    'id': '🌐 ID',
                    'jp': '🌐 JP',
                    'cn': '🌐 CN'
                };
                
                currentLang.textContent = langMap[lang] || '🌐 EN';
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
            // Load jobs from Directus
            await renderJobs();
            
            // Set default language to ENGLISH
            const savedLang = localStorage.getItem('preferredLanguage') || 'en';
            changeLanguage(savedLang);
            
            const langMap = {
                'en': '🌐 EN',
                'id': '🌐 ID',
                'jp': '🌐 JP',
                'cn': '🌐 CN'
            };
            
            currentLang.textContent = langMap[savedLang] || '🌐 EN';
        });
    </script>
</body>
</html>