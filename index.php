<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_post['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty(pesan)) {
        $pesan_status = "<div class='alert-success'>Terima kasih
<strong>$nama</strong>, pesan Anda telah berhasil dikirim ke server SMKN
5 Batam!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>CV Maria Imelfin Barjen - SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar"></div>
            <div>
                <h1 style="margin:0;">Maria Imelfin Barjen</h1>
                <p style="margin:5px 0 0 0; color: gray;">seorang siswi jurusan tkj
(Teknik Komputer dan Jaringan) di SMKN 5 Batam</p>
            </div>
            </div>
            <nav>
                <a href="#profil">Home</a>
                <a href="#skills">Skills</a>
                <a href="#kontak">Contact</a>
                <button id="btn-theme" onclick="toggletheme()">Dark
Mode</button>
        </nav>
    </header>

    <div class="main-content">

        <div class="left-column">
            <div class="card" id="profil">
                <h2>PROFIL</h2>
                <h3> BIODATA</h3>
                <p> seorang siswi atau pelajar yang aktif di bidang kejuruan Teknik Komputer
dan jaringan dengan berfokus dalam hal administrasi server dan keamanan jaringan.</p>

                <h3> PENDIDIKAN</h3>
                <ul>
                    <li>TK (TAMAN KANAK-KANAK) (TAHUN 2014-2016)</li>
                    <li>SD (SEKOLAH DASAR) (TAHUN 2016-2022)</li>
                    <li>SMP (SEKOLAH MENENGAH PERTAMA) (TAHUN 2022-2025)</li>
                    <li>SMK (SEKOLAH MENENGAH KEJURUAN) (TAHUN 2025-SAAT INI)</li>

                <h3>PENGALAMAN KERJA</H3>
                <ul>
                    <li>salah satu siswi SMKN 5 Batam yang mampu melakukan instalasi dan konfigurasi jaringan di ruangan LAB TKJ SMKN 5 Batam</li> 
                    <li>belajar bagaimana cara membuat website profil atau cv menggunakan HTML</li>
                    <li>belajar tentang sistem operasi dan perawatan perangkat perangkat komputer</li>
                    <li>belajar meng-crimping kabel utp dan setting router mikrotik</li>
                </ul>
            </div>
        </div>

        <div class="right-column">
            <div class="card" id="skills">
                <h2>NETWORK SKILLS</h2>

                <div class="skill-name">Mikrotik RouterOS</span>
                <div class="progress-bar"><div class="progress-fill"
style="width: 90%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Cisko Networking</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 88%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Linux Server
(Debian/Ubuntu)</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 80%;"></div></div>
                </div>

                <div class="skill-item">
                    <span class="skill-name">Network Security</span>
                    <div class="progress-bar"><div class="progress-fill"
style="width: 72%;"></div></div>
                </div>
            </div>

            <div class="card" id="kontak">
                <h2>FORM KONTAK</h2>

                <?php echo $pesan_status; ?>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method='POST'>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="txt_nama"
placeholder="Masukkan nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="txt_email"
placeholder="Masukkan email..." required>
                    </div> 

                    <div class="form-group">
                        <label for="pesan">pesan:</label>
                        <textarea id="pesan" name="text_pesan" rows="4"
placeholder="tuliskan pesan..." required></textarea>
                    </div>

                    <button type="submit" name="btn_kirim" class="btn-
submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>
