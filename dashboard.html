<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UMKM Desa Depok</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #2c5f2d 0%, #1a3b1a 100%);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .navbar h2 {
            font-size: 1.3em;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info span {
            background: rgba(255,255,255,0.2);
            padding: 8px 15px;
            border-radius: 20px;
        }

        .btn-logout {
            background: #ff4757;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-logout:hover {
            background: #ff6b81;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Welcome Card */
        .welcome-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .welcome-card h1 {
            color: #2c5f2d;
            margin-bottom: 10px;
        }

        .role-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85em;
            margin-top: 10px;
        }

        .role-admin {
            background: #ff9800;
            color: white;
        }

        .role-umkm {
            background: #2196f3;
            color: white;
        }

        .role-user {
            background: #9e9e9e;
            color: white;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .stat-card .number {
            font-size: 2.5em;
            font-weight: bold;
            color: #2c5f2d;
        }

        .stat-card .label {
            color: #666;
            margin-top: 10px;
        }

        /* Menu Grid */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .menu-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: #333;
            display: block;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .menu-card .icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .menu-card h3 {
            margin-bottom: 10px;
        }

        .menu-card p {
            color: #666;
            font-size: 0.9em;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>🏪 Sistem Informasi UMKM Desa Depok</h2>
        <div class="user-info">
            <span id="userName"></span>
            <span id="userRole"></span>
            <button class="btn-logout" onclick="logout()">Logout</button>
        </div>
    </div>

    <div class="container">
        <div class="welcome-card">
            <h1 id="welcomeMessage"></h1>
            <p>Selamat datang di Sistem Informasi Pemasaran UMKM Desa Depok, Kecamatan Kandeman, Kabupaten Batang.</p>
            <span id="roleBadge" class="role-badge"></span>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="number" id="totalProducts">0</div>
                <div class="label">Total Produk UMKM</div>
            </div>
            <div class="stat-card">
                <div class="number" id="totalUMKM">0</div>
                <div class="label">Total Pelaku UMKM</div>
            </div>
            <div class="stat-card">
                <div class="number" id="totalCategories">0</div>
                <div class="label">Kategori Produk</div>
            </div>
        </div>

        <div class="menu-grid" id="menuGrid">
            <!-- Menu akan ditampilkan berdasarkan role -->
        </div>
    </div>

    <script>
        // Cek session login
        const currentUser = JSON.parse(localStorage.getItem('currentUser'));
        
        if (!currentUser) {
            window.location.href = "login.html";
        }
        
        // Data produk (sementara)
        const products = JSON.parse(localStorage.getItem('products')) || [
            { id: 1, name: "Keripik Tempe", umkm: "Bu Siti", category: "Makanan", price: 15000 },
            { id: 2, name: "Batik Tulis", umkm: "Rumah Batik", category: "Fashion", price: 250000 }
        ];
        
        const umkmList = JSON.parse(localStorage.getItem('users')) || [];
        const categories = ['Makanan', 'Fashion', 'Kerajinan', 'Pertanian', 'Perikanan'];
        
        // Tampilkan informasi user
        document.getElementById('userName').innerHTML = `👤 ${currentUser.name}`;
        document.getElementById('userRole').innerHTML = currentUser.role === 'admin' ? '👑 Admin Desa' : (currentUser.umkm_name ? `🏪 ${currentUser.umkm_name}` : '👤 User');
        document.getElementById('welcomeMessage').innerHTML = `Halo, ${currentUser.name}! 👋`;
        
        const roleBadge = document.getElementById('roleBadge');
        if (currentUser.role === 'admin') {
            roleBadge.innerHTML = '👑 Administrator Desa Depok';
            roleBadge.className = 'role-badge role-admin';
        } else if (currentUser.umkm_name) {
            roleBadge.innerHTML = `🏪 Pelaku UMKM - ${currentUser.umkm_name}`;
            roleBadge.className = 'role-badge role-umkm';
        } else {
            roleBadge.innerHTML = '👤 Warga Desa Depok';
            roleBadge.className = 'role-badge role-user';
        }
        
        // Update statistik
        document.getElementById('totalProducts').innerHTML = products.length;
        document.getElementById('totalUMKM').innerHTML = umkmList.filter(u => u.umkm_name).length;
        document.getElementById('totalCategories').innerHTML = categories.length;
        
        // Menu berdasarkan role
        const menuGrid = document.getElementById('menuGrid');
        
        if (currentUser.role === 'admin') {
            menuGrid.innerHTML = `
                <a href="#" class="menu-card" onclick="alert('Fitur manajemen produk akan segera hadir')">
                    <div class="icon">📦</div>
                    <h3>Kelola Produk</h3>
                    <p>Tambah, edit, hapus produk UMKM</p>
                </a>
                <a href="#" class="menu-card" onclick="alert('Fitur manajemen UMKM akan segera hadir')">
                    <div class="icon">🏪</div>
                    <h3>Kelola UMKM</h3>
                    <p>Verifikasi dan kelola pelaku UMKM</p>
                </a>
                <a href="#" class="menu-card" onclick="alert('Fitur laporan akan segera hadir')">
                    <div class="icon">📊</div>
                    <h3>Laporan</h3>
                    <p>Lihat statistik dan laporan</p>
                </a>
                <a href="index.html" class="menu-card">
                    <div class="icon">🏠</div>
                    <h3>Lihat Website</h3>
                    <p>Kembali ke halaman utama</p>
                </a>
            `;
        } else if (currentUser.umkm_name) {
            menuGrid.innerHTML = `
                <a href="#" class="menu-card" onclick="alert('Fitur kelola produk akan segera hadir')">
                    <div class="icon">📦</div>
                    <h3>Produk Saya</h3>
                    <p>Kelola produk UMKM Anda</p>
                </a>
                <a href="#" class="menu-card" onclick="alert('Fitur profil akan segera hadir')">
                    <div class="icon">⚙️</div>
                    <h3>Pengaturan</h3>
                    <p>Edit profil UMKM</p>
                </a>
                <a href="index.html" class="menu-card">
                    <div class="icon">🏠</div>
                    <h3>Lihat Website</h3>
                    <p>Kembali ke halaman utama</p>
                </a>
            `;
        } else {
            menuGrid.innerHTML = `
                <a href="#" class="menu-card" onclick="alert('Fitur daftar UMKM akan segera hadir')">
                    <div class="icon">🏪</div>
                    <h3>Daftar UMKM</h3>
                    <p>Lihat semua UMKM Desa Depok</p>
                </a>
                <a href="#" class="menu-card" onclick="alert('Fitur produk akan segera hadir')">
                    <div class="icon">📦</div>
                    <h3>Produk Unggulan</h3>
                    <p>Lihat produk UMKM terbaik</p>
                </a>
                <a href="index.html" class="menu-card">
                    <div class="icon">🏠</div>
                    <h3>Lihat Website</h3>
                    <p>Kembali ke halaman utama</p>
                </a>
            `;
        }
        
        // Fungsi logout
        function logout() {
            localStorage.removeItem('currentUser');
            window.location.href = "login.html";
        }
    </script>
</body>
</html>