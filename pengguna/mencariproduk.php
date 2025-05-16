<?php
function getDBConnection() {
    $host = 'localhost';
    $dbname = 'apotek_online';
    $username = 'root';
    $password = '';
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
}

function searchProducts($query) {
    $conn = getDBConnection();
    $searchQuery = '%' . $query . '%';
    
    $stmt = $conn->prepare("SELECT * FROM products 
                          WHERE name LIKE :query 
                          OR category LIKE :query 
                          OR description LIKE :query
                          ORDER BY name ASC");
    $stmt->bindParam(':query', $searchQuery);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPopularProducts() {
    $conn = getDBConnection();
    $stmt = $conn->query("SELECT * FROM products ORDER BY sold DESC LIMIT 8");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Produk - Apotek Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            background-color: var(--gray);
            color: var(--dark);
            line-height: 1.6;
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
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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
        
        .search-form {
            flex-grow: 1;
            max-width: 600px;
            margin: 0 30px;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 12px 20px;
            padding-right: 50px;
            border: 2px solid var(--gray);
            border-radius: 30px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .search-input:focus {
            border-color: var(--primary);
            outline: none;
        }
        
        .search-button {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 8px 15px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .search-button:hover {
            background-color: var(--primary-dark);
        }
        
        .nav-actions {
            display: flex;
            gap: 20px;
        }
        
        .nav-icon {
            font-size: 20px;
            color: var(--dark);
            cursor: pointer;
            transition: color 0.3s;
        }
        
        .nav-icon:hover {
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
        
        /* Main Content */
        .main-content {
            padding: 40px 0;
        }
        
        .search-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .search-header h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .search-tags {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        
        .tag {
            background-color: var(--light);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid var(--gray);
        }
        
        .tag:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .product-card {
            background-color: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
        }
        
        .product-image {
            height: 200px;
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
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-category {
            font-size: 12px;
            color: var(--dark-gray);
            margin-bottom: 5px;
            text-transform: uppercase;
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
        
        .btn {
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 14px;
            border: none;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        /* No Results */
        .no-results {
            text-align: center;
            padding: 50px 0;
            grid-column: 1 / -1;
        }
        
        .no-results i {
            font-size: 50px;
            color: var(--dark-gray);
            margin-bottom: 20px;
        }
        
        .no-results h3 {
            color: var(--dark);
            margin-bottom: 10px;
        }
        
        .no-results p {
            color: var(--dark-gray);
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
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
            .navbar {
                flex-direction: column;
                gap: 20px;
            }
            
            .search-form {
                margin: 20px 0;
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            
            .search-header h1 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-actions {
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo">
                    <img src="../pengguna/lg.png" alt="Apotek Online">
                </a>
                
                <form class="search-form" action="search.php" method="GET">
                    <input type="text" name="query" class="search-input" placeholder="Cari obat, vitamin, atau produk kesehatan..." required>
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                
                <div class="nav-actions">
                    <i class="fas fa-user nav-icon"></i>
                    <div style="position: relative;">
                        <i class="fas fa-shopping-cart nav-icon"></i>
                        <span class="cart-count">3</span>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="search-header">
                <h1>Cari Produk Kesehatan</h1>
                <p>Temukan obat, vitamin, dan produk kesehatan yang Anda butuhkan</p>
                
                <div class="search-tags">
                    <div class="tag">Vitamin C</div>
                    <div class="tag">Obat Demam</div>
                    <div class="tag">Masker</div>
                    <div class="tag">Perawatan Kulit</div>
                    <div class="tag">Alat Kesehatan</div>
                </div>
            </div>
            
            <!-- Hasil Pencarian -->
            <div class="product-grid">
                <!-- Contoh Produk 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge">Diskon 20%</span>
                        <img src="https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Panadol" alt="Panadol">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Obat Bebas</div>
                        <h3 class="product-name">Panadol 500mg Tablet 10s</h3>
                        <div class="product-price">Rp 25.000 <small>Rp 30.000</small></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(128)</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline">Detail</button>
                            <button class="btn btn-primary">Beli</button>
                        </div>
                    </div>
                </div>
                
                <!-- Contoh Produk 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Enervon-C" alt="Enervon-C">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Vitamin</div>
                        <h3 class="product-name">Enervon-C Multivitamin 30 Tablet</h3>
                        <div class="product-price">Rp 35.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(89)</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline">Detail</button>
                            <button class="btn btn-primary">Beli</button>
                        </div>
                    </div>
                </div>
                
                <!-- Contoh Produk 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge">Baru</span>
                        <img src="https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Blackmores" alt="Blackmores">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Suplemen</div>
                        <h3 class="product-name">Blackmores Vitamin C 1000mg 60 Tablet</h3>
                        <div class="product-price">Rp 150.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(256)</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline">Detail</button>
                            <button class="btn btn-primary">Beli</button>
                        </div>
                    </div>
                </div>
                
                <!-- Contoh Produk 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300/F5F5F5/00B3B3?text=Betadine" alt="Betadine">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Perawatan Mulut</div>
                        <h3 class="product-name">Betadine Obat Kumur 100ml</h3>
                        <div class="product-price">Rp 45.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(172)</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline">Detail</button>
                            <button class="btn btn-primary">Beli</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
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