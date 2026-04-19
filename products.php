<?php
include '../includes/session.php';
include '../config/database.php';

// Tambah / Edit / Hapus produk
if(isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $umkm_name = $_POST['umkm_name'];
    $contact = $_POST['contact'];
    
    $image = $_FILES['image']['name'];
    $target = "../assets/uploads/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image, category_id, umkm_name, contact) VALUES (?,?,?,?,?,?,?)");
    $stmt->execute([$name, $desc, $price, $image, $category_id, $umkm_name, $contact]);
    header("Location: products.php");
}
// ... (edit dan delete serupa)
?>

<!-- Form dan tabel produk -->