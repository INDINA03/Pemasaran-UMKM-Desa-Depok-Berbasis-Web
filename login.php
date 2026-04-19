<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UMKM Desa Depok</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            width: 400px;
            max-width: 90%;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            background: linear-gradient(135deg, #2c5f2d 0%, #1a3b1a 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .login-header h1 {
            font-size: 1.8em;
            margin-bottom: 5px;
        }

        .login-header p {
            opacity: 0.9;
            font-size: 0.9em;
        }

        .login-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #2c5f2d;
        }

        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #2c5f2d 0%, #1a3b1a 100%);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }

        .register-link a {
            color: #2c5f2d;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: none;
        }

        .alert-error {
            background: #fee;
            color: #c33;
            border: 1px solid #fcc;
        }

        .alert-success {
            background: #efe;
            color: #3c3;
            border: 1px solid #cfc;
        }

        .show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>🏪 UMKM Desa Depok</h1>
            <p>Kecamatan Kandeman • Kabupaten Batang</p>
        </div>
        <div class="login-body">
            <div id="alert" class="alert"></div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label>📧 Email / Username</label>
                    <input type="text" id="username" placeholder="Masukkan email atau username" required>
                </div>
                <div class="form-group">
                    <label>🔒 Password</label>
                    <input type="password" id="password" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
            
            <div class="register-link">
                <p>Belum punya akun? <a href="register.html">Daftar Sekarang</a></p>
                <p style="margin-top: 10px; font-size: 12px; color: #999;">
                    Khusus Admin Desa & Pelaku UMKM Depok
                </p>
            </div>
        </div>
    </div>

    <script>
        // Data user (sementara, nanti bisa diganti dengan database)
        const users = JSON.parse(localStorage.getItem('users')) || [
            {
                id: 1,
                name: "Admin Desa Depok",
                username: "admin",
                email: "admin@desadepok.id",
                password: "admin123",
                role: "admin",
                umkm_name: null,
                created_at: new Date().toISOString()
            }
        ];

        // Simpan ke localStorage jika belum ada
        if (!localStorage.getItem('users')) {
            localStorage.setItem('users', JSON.stringify(users));
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const alertDiv = document.getElementById('alert');
            
            // Ambil data user dari localStorage
            const usersData = JSON.parse(localStorage.getItem('users'));
            
            // Cari user berdasarkan username atau email
            const user = usersData.find(u => 
                (u.username === username || u.email === username) && u.password === password
            );
            
            if (user) {
                // Simpan session login
                const session = {
                    userId: user.id,
                    name: user.name,
                    username: user.username,
                    email: user.email,
                    role: user.role,
                    umkm_name: user.umkm_name,
                    loginTime: new Date().toISOString()
                };
                localStorage.setItem('currentUser', JSON.stringify(session));
                
                // Tampilkan pesan sukses
                alertDiv.className = "alert alert-success show";
                alertDiv.innerHTML = "✅ Login berhasil! Mengalihkan...";
                
                // Redirect ke dashboard
                setTimeout(() => {
                    window.location.href = "dashboard.html";
                }, 1500);
            } else {
                // Tampilkan pesan error
                alertDiv.className = "alert alert-error show";
                alertDiv.innerHTML = "❌ Username/email atau password salah!";
                
                // Clear input password
                document.getElementById('password').value = '';
            }
        });
    </script>
</body>
</html>