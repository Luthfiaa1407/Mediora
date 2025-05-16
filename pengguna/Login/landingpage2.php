<?php
// Mediora - Sistem Informasi Apotek Online
// File: mediora_landing_alfagift_style.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediora - Apotek Online Terpercaya</title>
    <style>
        /* Base Styles */
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
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: var(--light);
            border: none;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 179, 179, 0.2);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--light);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            color: var(--light);
            border: none;
        }
        
        .btn-secondary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        /* Header Styles */
        header {
            background-color: var(--light);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 32px;
        }
        
        .nav-menu {
            display: flex;
            gap: 30px;
        }
        
        .nav-menu a {
            font-weight: 500;
            color: var(--dark);
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: var(--primary);
        }
        
        .nav-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        
        .nav-actions i {
            font-size: 20px;
            color: var(--dark);
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .nav-actions i:hover {
            color: var(--primary);
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--secondary);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(0, 179, 179, 0.1) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-container {
            display: flex;
            align-items: center;
            min-height: 500px;
        }
        
        .hero-content {
            flex: 1;
            padding-right: 40px;
        }
        
        .hero-image {
            flex: 1;
            position: relative;
            height: 100%;
            min-height: 400px;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: var(--primary);
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: var(--dark-gray);
            max-width: 500px;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
        }
        
        .hero-image img {
            position: absolute;
            right: 0;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        /* Category Section */
        .categories {
            padding: 20px 0 40px;
        }
        
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .category-card {
            background-color: var(--light);
            border-radius: 12px;
            padding: 20px 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            border-color: var(--primary);
        }
        
        .category-icon {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .category-name {
            font-size: 14px;
            font-weight: 500;
        }
        
        /* Products Section */
        .products-section {
            padding: 60px 0;
            background-color: var(--gray);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 28px;
            color: var(--primary);
        }
        
        .view-all {
            color: var(--primary);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }
        
        .product-card {
            background-color: var(--light);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--secondary);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
            z-index: 2;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .product-image {
            height: 180px;
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }
        
        .product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.3s;
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.05);
        }
        
        .product-info {
            padding: 15px;
        }
        
        .product-category {
            font-size: 12px;
            color: var(--dark-gray);
            margin-bottom: 5px;
        }
        
        .product-name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .product-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .product-price small {
            font-size: 14px;
            color: var(--dark-gray);
            text-decoration: line-through;
            margin-left: 5px;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 15px;
        }
        
        .product-rating i {
            color: #FFC107;
            font-size: 14px;
        }
        
        .product-rating span {
            font-size: 12px;
            color: var(--dark-gray);
        }
        
        .product-actions {
            display: flex;
            justify-content: space-between;
        }
        
        /* Promo Banner */
        .promo-banner {
            background-color: var(--primary);
            color: white;
            padding: 15px 0;
            text-align: center;
            margin: 30px 0;
            border-radius: 8px;
        }
        
        .promo-banner h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .promo-banner p {
            font-size: 14px;
        }
        
        /* Features Section */
        .features {
            padding: 60px 0;
            background-color: var(--light);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .feature-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 12px;
            background-color: var(--gray);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        /* Newsletter */
        .newsletter {
            background-color: var(--primary);
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        
        .newsletter h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }
        
        .newsletter p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 8px 0 0 8px;
            font-size: 14px;
        }
        
        .newsletter-form button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 0 8px 8px 0;
            font-weight: 600;
            cursor: pointer;
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
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-content {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .hero-image {
                min-height: 300px;
            }
            
            .nav-menu {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .section-title {
                font-size: 24px;
            }
            
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
                border-radius: 8px;
            }
            
            .newsletter-form button {
                margin-top: 10px;
                padding: 12px;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 28px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
            }
            
            .category-grid {
                grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
                gap: 10px;
            }
            
            .category-icon {
                font-size: 24px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header/Navbar -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="./image/lg.png" alt="logo" class="w-full h-full object-contain">
                </div>
                
                <div class="nav-menu">
                    <a href="#">Beranda</a>
                    <a href="#">Produk</a>
                    <a href="#">Kategori</a>
                    <a href="#">Tentang Kami</a>
                </div>
                
                <div class="nav-actions">
                    <i class="fas fa-search"></i>
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
    <section class="hero">
        <div class="container">
            <div class="hero-container">
                <div class="hero-content">
                    <h1>Kesehatan Keluarga Dimulai dari Sini</h1>
                    <p>Temukan obat, vitamin, dan produk kesehatan terbaik dengan harga terjangkau. Gratis ongkir untuk setiap pembelian.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">Belanja Sekarang</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://via.placeholder.com/600x500/F5F5F5/00B3B3?text=MEDIORA+APOTEK+ONLINE" alt="Mediora Apotek Online">
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Kategori Produk</h2>
            <div class="category-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-capsules"></i>
                    </div>
                    <div class="category-name">Obat Bebas</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-prescription-bottle-alt"></i>
                    </div>
                    <div class="category-name">Obat Resep</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="category-name">Kesehatan Jantung</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="category-name">Kesehatan Otak</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-bone"></i>
                    </div>
                    <div class="category-name">Tulang & Sendi</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="category-name">Bayi & Anak</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="category-name">Kesehatan Mata</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <div class="category-name">Kesehatan Gigi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Banner -->
    <section class="container">
        <div class="promo-banner">
            <h3>Mediora Konsultasi & Belanja Obat Online dengan Mudah</h3>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Produk Rekomendasi</h2>
                <a href="#" class="view-all">Lihat Semua <i class="fas fa-chevron-right"></i></a>
            </div>
            
            <div class="product-grid" id="best-seller-products">
                <!-- Produk akan diisi oleh JavaScript -->
            </div>
        </div>
    </section>

    <!-- Promo Products -->
    <section class="products-section" style="background-color: white;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Produk yang mungkin anda sukai</h2>
                <a href="#" class="view-all">Lihat Semua <i class="fas fa-chevron-right"></i></a>
            </div>
            
            <div class="product-grid" id="promo-products">
                <!-- Produk akan diisi oleh JavaScript -->
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title" style="text-align: center;">Kenapa Memilih Mediora?</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 40px; color: var(--dark-gray);">Kami memberikan pelayanan terbaik untuk kesehatan Anda dan keluarga</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h3>Gratis Ongkir tanpa Syarat</h3>
                    <p>Pesanan diproses dalam 1x24 jam dengan kemasan khusus untuk obat</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Sameday Delivery</h3>
                    <p>Pengiriman dikirim hari itu juga</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Produk Lebih Lengkap</h3>
                    <p>Produk 100% asli dan terdaftar BPOM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Dapatkan Konsultasi dengan Apoteker</h2>
            <p>Berlangganan Mediora dengan kami untuk konsultasikan dirimu dengan apoteker</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Masukkan alamat email Anda">
                <button type="submit" class="btn btn-secondary">Berlangganan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="footer-logo">
                        <img src="./image/lg.png" alt="logo">
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
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#">Konsultasi Apoteker</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="mailto:mediora.ofc@gmail.com">Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Kontak Kami</h3>
                    <ul>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>(0821) sisanya kapan-kapan</span>
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

    <script>
        // Data Produk Terlaris
        const bestSellerProducts = [
            { 
                id: 1, 
                name: "Blackmores Multivitamin + Minerals 120 Tablet", 
                category: "Vitamin", 
                price: "Rp 320.000", 
                originalPrice: "Rp 350.000", 
                rating: 4.8,
                reviewCount: 125,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Blackmores"
            },
            { 
                id: 2, 
                name: "Enervon-C Multivitamin 30 Tablet", 
                category: "Vitamin", 
                price: "Rp 25.000", 
                originalPrice: "Rp 30.000", 
                rating: 4.6,
                reviewCount: 89,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Enervon-C"
            },
            { 
                id: 3, 
                name: "Fatigon Multivitamin 30 Kaplet", 
                category: "Vitamin", 
                price: "Rp 28.000", 
                originalPrice: "Rp 32.000", 
                rating: 4.5,
                reviewCount: 76,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Fatigon"
            },
            { 
                id: 4, 
                name: "Imboost Force 10 Tablet", 
                category: "Imunitas", 
                price: "Rp 65.000", 
                originalPrice: "Rp 70.000", 
                rating: 4.7,
                reviewCount: 112,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Imboost"
            },
            { 
                id: 5, 
                name: "Redoxon Double Action 10 Tablet", 
                category: "Vitamin C", 
                price: "Rp 75.000", 
                originalPrice: "Rp 85.000", 
                rating: 4.9,
                reviewCount: 143,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Redoxon"
            },
            { 
                id: 6, 
                name: "Holisticare Ester C 30 Tablet", 
                category: "Vitamin C", 
                price: "Rp 95.000", 
                originalPrice: "Rp 110.000", 
                rating: 4.8,
                reviewCount: 98,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Holisticare"
            },
            { 
                id: 7, 
                name: "Youvit Multivitamin Gummy 30's", 
                category: "Vitamin Anak", 
                price: "Rp 55.000", 
                originalPrice: "Rp 60.000", 
                rating: 4.7,
                reviewCount: 67,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Youvit"
            },
            { 
                id: 8, 
                name: "Fitkom Gummy Multivitamin 60's", 
                category: "Vitamin Anak", 
                price: "Rp 85.000", 
                originalPrice: "Rp 95.000", 
                rating: 4.6,
                reviewCount: 54,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Fitkom"
            }
        ];

        // Data Produk Promo
        const promoProducts = [
            { 
                id: 9, 
                name: "Wellness Pack Premium 30 Tablet", 
                category: "Vitamin", 
                price: "Rp 550.000", 
                originalPrice: "Rp 650.000", 
                rating: 4.9,
                reviewCount: 87,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Wellness+Pack"
            },
            { 
                id: 10, 
                name: "Immuno Support Complex 60 Kapsul", 
                category: "Imunitas", 
                price: "Rp 420.000", 
                originalPrice: "Rp 500.000", 
                rating: 4.8,
                reviewCount: 65,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Immuno+Support"
            },
            { 
                id: 11, 
                name: "Anti-Aging Formula 30 Tablet", 
                category: "Kecantikan", 
                price: "Rp 680.000", 
                originalPrice: "Rp 800.000", 
                rating: 4.7,
                reviewCount: 72,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Anti-Aging"
            },
            { 
                id: 12, 
                name: "Nature's Health Omega-3 1000mg 60 Kapsul", 
                category: "Jantung", 
                price: "Rp 350.000", 
                originalPrice: "Rp 400.000", 
                rating: 4.9,
                reviewCount: 94,
                image: "https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Omega-3"
            }
        ];

        // Fungsi untuk membuat rating bintang
        function createRatingStars(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 >= 0.5;
            let stars = '';
            
            for (let i = 0; i < 5; i++) {
                if (i < fullStars) {
                    stars += '<i class="fas fa-star"></i>';
                } else if (i === fullStars && hasHalfStar) {
                    stars += '<i class="fas fa-star-half-alt"></i>';
                } else {
                    stars += '<i class="far fa-star"></i>';
                }
            }
            
            return stars;
        }

        // Fungsi untuk membuat card produk
        function createProductCard(product) {
            return `
                <div class="product-card">
                    ${product.badge ? `<span class="product-badge">${product.badge}</span>` : ''}
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                    </div>
                    <div class="product-info">
                        <div class="product-category">${product.category}</div>
                        <h3 class="product-name">${product.name}</h3>
                        <div class="product-price">
                            ${product.price}
                            ${product.originalPrice ? `<small>${product.originalPrice}</small>` : ''}
                        </div>
                        <div class="product-rating">
                            ${createRatingStars(product.rating)}
                            <span>(${product.reviewCount})</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline" style="padding: 8px 12px; font-size: 12px;">Detail</button>
                            <button class="btn btn-primary" style="padding: 8px 12px; font-size: 12px;">Beli</button>
                        </div>
                    </div>
                </div>
            `;
        }

        // Fungsi untuk menampilkan produk
        function displayProducts(products, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = products.map(product => createProductCard(product)).join('');
        }

        // Menampilkan produk saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            displayProducts(bestSellerProducts, 'best-seller-products');
            displayProducts(promoProducts, 'promo-products');
        });

        // Animasi scroll halus untuk semua link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Efek hover untuk card
        const cards = document.querySelectorAll('.category-card, .product-card, .feature-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
