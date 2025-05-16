<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Mediora Apotek Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #00B3B3;
            --primary-dark: #008B8B;
            --secondary: #FF6B6B;
            --light: #FFFFFF;
            --dark: #333333;
            --gray: #F5F5F5;
            --dark-gray: #777777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--light);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-menu a {
            font-weight: 500;
            color: var(--dark);
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(135deg, rgba(0, 179, 179, 0.1) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 80px 0;
            text-align: center;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .about-hero p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: var(--dark-gray);
        }

        /* About Content */
        .about-content {
            padding: 60px 0;
        }

        .about-section {
            margin-bottom: 60px;
        }

        .about-section h2 {
            font-size: 2rem;
            color: var(--primary-dark);
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .about-section h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            margin: 15px auto;
        }

        .about-section p {
            margin-bottom: 20px;
            color: var(--dark);
            text-align: center;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .team-member {
            background-color: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            padding: 30px 20px;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 179, 179, 0.1);
        }

        .member-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--gray);
            margin: 0 auto 20px;
            display: block;
        }

        .member-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .member-position {
            color: var(--secondary);
            font-weight: 500;
            margin-bottom: 15px;
            display: block;
        }

        .member-bio {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        /* Mission Section */
        .mission-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .mission-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-top: 4px solid var(--primary);
        }

        .mission-card h3 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .mission-card p {
            text-align: left;
            color: var(--dark-gray);
        }

        /* Footer */
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

        .footer-logo img {
            height: 30px;
            margin-right: 10px;
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
            text-decoration: none;
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
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 14px;
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2rem;
            }
            
            .about-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            .mission-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="../pengguna/lg.png" alt="logo" class="w-full h-full object-contain">
                </div>
                
                <div class="nav-menu">
                    <a href="../Layanan_FAQ/php/faq.php">FAQ</a>
                    <a href="#">Produk</a>
                    <a href="#">Kategori</a>
                    <a href="#">Tentang Kami</a>
                </div>
                
                <div class="nav-actions">
                    <a href="../mencariproduk.php">
                       <i class="fas fa-search"></i>
                    </a>
                    <i class="fas fa-user"></i>
                    <div style="position: relative;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Tentang Mediora</h1>
            <p>Platform apotek online yang menghadirkan solusi digital inovatif di bidang kesehatan untuk masyarakat Indonesia</p>
        </div>
    </section>
    
    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <div class="about-section">
                <h2>Siapa Kami</h2>
                <p>Mediora adalah platform apotek online yang dikembangkan oleh tim developer muda dengan semangat tinggi untuk menghadirkan solusi digital di bidang kesehatan. Kami percaya bahwa akses terhadap obat dan layanan farmasi seharusnya mudah, aman, dan cepat – itulah yang menjadi landasan kami dalam membangun Mediora.</p>
                <p>Dengan menggabungkan pengetahuan teknis dan pemahaman terhadap kebutuhan masyarakat, kami menciptakan Mediora sebagai platform apotek online yang memudahkan pengguna dalam membeli obat, berkonsultasi dengan apoteker, dan mendapatkan layanan kesehatan secara daring.</p>
            </div>
            
            <div class="about-section">
                <h2>Tim Pengembang Mediora</h2>
                <div class="team-grid">
                    <!-- Anggota Tim 1 -->
                    <div class="team-member">
                        <img src="images/team1.jpg" alt="Clara" class="member-photo">
                        <h3 class="member-name">Clara Monica</h3>
                        <span class="member-position">2317051055</span>
                        <p class="member-bio">Bertanggung jawab atas...</p>
                    </div>
                    
                    <!-- Anggota Tim 2 -->
                    <div class="team-member">
                        <img src="images/team2.jpg" alt="Luthfia" class="member-photo">
                        <h3 class="member-name">Luthfia Rahma Sholihah</h3>
                        <span class="member-position">2317051051</span>
                        <p class="member-bio">Bertangggung jawab atas...</p>
                    </div>
                    
                    <!-- Anggota Tim 3 -->
                    <div class="team-member">
                        <img src="images/team3.jpg" alt="Cahya" class="member-photo">
                        <h3 class="member-name">Cahya Nerissa</h3>
                        <span class="member-position">NPM</span>
                        <p class="member-bio">Bertanggung jawab atas...</p>
                    </div>
                    
                    <!-- Anggota Tim 4 -->
                    <div class="team-member">
                        <img src="images/team4.jpg" alt="Dinda" class="member-photo">
                        <h3 class="member-name">Kartika Dinda</h3>
                        <span class="member-position">NPM</span>
                        <p class="member-bio">Bertanggung jawab atas....</p>
                    </div>
                </div>
            </div>
            
            <div class="about-section">
                <h2>Visi & Misi Kami</h2>
                <div class="mission-cards">
                    <div class="mission-card">
                        <h3>Visi</h3>
                        <p>Menjadi platform apotek online terdepan di Indonesia yang menghubungkan masyarakat dengan layanan kesehatan berkualitas melalui teknologi digital.</p>
                    </div>
                    
                    <div class="mission-card">
                        <h3>Misi 1</h3>
                        <p>Menyediakan akses mudah dan cepat terhadap obat-obatan dan produk kesehatan dengan sistem yang aman dan terpercaya.</p>
                    </div>
                    
                    <div class="mission-card">
                        <h3>Misi 2</h3>
                        <p>Mengembangkan solusi teknologi inovatif untuk meningkatkan pengalaman pengguna dalam mengakses layanan kesehatan.</p>
                    </div>
                    
                    <div class="mission-card">
                        <h3>Misi 3</h3>
                        <p>Berkolaborasi dengan tenaga kesehatan profesional untuk menyediakan layanan konsultasi yang berkualitas.</p>
                    </div>
                    
                    <div class="mission-card">
                        <h3>Misi 4</h3>
                        <p>Mengedukasi masyarakat tentang penggunaan obat yang benar dan gaya hidup sehat melalui platform digital.</p>
                    </div>
                    
                    <div class="mission-card">
                        <h3>Komitmen</h3>
                        <p>Kami berkomitmen untuk terus mengembangkan Mediora sebagai solusi apotek online yang terpercaya dan relevan dengan kebutuhan masyarakat Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
     <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="../pengguna/lg.png" alt="Apotek Online">
                    </div>
                    <p>Apotek Online Terpercaya di Indonesia. Menyediakan obat-obatan berkualitas dengan layanan terbaik untuk kesehatan keluarga Anda.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mediora.id?igsh=OGdzbWh5azNqZmFk"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="../pengguna/kebijakanprivasi.php">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="../pengguna/Layanan_FAQ/php/faq.php">FAQ</a></li>
                        <li><a href="mailto:mediora.ofc@gmail.com">Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Kontak Kami</h3>
                    <ul>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>(0821)70510988</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>mediora.ofc@gmail.com</span>
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
</body>
</html>