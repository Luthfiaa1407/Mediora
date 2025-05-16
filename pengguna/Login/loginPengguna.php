<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mediora Apotek Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variabel Warna */
        :root {
            --primary-dark: #024F55;
            --primary: #3C949E;
            --primary-light: #9BD8DB;
            --primary-lightest: #D5F2F8;
            --primary-bg: #F1F9FB;
            --white: #FFFFFF;
            --text-dark: #333333;
            --text-medium: #555555;
            --text-light: #777777;
            --border-color: #DDDDDD;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--primary-bg);
            color: var(--text-dark);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            cursor: pointer;
            border: none;
            background: none;
        }

        /* Header Styles */
        .header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 15px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            font-size: 28px;
            color: var(--primary);
        }

        .logo-text {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 15px;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-outline {
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            color: var(--white);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        /* Main Content */
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px 20px 80px;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(155, 216, 219, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 80% 70%, rgba(2, 79, 85, 0.1) 0%, transparent 25%);
        }

        .login-container {
            display: flex;
            width: 1000px;
            max-width: 100%;
            height: 620px;
            box-shadow: var(--shadow);
            border-radius: 16px;
            overflow: hidden;
        }

        /* Left Panel */
        .left-panel {
            flex: 1;
            background: linear-gradient(145deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .branding {
            margin-bottom: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            gap: 12px;
        }

        .logo-icon-large {
            font-size: 34px;
            color: var(--primary-light);
        }

        .logo-text-large {
            font-size: 28px;
            font-weight: 700;
        }

        .welcome-text {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .panel-description {
            font-size: 15px;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .features {
            margin-top: 20px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
            gap: 12px;
        }

        .feature-icon {
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        /* Right Panel */
        .right-panel {
            flex: 1;
            background-color: var(--white);
            padding: 50px;
            display: flex;
            flex-direction: column;
        }

        .auth-form {
            margin: auto 0;
            width: 100%;
        }

        .panel-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .panel-title {
            font-size: 26px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
            position: relative;
        }

        .panel-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 25%;
            width: 50%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-light), var(--primary));
            border-radius: 3px;
        }

        .panel-subtitle {
            color: var(--primary);
            font-size: 14px;
            margin-top: 15px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            gap: 5px;
        }

        .tab {
            padding: 10px 25px;
            cursor: pointer;
            font-weight: 600;
            color: var(--primary);
            position: relative;
            font-size: 15px;
            transition: var(--transition);
        }

        .tab.active {
            color: var(--primary-dark);
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-light), var(--primary));
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid var(--primary-lightest);
            border-radius: 8px;
            font-size: 15px;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(155, 216, 219, 0.2);
        }

        .forgot-password {
            text-align: right;
            margin: -10px 0 20px;
        }

        .forgot-link {
            color: var(--primary);
            font-size: 13px;
            font-weight: 500;
            transition: var(--transition);
        }

        .forgot-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            color: var(--white);
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            transition: var(--transition);
            margin-bottom: 20px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(60, 148, 158, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: var(--primary);
            font-size: 13px;
            font-weight: 500;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--primary-lightest);
        }

        .divider::before {
            margin-right: 12px;
        }

        .divider::after {
            margin-left: 12px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--white);
            border: 1px solid var(--primary-lightest);
            color: var(--primary);
            font-size: 16px;
            transition: var(--transition);
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            border-color: var(--primary-light);
        }

        .register-text {
            text-align: center;
            color: var(--primary);
            font-size: 13px;
            margin-top: 10px;
        }

        .register-link {
            color: var(--primary-dark);
            font-weight: 600;
            transition: var(--transition);
        }

        .register-link:hover {
            color: var(--primary);
        }

        /* Footer Styles */
        .footer {
            background-color: var(--primary-dark);
            color: var(--white);
            padding: 50px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary-light);
        }

        .footer-list {
            list-style: none;
        }

        .footer-item {
            margin-bottom: 12px;
        }

        .footer-link {
            color: var(--primary-lightest);
            font-size: 14px;
            transition: var(--transition);
        }

        .footer-link:hover {
            color: var(--white);
        }

        footer {
            background-color: #222;
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .footer-logo i {
            margin-right: 10px;
            color: var(--primary);
        }
        
        .footer-about p {
            opacity: 0.7;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .footer-links h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-contact li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .footer-contact i {
            color: var(--primary);
            margin-top: 3px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 14px;
            opacity: 0.7;
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .contact-icon {
            width: 16px;
            text-align: center;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 13px;
            color: var(--primary-lightest);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                height: auto;
            }

            .left-panel, .right-panel {
                padding: 30px;
            }

            .left-panel {
                order: 2;
            }

            .right-panel {
                order: 1;
            }

            .nav-menu {
                display: none;
            }

            .header-actions {
                margin-left: auto;
            }
        }

        @media (max-width: 480px) {
            .header-container {
                flex-wrap: wrap;
                gap: 10px;
            }

            .brand {
                width: 100%;
                justify-content: center;
            }

            .header-actions {
                width: 100%;
                justify-content: center;
            }

            .left-panel, .right-panel {
                padding: 20px;
            }

            .welcome-text {
                font-size: 24px;
            }

            .panel-title {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container header-container">
            <div class="brand">
                <img src="./image/lg.png" alt="Logo Mediora" class="logo-icon" />
            </div>
            
            <nav class="nav-menu">
                <a href="#" class="nav-link">Beranda</a>
                <a href="#" class="nav-link">Produk</a>
                <a href="#" class="nav-link">Layanan</a>
                <a href="#" class="nav-link">Tentang Kami</a>
                <a href="#" class="nav-link">Kontak</a>
            </nav>
            
            <div class="header-actions">
                <button class="btn btn-outline">Masuk</button>
                <button class="btn btn-primary">Daftar</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="login-container">
            <!-- Left Panel -->
            <div class="left-panel">
                <div class="branding">
                    <div class="logo">
                        <img src="./image/lg.png" alt="Logo Mediora" class="logo-icon" />
                    </div>
                    
                    <h1 class="welcome-text">Selamat Datang</h1>
                    <p class="panel-description">
                        Dapatkan obat dengan cepat dan mudah melalui apotek online Mediora. 
                        Layanan kami siap membantu kebutuhan kesehatan Anda.
                    </p>
                </div>
                
                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div>Pengiriman produk sampai depan rumah anda</div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <div>100% obat asli dan terdaftar BPOM</div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>Praktis dan Hemat Waktu</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Panel -->
            <div class="right-panel">
                <form class="auth-form">
                    <div class="panel-header">
                        <h2 class="panel-title">Masuk Akun</h2>
                        <p class="panel-subtitle">Masuk untuk mengakses layanan apotek online kami</p>
                    </div>
                    
                    <div class="tabs">
                        <div class="tab active">Masuk</div>
                        <div class="tab">Daftar</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email atau Nomor HP</label>
                        <input type="text" id="email" class="form-input" placeholder="Masukkan email/nomor HP" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-input" placeholder="Masukkan password" required>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#" class="forgot-link">Lupa password?</a>
                    </div>
                    
                    <button type="submit" class="login-btn" onclick="window.location.href='landingpage2.php'" >Masuk</button>
                    
                    <div class="divider">atau masuk dengan</div>
                    
                    <div class="social-login">
                        <button type="button" class="social-btn google">
                            <i class="fab fa-google"></i>
                        </button>
                    </div>
                    
                    <p class="register-text">
                        Belum punya akun? <a href="#" class="register-link">Daftar sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </main>

   <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="./image/lg.png" alt="Logo Mediora" class="logo-icon" />

                    </div>
                    <p>Apotek Online Terpercaya di Indonesia. Menyediakan obat-obatan berkualitas dengan layanan terbaik untuk kesehatan keluarga Anda.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mediora.id?igsh=MWRtejM2dmZ2N3N1Nw=="><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#">Pertanyaan Umum</a></li>
                        <li><a href="#">Pemesanan</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="#">Tentang Mediora</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Kontak Kami</h3>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Mediora.ofc@gmail.com</span>
                        </li>
                        <li>
                             <i class="fas fa-clock"></i>
                            <span>Buka setiap hari 07:00 - 21:00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Mediora. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Tab switching functionality
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Update form title based on active tab
                const panelTitle = document.querySelector('.panel-title');
                panelTitle.textContent = tab.textContent === 'Login' ? 'Login Akun' : 'Daftar Akun';
            });
        });

        // Form submission handling
        const loginForm = document.querySelector('.auth-form');
        const loginBtn = document.querySelector('.login-btn');
        
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if(email && password) {
                // Simulate loading
                loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
                loginBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    loginBtn.innerHTML = '<i class="fas fa-check"></i> Berhasil Masuk';
                    
                    // Redirect after successful login (simulated)
                    setTimeout(() => {
                        window.location.href = 'dashboard.html';
                    }, 1000);
                }, 1500);
            } else {
                // Show error state
                loginBtn.textContent = 'Isi semua field!';
                loginBtn.style.background = 'linear-gradient(90deg, #ff6b6b, #ff8787)';
                
                // Reset after 1.5 seconds
                setTimeout(() => {
                    loginBtn.textContent = 'Masuk';
                    loginBtn.style.background = 'linear-gradient(90deg, var(--primary), var(--primary-light))';
                }, 1500);
            }
        });

        // Social button hover effects
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                const icon = this.querySelector('i');
                if (this.classList.contains('google')) {
                    icon.style.color = '#DB4437';
                    this.style.borderColor = '#DB4437';
                }
                if (this.classList.contains('facebook')) {
                    icon.style.color = '#4267B2';
                    this.style.borderColor = '#4267B2';
                }
                if (this.classList.contains('apple')) {
                    icon.style.color = '#000000';
                    this.style.borderColor = '#000000';
                }
            });
            
            btn.addEventListener('mouseleave', function() {
                const icon = this.querySelector('i');
                icon.style.color = '';
                this.style.borderColor = '';
            });
        });

        // Header button functionality
        document.querySelector('.header-actions .btn-outline').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.login-container').scrollIntoView({ behavior: 'smooth' });
        });

        document.querySelector('.header-actions .btn-primary').addEventListener('click', function(e) {
            e.preventDefault();
            // Switch to register tab
            tabs.forEach(t => t.classList.remove('active'));
            tabs[1].classList.add('active');
            document.querySelector('.panel-title').textContent = 'Daftar Akun';
            document.querySelector('.login-container').scrollIntoView({ behavior: 'smooth' });
        });

        // Register link in form footer
        document.querySelector('.register-link').addEventListener('click', function(e) {
            e.preventDefault();
            // Switch to register tab
            tabs.forEach(t => t.classList.remove('active'));
            tabs[1].classList.add('active');
            document.querySelector('.panel-title').textContent = 'Daftar Akun';
        });
    </script>
</body>
</html>
