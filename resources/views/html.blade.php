<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوكيشنكم - خدمات الشحن والتوصيل في سلطنة عمان</title>
    <meta name="description" content="لوكيشنكم - شركة رائدة في خدمات الشحن والتوصيل المحلي والدولي في سلطنة عمان. نقدم حلول شحن سريعة وآمنة وموثوقة.">
    
    <!-- Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1e3a8a;
            --secondary-color: #3b82f6;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --gradient-primary: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            --gradient-secondary: linear-gradient(135deg, #f59e0b 0%, #f97316 100%);
            --gradient-success: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Header Styles */
        .navbar {
            background: var(--gradient-primary);
            padding: 1rem 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--white) !important;
        }

        .navbar-nav .nav-link {
            color: var(--white) !important;
            font-weight: 600;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--white);
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 3rem;
            opacity: 0.8;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .btn-hero {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .btn-primary-hero {
            background: var(--gradient-secondary);
            color: var(--white);
            border: none;
        }

        .btn-primary-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4);
            color: var(--white);
        }

        .btn-outline-hero {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline-hero:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        /* Services Section */
        .services-section {
            padding: 5rem 0;
            background: var(--white);
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--text-light);
            margin-bottom: 4rem;
        }

        .service-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--white);
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .service-description {
            color: var(--text-light);
            line-height: 1.8;
        }

        /* Features Section */
        .features-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient-success);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 1.5rem;
            font-size: 1.5rem;
            color: var(--white);
            flex-shrink: 0;
        }

        .feature-content h4 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .feature-content p {
            color: var(--text-light);
            margin: 0;
        }

        /* Stats Section */
        .stats-section {
            padding: 4rem 0;
            background: var(--gradient-primary);
            color: var(--white);
        }

        .stat-item {
            text-align: center;
            margin-bottom: 2rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: var(--white);
            padding: 3rem 0 1rem;
        }

        .footer h5 {
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .footer p, .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }

        .footer a:hover {
            color: var(--accent-color);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--gradient-secondary);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.4);
        }

        /* Animations */
        @keyframes fadeInUp {
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
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 2rem;
            }
            
            .feature-item {
                flex-direction: column;
                text-align: center;
            }
            
            .feature-icon {
                margin: 0 0 1rem 0;
            }
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255,255,255,0.3);
            border-top: 3px solid var(--white);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-shipping-fast me-2"></i>
                لوكيشنكم
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل بنا</a>
                    </li>
                </ul>
                
                <div class="d-flex">
                    <a href="#contact" class="btn btn-outline-light me-2">طلب خدمة</a>
                    <a href="tel:+96812345678" class="btn btn-warning">
                        <i class="fas fa-phone me-1"></i>
                        اتصل الآن
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="floating-element">
            <i class="fas fa-plane fa-3x text-white opacity-25"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-ship fa-3x text-white opacity-25"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-truck fa-3x text-white opacity-25"></i>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">لوكيشنكم</h1>
                <h2 class="hero-subtitle">خدمات الشحن والتوصيل الرائدة في سلطنة عمان</h2>
                <p class="hero-description">
                    نقدم حلول شحن متكاملة ومتطورة للخدمات المحلية والدولية. 
                    نضمن لكم سرعة في التوصيل وأمان في النقل وموثوقية في الخدمة
                </p>
                <div class="hero-buttons">
                    <a href="#services" class="btn-hero btn-primary-hero">
                        <i class="fas fa-rocket me-2"></i>
                        استكشف خدماتنا
                    </a>
                    <a href="#contact" class="btn-hero btn-outline-hero">
                        <i class="fas fa-phone me-2"></i>
                        احصل على عرض سعر
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title">خدماتنا المتميزة</h2>
            <p class="section-subtitle">نقدم مجموعة شاملة من خدمات الشحن والتوصيل</p>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="service-title">الشحن الدولي</h3>
                        <p class="service-description">
                            خدمات شحن دولية سريعة وآمنة لجميع أنحاء العالم. 
                            نضمن وصول شحنتكم في الوقت المحدد وبأفضل الأسعار
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3 class="service-title">الشحن المحلي</h3>
                        <p class="service-description">
                            خدمات توصيل محلية تغطي جميع محافظات سلطنة عمان. 
                            توصيل سريع وموثوق لجميع أنواع البضائع
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h3 class="service-title">تعبئة وتغليف</h3>
                        <p class="service-description">
                            خدمات تعبئة وتغليف احترافية لحماية شحنتكم. 
                            نستخدم أفضل المواد وأحدث التقنيات
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <h3 class="service-title">تتبع الشحنات</h3>
                        <p class="service-description">
                            نظام تتبع متطور يتيح لكم متابعة شحنتكم خطوة بخطوة. 
                            تحديثات فورية عبر الهاتف والإنترنت
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="service-title">خدمة 24/7</h3>
                        <p class="service-description">
                            خدمة عملاء متاحة على مدار الساعة. 
                            فريق متخصص لمساعدتكم في أي وقت
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="service-title">تأمين الشحنات</h3>
                        <p class="service-description">
                            تأمين شامل لجميع الشحنات ضد الأضرار والضياع. 
                            راحة البال لكم ولعملائنا
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="about">
        <div class="container">
            <h2 class="section-title">لماذا تختار لوكيشنكم؟</h2>
            <p class="section-subtitle">نتميز بالجودة والموثوقية والسرعة في جميع خدماتنا</p>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-content">
                            <h4>خبرة 15+ سنة</h4>
                            <p>خبرة طويلة في مجال الشحن والتوصيل مع آلاف العملاء الراضين</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="feature-content">
                            <h4>سرعة في التوصيل</h4>
                            <p>نضمن وصول شحنتكم في أسرع وقت ممكن مع الحفاظ على الجودة</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="feature-content">
                            <h4>أسعار تنافسية</h4>
                            <p>أسعار عادلة ومنافسة مع ضمان جودة الخدمة</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature-content">
                            <h4>دعم فني متميز</h4>
                            <p>فريق دعم فني متخصص لمساعدتكم في أي استفسار</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number" data-target="15000">0</span>
                        <span class="stat-label">شحنة ناجحة</span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-label">دولة نخدمها</span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number" data-target="5000">0</span>
                        <span class="stat-label">عميل راضي</span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number" data-target="15">0</span>
                        <span class="stat-label">سنة خبرة</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="fas fa-shipping-fast me-2"></i>لوكيشنكم</h5>
                    <p>شركة رائدة في خدمات الشحن والتوصيل في سلطنة عمان. نقدم حلول شحن متكاملة ومتطورة للخدمات المحلية والدولية.</p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>خدماتنا</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">الشحن الدولي</a></li>
                        <li><a href="#">الشحن المحلي</a></li>
                        <li><a href="#">تعبئة وتغليف</a></li>
                        <li><a href="#">تتبع الشحنات</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>معلومات الاتصال</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>مسقط، سلطنة عمان</p>
                    <p><i class="fas fa-phone me-2"></i>+968 1234 5678</p>
                    <p><i class="fas fa-envelope me-2"></i>info@locationkum.net</p>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>ساعات العمل</h5>
                    <p>الأحد - الخميس: 8:00 ص - 6:00 م</p>
                    <p>الجمعة - السبت: 9:00 ص - 4:00 م</p>
                    <p>خدمة الطوارئ: 24/7</p>
                </div>
            </div>
            
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2025 لوكيشنكم. جميع الحقوق محفوظة.</p>
                </div>
                <div class="col-md-6 text-end">
                    <p>تصميم وتطوير بواسطة فريق لوكيشنكم</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Loading Screen
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loading').classList.add('hidden');
            }, 1000);
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar Background on Scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(30, 58, 138, 0.95)';
            } else {
                navbar.style.background = 'var(--gradient-primary)';
            }
        });

        // Animated Counter
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 16);
        }

        // Intersection Observer for Stats
        const statsSection = document.querySelector('.stats-section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.querySelectorAll('.stat-number').forEach(counter => {
                        animateCounter(counter);
                    });
                    observer.unobserve(entry.target);
                }
            });
        });

        if (statsSection) {
            observer.observe(statsSection);
        }

        // Add hover effects to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add click effects to buttons
        document.querySelectorAll('.btn-hero').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.floating-element');
            
            parallax.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
</body>
</html> 