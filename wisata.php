<?php
// =====================================================
// Website Informasi Wisata Lokal (Tampilan Modern)
// =====================================================
session_start();

// Data wisata
if (!isset($_SESSION['wisata'])) {
    $_SESSION['wisata'] = [
        [
            "nama" => "Candi Borobudur",
            "lokasi" => "Magelang, Jawa Tengah",
            "deskripsi" => "Candi Buddha terbesar di dunia, warisan budaya UNESCO. Dikelilingi oleh pegunungan dan pemandangan sawah yang indah.",
            "gambar" => "https://upload.wikimedia.org/wikipedia/commons/9/93/Borobudur-Nothwest-view.jpg"
        ],
        [
            "nama" => "Dieng Plateau",
            "lokasi" => "Wonosobo, Jawa Tengah",
            "deskripsi" => "Kawasan dataran tinggi yang terkenal dengan kompleks candi, kawah aktif, dan Danau Telaga Warna. Suhu dingin dan suasana mistis menjadi daya tarik utama.",
            "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/2f/Dieng_Plateau.jpg"
        ],
        [
            "nama" => "Pantai Parangtritis",
            "lokasi" => "Yogyakarta",
            "deskripsi" => "Pantai ikonik Yogyakarta yang terkenal dengan pasir hitam dan legenda Nyi Roro Kidul. Tempat terbaik menikmati sunset dan naik ATV di tepi pantai.",
            "gambar" => "https://upload.wikimedia.org/wikipedia/commons/b/b0/Pantai_Parangtritis.jpg"
        ],
        [
            "nama" => "Gunung Bromo",
            "lokasi" => "Probolinggo, Jawa Timur",
            "deskripsi" => "Gunung berapi aktif yang menjadi ikon wisata Jawa Timur. Pemandangan matahari terbit di Bromo adalah salah satu yang paling indah di Indonesia.",
            "gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/57/Bromo_Sunrise.jpg"
        ]
    ];
}

<body>

<header>
    <h1>🌄 Website Informasi Wisata Lokal</h1>
    <p>Menjelajahi Keindahan Alam dan Budaya Indonesia</p>
</header>

<main>
<?php if ($detail): ?>
    <!-- Halaman Detail -->
    <div class="detail-card">
        <img src="<?= $detail['gambar'] ?>" alt="<?= $detail['nama'] ?>">
        <div class="content">
            <h2><?= $detail['nama'] ?></h2>
            <p><b>📍 Lokasi:</b> <?= $detail['lokasi'] ?></p>
            <p><?= $detail['deskripsi'] ?></p>
            <a href="wisata.php" class="back-btn">⬅ Kembali ke Daftar</a>
        </div>
    </div>

<?php else: ?>
    <!-- Daftar Wisata -->
    <h2>🗺 Daftar Tempat Wisata</h2>
    <div class="grid">
        <?php foreach ($_SESSION['wisata'] as $i => $w): ?>
            <div class="card">
                <img src="<?= $w['gambar'] ?>" alt="<?= $w['nama'] ?>">
                <div class="card-content">
                    <h3><?= $w['nama'] ?></h3>
                    <p><b>📍</b> <?= $w['lokasi'] ?></p>
                    <a href="?id=<?= $i ?>" class="btn">Lihat Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</main>

<footer>
    <p>© 2025 Website Informasi Wisata Lokal | Kelompok Sistem Informasi</p>
</footer>

</body>
</html>
