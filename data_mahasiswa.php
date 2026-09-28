<?php

$mahasiswa = [
    "nim" => "4112755201250015",
    "nama" => "Shyam AdjIe",
    "prodi" => "S1 Informatika",
    "gender" => "Laki-laki",
    "alamat" => "Jakarta, Indonesia",
    "umur" => "20 Tahun",
    "email" => "shyam.adjie.fict@krw.horizon.ac.id"
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="layout.css">

</head>

<body>

    <div class="container">

        <aside class="sidebar">

            <div class="logo">
                <div class="logo-icon">M</div>
                <h2>Mahasiswa</h2>
            </div>

            <nav class="navbar">

                <a href="index.html">
                    <span>⌂</span>
                    Beranda
                </a>

                <a href="data_mahasiswa.php" class="active">
                    <span>▣</span>
                    Data Mahasiswa
                </a>

            </nav>

        </aside>


        <main class="main-content">

            <header class="top-header">

                <div>
                    <p class="welcome">
                        Data Personal
                    </p>

                    <h1>
                        Data Mahasiswa
                    </h1>
                </div>

                <div class="status">
                    <span class="status-dot"></span>
                    Aktif
                </div>

            </header>


            <section class="profile-card">

                <div class="profile-photo">

                    <img src="foto.jpg"
                         alt="Foto Mahasiswa">

                </div>

                <div class="profile-info">

                    <span class="profile-label">
                        PROFILE
                    </span>

                    <h2>
                        <?php echo $mahasiswa["nama"]; ?>
                    </h2>

                    <p>
                        <?php echo $mahasiswa["prodi"]; ?>
                    </p>

                </div>

            </section>


            <section class="section">

                <div class="section-title">

                    <span>INFORMATION</span>

                    <h2>
                        Informasi Mahasiswa
                    </h2>

                </div>


                <div class="data-grid">

                    <div class="data-card">

                        <span>NIM</span>

                        <h3>
                            <?php echo $mahasiswa["nim"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Nama</span>

                        <h3>
                            <?php echo $mahasiswa["nama"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Program Studi</span>

                        <h3>
                            <?php echo $mahasiswa["prodi"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Jenis Kelamin</span>

                        <h3>
                            <?php echo $mahasiswa["gender"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Alamat</span>

                        <h3>
                            <?php echo $mahasiswa["alamat"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Umur</span>

                        <h3>
                            <?php echo $mahasiswa["umur"]; ?>
                        </h3>

                    </div>


                    <div class="data-card">

                        <span>Email</span>

                        <h3>
                            <?php echo $mahasiswa["email"]; ?>
                        </h3>

                    </div>

                </div>

            </section>


            <footer>

                <p>
                    © 2026 Student Profile
                </p>

            </footer>

        </main>

    </div>

</body>

</html>