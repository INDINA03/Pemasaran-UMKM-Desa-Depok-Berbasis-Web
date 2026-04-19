<?php
include '../includes/session.php';
include '../config/database.php';
include 'header_admin.php';

$productCount = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$categoryCount = $pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();
?>

<div class="dashboard">
    <div class="card">
        <h3>Total Produk</h3>
        <p><?= $productCount ?></p>
    </div>
    <div class="card">
        <h3>Total Kategori</h3>
        <p><?= $categoryCount ?></p>
    </div>
</div>

<?php include 'footer_admin.php'; ?>