<?php
include '../koneksi/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama   = $_POST['nama'] ?? '';
    $gender = $_POST['gender'] ?? '';

    // Validasi input sederhana
    if (empty($nama) || empty($gender) || !isset($_FILES['bukti'])) {
        echo "<script>alert('Lengkapi semua data!'); window.history.back();</script>";
        exit;
    }

    // Lokasi direktori upload
    $uploadDir = '../php/uploads/';
    $originalName = basename($_FILES['bukti']['name']);
    $fileType = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    // File name baru untuk mencegah duplikasi
    $newFileName = time() . '_' . preg_replace('/[^a-zA-Z0-9_.]/', '', $originalName);
    $targetFilePath = $uploadDir . $newFileName;

    // Format file yang diizinkan
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    // Cek tipe file
    if (!in_array($fileType, $allowedTypes)) {
        echo "<script>alert('Hanya file gambar (jpg, jpeg, png, gif, webp) yang diperbolehkan.'); window.history.back();</script>";
        exit;
    }

    // Proses upload
    if (move_uploaded_file($_FILES['bukti']['tmp_name'], $targetFilePath)) {
        // Simpan ke database
        $sql = "INSERT INTO pembayaran (nama, gender, bukti) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nama, $gender, $targetFilePath);

        if ($stmt->execute()) {
            // Redirect ke halaman bukti transaksi dengan parameter nama
            header("Location: hasil.php?nama=" . urlencode($nama));
            exit;
        } else {
            echo "Gagal menyimpan data ke database: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Gagal mengunggah file.";
    }

    $conn->close();
} else {
    echo "Akses tidak valid.";
}
?>
