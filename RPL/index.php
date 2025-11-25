<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelolaan Data Sekolah</title>

</head>
<body>
    <!-- Halaman Login -->
    <div id="login-page" class="page active">
        <div class="login-container">
            <h2 class="login-title">Login Admin</h2>
            <form id="login-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
            </form>
        </div>
    </div>

    <!-- Halaman Dashboard (setelah login) -->
    <div id="dashboard-page" class="page">
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <h1>Sistem Pengelolaan Data Sekolah</h1>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="#" class="nav-link active" data-page="dashboard-page">Dashboard</a></li>
                        <li><a href="#" class="nav-link" data-page="data-siswa-page">Data Siswa</a></li>
                        <li><a href="#" class="nav-link" data-page="laporan-page">Laporan</a></li>
                        <li><a href="#" class="nav-link" data-page="admin-page">Admin</a></li>
                        <li><a href="#" id="logout-btn">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Dashboard</h2>
                </div>
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-label">Total Siswa</div>
                        <div class="stat-value" id="total-siswa">0</div>
                        <div class="stat-desc">Jumlah siswa terdaftar</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-label">Siswa Laki-laki</div>
                        <div class="stat-value" id="siswa-laki">0</div>
                        <div class="stat-desc">Jumlah siswa laki-laki</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-label">Siswa Perempuan</div>
                        <div class="stat-value" id="siswa-perempuan">0</div>
                        <div class="stat-desc">Jumlah siswa perempuan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-label">Kelas Terbanyak</div>
                        <div class="stat-value" id="kelas-terbanyak">-</div>
                        <div class="stat-desc">Kelas dengan siswa terbanyak</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Halaman Data Siswa -->
    <div id="data-siswa-page" class="page">
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <h1>Sistem Pengelolaan Data Sekolah</h1>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="#" class="nav-link" data-page="dashboard-page">Dashboard</a></li>
                        <li><a href="#" class="nav-link active" data-page="data-siswa-page">Data Siswa</a></li>
                        <li><a href="#" class="nav-link" data-page="laporan-page">Laporan</a></li>
                        <li><a href="#" class="nav-link" data-page="admin-page">Admin</a></li>
                        <li><a href="#" id="logout-btn">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Siswa</h2>
                    <button class="btn btn-primary" id="tambah-siswa-btn">Tambah Data Siswa</button>
                </div>
                
                <div class="search-box">
                    <input type="text" id="search-input" placeholder="Cari berdasarkan NIS atau nama...">
                    <button class="btn btn-primary" id="search-btn">Cari</button>
                </div>
                
                <table id="siswa-table">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="siswa-table-body">
                        <!-- Data siswa akan dimasukkan di sini melalui JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Halaman Laporan -->
    <div id="laporan-page" class="page">
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <h1>Sistem Pengelolaan Data Sekolah</h1>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="#" class="nav-link" data-page="dashboard-page">Dashboard</a></li>
                        <li><a href="#" class="nav-link" data-page="data-siswa-page">Data Siswa</a></li>
                        <li><a href="#" class="nav-link active" data-page="laporan-page">Laporan</a></li>
                        <li><a href="#" class="nav-link" data-page="admin-page">Admin</a></li>
                        <li><a href="#" id="logout-btn">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Laporan Data Siswa</h2>
                    <button class="btn btn-primary" id="cetak-laporan-btn">Cetak Laporan PDF</button>
                </div>
                
                <div id="laporan-content">
                    <!-- Konten laporan akan dimasukkan di sini melalui JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <!-- Halaman Admin -->
    <div id="admin-page" class="page">
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <h1>Sistem Pengelolaan Data Sekolah</h1>
                    </div>
                    <ul class="nav-menu">
                        <li><a href="#" class="nav-link" data-page="dashboard-page">Dashboard</a></li>
                        <li><a href="#" class="nav-link" data-page="data-siswa-page">Data Siswa</a></li>
                        <li><a href="#" class="nav-link" data-page="laporan-page">Laporan</a></li>
                        <li><a href="#" class="nav-link active" data-page="admin-page">Admin</a></li>
                        <li><a href="#" id="logout-btn">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Profil Admin</h2>
                </div>
                
                <form id="admin-form">
                    <div class="form-group">
                        <label for="admin-nama">Nama</label>
                        <input type="text" id="admin-nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="admin-username">Username</label>
                        <input type="text" id="admin-username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="admin-password">Password Baru (kosongkan jika tidak ingin mengubah)</label>
                        <input type="password" id="admin-password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="admin-password-confirm">Konfirmasi Password Baru</label>
                        <input type="password" id="admin-password-confirm" name="password_confirm">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit Siswa -->
    <div id="siswa-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="siswa-modal-title">Tambah Data Siswa</h3>
                <button class="close-btn" id="close-siswa-modal">&times;</button>
            </div>
            <form id="siswa-form">
                <input type="hidden" id="siswa-nis-old" name="nis_old">
                <div class="form-group">
                    <label for="siswa-nis">NIS</label>
                    <input type="text" id="siswa-nis" name="nis" required>
                </div>
                <div class="form-group">
                    <label for="siswa-nama">Nama</label>
                    <input type="text" id="siswa-nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="siswa-kelas">Kelas</label>
                    <select id="siswa-kelas" name="kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="10A">10A</option>
                        <option value="10B">10B</option>
                        <option value="10C">10C</option>
                        <option value="11A">11A</option>
                        <option value="11B">11B</option>
                        <option value="11C">11C</option>
                        <option value="12A">12A</option>
                        <option value="12B">12B</option>
                        <option value="12C">12C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="siswa-alamat">Alamat</label>
                    <textarea id="siswa-alamat" name="alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                        <input type="radio" id="siswa-laki" name="jenis_kelamin" value="L" required>
                        <label for="siswa-laki" style="display: inline; margin-right: 15px;">Laki-laki</label>
                        <input type="radio" id="siswa-perempuan" name="jenis_kelamin" value="P">
                        <label for="siswa-perempuan" style="display: inline;">Perempuan</label>
                    </div>
                </div>
                <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
                    <button type="button" class="btn" id="cancel-siswa-btn">Batal</button>
                    <button type="submit" class="btn btn-primary" id="save-siswa-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div id="delete-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Hapus</h3>
                <button class="close-btn" id="close-delete-modal">&times;</button>
            </div>
            <p>Apakah Anda yakin ingin menghapus data siswa ini?</p>
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
                <button type="button" class="btn" id="cancel-delete-btn">Batal</button>
                <button type="button" class="btn btn-danger" id="confirm-delete-btn">Hapus</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Laboratorium Teknik Informatika - Universitas Gunadarma</p>
    </div>

    <script>
        // Data dummy untuk simulasi
        let siswaData = JSON.parse(localStorage.getItem('siswaData')) || [
            { nis: '2023001', nama: 'Ahmad Rizki', kelas: '10A', alamat: 'Jl. Merdeka No. 10', jenis_kelamin: 'L' },
            { nis: '2023002', nama: 'Sari Indah', kelas: '10A', alamat: 'Jl. Pahlawan No. 5', jenis_kelamin: 'P' },
            { nis: '2023003', nama: 'Budi Santoso', kelas: '10B', alamat: 'Jl. Sudirman No. 15', jenis_kelamin: 'L' },
            { nis: '2023004', nama: 'Dewi Lestari', kelas: '11A', alamat: 'Jl. Diponegoro No. 20', jenis_kelamin: 'P' },
            { nis: '2023005', nama: 'Fajar Nugroho', kelas: '12C', alamat: 'Jl. Gatot Subroto No. 8', jenis_kelamin: 'L' }
        ];

        let adminData = JSON.parse(localStorage.getItem('adminData')) || {
            nama: 'Administrator',
            username: 'admin',
            password: 'admin123'
        };

        // Elemen DOM
        const loginPage = document.getElementById('login-page');
        const dashboardPage = document.getElementById('dashboard-page');
        const dataSiswaPage = document.getElementById('data-siswa-page');
        const laporanPage = document.getElementById('laporan-page');
        const adminPage = document.getElementById('admin-page');
        
        const loginForm = document.getElementById('login-form');
        const navLinks = document.querySelectorAll('.nav-link');
        const logoutBtns = document.querySelectorAll('#logout-btn');
        
        const siswaTableBody = document.getElementById('siswa-table-body');
        const tambahSiswaBtn = document.getElementById('tambah-siswa-btn');
        const searchInput = document.getElementById('search-input');
        const searchBtn = document.getElementById('search-btn');
        
        const siswaModal = document.getElementById('siswa-modal');
        const siswaForm = document.getElementById('siswa-form');
        const closeSiswaModal = document.getElementById('close-siswa-modal');
        const cancelSiswaBtn = document.getElementById('cancel-siswa-btn');
        
        const deleteModal = document.getElementById('delete-modal');
        const closeDeleteModal = document.getElementById('close-delete-modal');
        const cancelDeleteBtn = document.getElementById('cancel-delete-btn');
        const confirmDeleteBtn = document.getElementById('confirm-delete-btn');
        
        const cetakLaporanBtn = document.getElementById('cetak-laporan-btn');
        const laporanContent = document.getElementById('laporan-content');
        
        const adminForm = document.getElementById('admin-form');
        
        // Variabel untuk state aplikasi
        let siswaToDelete = null;
        let isEditing = false;

        // Fungsi untuk menyimpan data ke localStorage
        function saveData() {
            localStorage.setItem('siswaData', JSON.stringify(siswaData));
            localStorage.setItem('adminData', JSON.stringify(adminData));
        }

        // Fungsi untuk navigasi halaman
        function showPage(pageId) {
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            document.getElementById(pageId).classList.add('active');
            
            // Update menu aktif
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`[data-page="${pageId}"]`).classList.add('active');
            
            // Refresh data jika diperlukan
            if (pageId === 'dashboard-page') {
                updateDashboard();
            } else if (pageId === 'data-siswa-page') {
                renderSiswaTable();
            } else if (pageId === 'laporan-page') {
                renderLaporan();
            } else if (pageId === 'admin-page') {
                loadAdminData();
            }
        }

        // Fungsi untuk update dashboard
        function updateDashboard() {
            const totalSiswa = siswaData.length;
            const siswaLaki = siswaData.filter(s => s.jenis_kelamin === 'L').length;
            const siswaPerempuan = siswaData.filter(s => s.jenis_kelamin === 'P').length;
            
            // Hitung kelas dengan siswa terbanyak
            const kelasCount = {};
            siswaData.forEach(siswa => {
                kelasCount[siswa.kelas] = (kelasCount[siswa.kelas] || 0) + 1;
            });
            
            let kelasTerbanyak = '-';
            let maxCount = 0;
            for (const kelas in kelasCount) {
                if (kelasCount[kelas] > maxCount) {
                    maxCount = kelasCount[kelas];
                    kelasTerbanyak = kelas;
                }
            }
            
            document.getElementById('total-siswa').textContent = totalSiswa;
            document.getElementById('siswa-laki').textContent = siswaLaki;
            document.getElementById('siswa-perempuan').textContent = siswaPerempuan;
            document.getElementById('kelas-terbanyak').textContent = kelasTerbanyak;
        }

        // Fungsi untuk render tabel siswa
        function renderSiswaTable(filteredData = null) {
            const dataToRender = filteredData || siswaData;
            siswaTableBody.innerHTML = '';
            
            if (dataToRender.length === 0) {
                siswaTableBody.innerHTML = '<tr><td colspan="6" style="text-align: center;">Tidak ada data siswa</td></tr>';
                return;
            }
            
            dataToRender.forEach(siswa => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${siswa.nis}</td>
                    <td>${siswa.nama}</td>
                    <td>${siswa.kelas}</td>
                    <td>${siswa.alamat}</td>
                    <td>${siswa.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}</td>
                    <td class="action-buttons">
                        <button class="btn btn-warning edit-btn" data-nis="${siswa.nis}">Edit</button>
                        <button class="btn btn-danger delete-btn" data-nis="${siswa.nis}">Hapus</button>
                    </td>
                `;
                siswaTableBody.appendChild(row);
            });
            
            // Tambahkan event listener untuk tombol edit dan hapus
            document.querySelectorAll('.edit-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const nis = this.getAttribute('data-nis');
                    editSiswa(nis);
                });
            });
            
            document.querySelectorAll('.delete-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const nis = this.getAttribute('data-nis');
                    confirmDeleteSiswa(nis);
                });
            });
        }

        // Fungsi untuk menambah siswa
        function tambahSiswa() {
            isEditing = false;
            document.getElementById('siswa-modal-title').textContent = 'Tambah Data Siswa';
            siswaForm.reset();
            siswaModal.classList.add('active');
        }

        // Fungsi untuk mengedit siswa
        function editSiswa(nis) {
            isEditing = true;
            document.getElementById('siswa-modal-title').textContent = 'Edit Data Siswa';
            
            const siswa = siswaData.find(s => s.nis === nis);
            if (siswa) {
                document.getElementById('siswa-nis-old').value = siswa.nis;
                document.getElementById('siswa-nis').value = siswa.nis;
                document.getElementById('siswa-nama').value = siswa.nama;
                document.getElementById('siswa-kelas').value = siswa.kelas;
                document.getElementById('siswa-alamat').value = siswa.alamat;
                
                if (siswa.jenis_kelamin === 'L') {
                    document.getElementById('siswa-laki').checked = true;
                } else {
                    document.getElementById('siswa-perempuan').checked = true;
                }
                
                siswaModal.classList.add('active');
            }
        }

        // Fungsi untuk konfirmasi hapus siswa
        function confirmDeleteSiswa(nis) {
            siswaToDelete = nis;
            deleteModal.classList.add('active');
        }

        // Fungsi untuk menghapus siswa
        function deleteSiswa() {
            if (siswaToDelete) {
                siswaData = siswaData.filter(s => s.nis !== siswaToDelete);
                saveData();
                renderSiswaTable();
                updateDashboard();
                deleteModal.classList.remove('active');
                siswaToDelete = null;
            }
        }

        // Fungsi untuk mencari siswa
        function searchSiswa() {
            const keyword = searchInput.value.toLowerCase();
            if (!keyword) {
                renderSiswaTable();
                return;
            }
            
            const filteredData = siswaData.filter(siswa => 
                siswa.nis.toLowerCase().includes(keyword) || 
                siswa.nama.toLowerCase().includes(keyword)
            );
            
            renderSiswaTable(filteredData);
        }

        // Fungsi untuk render laporan
        function renderLaporan() {
            laporanContent.innerHTML = '';
            
            if (siswaData.length === 0) {
                laporanContent.innerHTML = '<p>Tidak ada data siswa untuk ditampilkan.</p>';
                return;
            }
            
            const table = document.createElement('table');
            table.innerHTML = `
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    ${siswaData.map((siswa, index) => `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${siswa.nis}</td>
                            <td>${siswa.nama}</td>
                            <td>${siswa.kelas}</td>
                            <td>${siswa.alamat}</td>
                            <td>${siswa.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}</td>
                        </tr>
                    `).join('')}
                </tbody>
            `;
            
            laporanContent.appendChild(table);
        }

        // Fungsi untuk cetak laporan (simulasi)
        function cetakLaporan() {
            alert('Fitur cetak laporan PDF akan membuka jendela baru dengan laporan yang dapat dicetak. Dalam implementasi nyata, ini akan menghasilkan file PDF.');
            // Simulasi cetak
            window.print();
        }

        // Fungsi untuk memuat data admin
        function loadAdminData() {
            document.getElementById('admin-nama').value = adminData.nama;
            document.getElementById('admin-username').value = adminData.username;
        }

        // Event Listeners
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if (username === adminData.username && password === adminData.password) {
                loginPage.classList.remove('active');
                dashboardPage.classList.add('active');
                updateDashboard();
            } else {
                alert('Username atau password salah!');
            }
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const pageId = this.getAttribute('data-page');
                showPage(pageId);
            });
        });

        logoutBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Apakah Anda yakin ingin logout?')) {
                    dashboardPage.classList.remove('active');
                    dataSiswaPage.classList.remove('active');
                    laporanPage.classList.remove('active');
                    adminPage.classList.remove('active');
                    loginPage.classList.add('active');
                    loginForm.reset();
                }
            });
        });

        tambahSiswaBtn.addEventListener('click', tambahSiswa);

        siswaForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nisOld = document.getElementById('siswa-nis-old').value;
            const nis = document.getElementById('siswa-nis').value;
            const nama = document.getElementById('siswa-nama').value;
            const kelas = document.getElementById('siswa-kelas').value;
            const alamat = document.getElementById('siswa-alamat').value;
            const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;
            
            if (isEditing) {
                // Edit siswa
                const index = siswaData.findIndex(s => s.nis === nisOld);
                if (index !== -1) {
                    // Jika NIS diubah, pastikan tidak duplikat
                    if (nisOld !== nis && siswaData.some(s => s.nis === nis)) {
                        alert('NIS sudah digunakan oleh siswa lain!');
                        return;
                    }
                    
                    siswaData[index] = { nis, nama, kelas, alamat, jenis_kelamin: jenisKelamin };
                }
            } else {
                // Tambah siswa baru
                if (siswaData.some(s => s.nis === nis)) {
                    alert('NIS sudah digunakan!');
                    return;
                }
                
                siswaData.push({ nis, nama, kelas, alamat, jenis_kelamin: jenisKelamin });
            }
            
            saveData();
            renderSiswaTable();
            updateDashboard();
            siswaModal.classList.remove('active');
        });

        closeSiswaModal.addEventListener('click', function() {
            siswaModal.classList.remove('active');
        });

        cancelSiswaBtn.addEventListener('click', function() {
            siswaModal.classList.remove('active');
        });

        closeDeleteModal.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            siswaToDelete = null;
        });

        cancelDeleteBtn.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            siswaToDelete = null;
        });

        confirmDeleteBtn.addEventListener('click', deleteSiswa);

        searchBtn.addEventListener('click', searchSiswa);

        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                searchSiswa();
            }
        });

        cetakLaporanBtn.addEventListener('click', cetakLaporan);

        adminForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nama = document.getElementById('admin-nama').value;
            const username = document.getElementById('admin-username').value;
            const password = document.getElementById('admin-password').value;
            const passwordConfirm = document.getElementById('admin-password-confirm').value;
            
            if (password && password !== passwordConfirm) {
                alert('Konfirmasi password tidak sesuai!');
                return;
            }
            
            adminData.nama = nama;
            adminData.username = username;
            if (password) {
                adminData.password = password;
            }
            
            saveData();
            alert('Profil admin berhasil diperbarui!');
        });

        // Inisialisasi
        renderSiswaTable();
        updateDashboard();
        renderLaporan();
    </script>
</body>
</html>

    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --success: #27ae60;
            --danger: #e74c3c;
            --warning: #f39c12;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: var(--primary);
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo h1 {
            font-size: 1.5rem;
            margin-left: 10px;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 20px;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .nav-menu a:hover {
            background-color: rgba(255,255,255,0.1);
        }
        
        .nav-menu a.active {
            background-color: var(--secondary);
        }
        
        .page {
            display: none;
            padding: 20px 0;
        }
        
        .page.active {
            display: block;
        }
        
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .card-title {
            font-size: 1.3rem;
            color: var(--primary);
        }
        
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--secondary);
            color: white;
        }
        
        .btn-success {
            background-color: var(--success);
            color: white;
        }
        
        .btn-danger {
            background-color: var(--danger);
            color: white;
        }
        
        .btn-warning {
            background-color: var(--warning);
            color: white;
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        table th {
            background-color: var(--light);
            color: var(--dark);
            font-weight: 600;
        }
        
        table tr:hover {
            background-color: rgba(0,0,0,0.02);
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--secondary);
        }
        
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .login-title {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary);
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary);
            margin: 10px 0;
        }
        
        .stat-label {
            color: var(--dark);
            font-weight: 500;
        }
        
        .search-box {
            display: flex;
            margin-bottom: 20px;
        }
        
        .search-box input {
            flex: 1;
            margin-right: 10px;
        }
        
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        
        .action-buttons button {
            padding: 5px 10px;
            font-size: 0.8rem;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-content {
            background-color: white;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .modal-title {
            font-size: 1.3rem;
            color: var(--primary);
        }
        
        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #777;
            border-top: 1px solid #eee;
        }
    </style>