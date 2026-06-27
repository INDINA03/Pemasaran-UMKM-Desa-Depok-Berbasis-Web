<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kuliner UMKM Desa Depok</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { 
            font-family: 'Poppins', sans-serif; 
            background: #f8f9fa; 
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            padding: 40px 0 20px;
        }
        .header h1 {
            color: #1a3b1a;
            font-size: 2.2rem;
        }
        .header p {
            color: #666;
            font-size: 1rem;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }
        .product-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
            border: 1px solid #e8f5e9;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(44,95,45,0.15);
        }
        .product-card .icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .product-card h3 {
            color: #1a3b1a;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        .product-card .price {
            color: #2c5f2d;
            font-size: 1.4rem;
            font-weight: 700;
        }
        .product-card .desc {
            color: #777;
            font-size: 0.9rem;
            margin: 10px 0;
        }
        .product-card .btn-order {
            background: linear-gradient(135deg, #2c5f2d, #1a3b1a);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            font-family: inherit;
            width: 100%;
        }
        .product-card .btn-order:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(44,95,45,0.3);
        }
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }
        .empty-state i {
            font-size: 4rem;
            display: block;
            margin-bottom: 15px;
            color: #ccc;
        }
        .back-link {
            display: inline-block;
            margin: 20px 0;
            color: #2c5f2d;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .header h1 { font-size: 1.6rem; }
            .product-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🍜 Produk Kuliner UMKM</h1>
            <p>Desa Depok - Nikmati kelezatan produk lokal</p>
        </div>

        <div class="product-grid" id="productGrid">
            <!-- Produk akan muncul di sini dari localStorage -->
        </div>

        <a href="index.html" class="back-link"><i class="fas fa-arrow-left"></i> Kembali ke Beranda</a>
    </div>

    <script>
        // === AMBIL DATA PRODUK DARI LOCALSTORAGE ===
        function renderProducts() {
            const products = JSON.parse(localStorage.getItem('umkm_products')) || [];
            const grid = document.getElementById('productGrid');

            if (products.length === 0) {
                grid.innerHTML = `
                    <div class="empty-state" style="grid-column: 1 / -1;">
                        <i class="fas fa-utensils"></i>
                        <h3>Belum ada produk</h3>
                        <p>Silakan cek kembali nanti.</p>
                    </div>
                `;
                return;
            }

            // Icon berdasarkan kategori
            const iconMap = {
                'Makanan': '🍛',
                'Minuman': '🥤',
                'Camilan': '🍿',
                'Kue': '🍰',
                'default': '🍽️'
            };

            grid.innerHTML = products.map(product => `
                <div class="product-card">
                    <div class="icon">${iconMap[product.kategori] || iconMap.default}</div>
                    <h3>${product.nama || 'Produk'}</h3>
                    <div class="price">Rp ${(product.harga || 0).toLocaleString('id-ID')}</div>
                    <div class="desc">Kategori: ${product.kategori || '-'} | Stok: ${product.stok || 0}</div>
                    <button class="btn-order" onclick="orderProduct('${product.nama}')">
                        <i class="fas fa-shopping-cart"></i> Pesan
                    </button>
                </div>
            `).join('');
        }

        // === FUNGSI PESAN ===
        function orderProduct(nama) {
            alert('🛒 Anda memesan: ' + nama + '\nSilakan hubungi admin untuk pemesanan.');
        }

        // === RENDER SAAT HALAMAN DIMUAT ===
        renderProducts();

        // === UPDATE OTOMATIS JIKA ADA PERUBAHAN DATA ===
        window.addEventListener('storage', function(e) {
            if (e.key === 'umkm_products') {
                renderProducts();
            }
        });
    </script>
</body>
</html>
