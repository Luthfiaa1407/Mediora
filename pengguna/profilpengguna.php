<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - Mediora Apotek Online</title>
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
            background-color: var(--gray);
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

        /* Main Content */
        .profile-container {
            display: flex;
            gap: 30px;
            padding: 40px 0;
        }

        /* Sidebar */
        .profile-sidebar {
            width: 250px;
            background-color: var(--light);
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            height: fit-content;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
            margin: 0 auto 15px;
            display: block;
        }

        .profile-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .profile-email {
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        .sidebar-menu {
            list-style: none;
            margin-top: 30px;
        }

        .sidebar-menu li {
            margin-bottom: 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--dark);
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background-color: rgba(0, 179, 179, 0.1);
            color: var(--primary);
        }

        .sidebar-menu a i {
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .profile-content {
            flex: 1;
            background-color: var(--light);
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid var(--gray);
            padding-bottom: 20px;
        }

        .profile-header h1 {
            font-size: 1.5rem;
            color: var(--primary-dark);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 14px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--light);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--light);
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }

        .form-note {
            font-size: 12px;
            color: var(--dark-gray);
            margin-top: 5px;
        }

        /* Photo Upload */
        .photo-upload {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .photo-preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--gray);
        }

        .upload-btn {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .upload-btn input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: white;
            padding: 60px 0 20px;
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
            .profile-container {
                flex-direction: column;
            }
            
            .profile-sidebar {
                width: 100%;
            }
            
            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
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
                    <img src="../pengguna/lg.png" alt="Mediora">
                </a>
                
                <div class="nav-menu">
                    <a href="index.html">Beranda</a>
                    <a href="produk.html">Produk</a>
                    <a href="kategori.html">Kategori</a>
                    <a href="tentang.html">Tentang Kami</a>
                    <a href="kontak.html">Kontak</a>
                </div>
                
                <div class="nav-actions">
                    <a href="profil.html" style="color: var(--primary);">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="keranjang.html">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="container">
        <div class="profile-container">
            <!-- Sidebar Profil -->
            <aside class="profile-sidebar">
                <div class="profile-info">
                    <img src="images/user-avatar.jpg" alt="Profil Pengguna" class="profile-picture">
                    <div class="profile-name">Nama Pengguna</div>
                    <div class="profile-email">user@example.com</div>
                </div>
                
                <ul class="sidebar-menu">
                    <li><a href="profil.html"><i class="fas fa-user"></i> Profil Saya</a></li>
                    <li><a href="pesanan.html"><i class="fas fa-shopping-bag"></i> Pesanan Saya</a></li>
                    <li><a href="alamat.html"><i class="fas fa-map-marker-alt"></i> Alamat Saya</a></li>
                    <li><a href="pembayaran.html"><i class="fas fa-credit-card"></i> Metode Pembayaran</a></li>
                    <li><a href="konsultasi.html"><i class="fas fa-comment-medical"></i> Konsultasi</a></li>
                    <li><a href="#" class="active"><i class="fas fa-user-edit"></i> Edit Profil</a></li>
                    <li><a href="keamanan.html"><i class="fas fa-lock"></i> Keamanan</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
                </ul>
            </aside>
            
            <!-- Konten Utama -->
            <div class="profile-content">
                <div class="profile-header">
                    <h1>Edit Profil</h1>
                    <button type="button" class="btn btn-outline">Batalkan</button>
                </div>
                
                <form id="profileForm">
                    <!-- Upload Foto Profil -->
                    <div class="photo-upload">
                        <img src="images/user-avatar.jpg" alt="Foto Profil" class="photo-preview" id="photoPreview">
                        <div>
                            <label class="form-label">Foto Profil</label>
                            <button type="button" class="btn btn-outline upload-btn">
                                <i class="fas fa-upload"></i> Unggah Foto
                                <input type="file" id="photoUpload" accept="image/*">
                            </button>
                            <p class="form-note">Format: JPG, PNG maksimal 2MB</p>
                        </div>
                    </div>
                    
                    <!-- Informasi Pribadi -->
                    <h2 style="margin-bottom: 20px; color: var(--primary-dark);">Informasi Pribadi</h2>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName" class="form-label">Nama Depan</label>
                            <input type="text" id="firstName" class="form-control" value="Nama">
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="form-label">Nama Belakang</label>
                            <input type="text" id="lastName" class="form-control" value="Pengguna">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" value="user@example.com" disabled>
                        <p class="form-note">Email tidak dapat diubah. Hubungi kami jika perlu perubahan.</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="tel" id="phone" class="form-control" value="081234567890">
                    </div>
                    
                    <div class="form-group">
                        <label for="birthDate" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="birthDate" class="form-control" value="1990-01-01">
                    </div>
                    
                    <div class="form-group">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select id="gender" class="form-control">
                            <option value="male">Laki-laki</option>
                            <option value="female" selected>Perempuan</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    
                    <!-- Informasi Kesehatan (Opsional) -->
                    <h2 style="margin: 30px 0 20px; color: var(--primary-dark);">Informasi Kesehatan (Opsional)</h2>
                    
                    <div class="form-group">
                        <label for="bloodType" class="form-label">Golongan Darah</label>
                        <select id="bloodType" class="form-control">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="allergies" class="form-label">Alergi Obat</label>
                        <textarea id="allergies" class="form-control" rows="3" placeholder="Masukkan obat-obatan yang menyebabkan alergi"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="medicalHistory" class="form-label">Riwayat Penyakit</label>
                        <textarea id="medicalHistory" class="form-control" rows="3" placeholder="Masukkan riwayat penyakit yang pernah diderita"></textarea>
                    </div>
                    
                    <!-- Tombol Aksi -->
                    <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px; border-top: 1px solid var(--gray); padding-top: 20px;">
                        <button type="button" class="btn btn-outline">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
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
                        <img src="../pengguna/lg.png" alt="logo">
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
                        <li><a href="../tentangkami.php">Tentang Kami</a></li>
                        <li><a href="../kebijakanprivasi.php">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="../Layanan_FAQ/php/faq.php">FAQ</a></li>
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

    <script>
        // Fungsi untuk menampilkan preview foto profil
        document.getElementById('photoUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('photoPreview').src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        
        // Fungsi untuk form submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Perubahan profil berhasil disimpan!');
        });
    </script>
</body>
</html>