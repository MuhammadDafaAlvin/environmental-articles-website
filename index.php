<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UTS Pemrograman Web</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="public/css/dashboard/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="public/img/holding-hand.png" alt="menanam">
                <a href="#">Peduli lingkungan</a>
            </div>
            <div class="nav-right">
                <div id="dark-mode-toggle" class="dark-mode-toggle">
                    <i class="ph ph-sun"></i>
                </div>
                <div id="menu-icon" class="menu-icon">
                    <i class="ph ph-list"></i>
                </div>
            </div>
            <ul id="menu-list" class="hidden">
                <li><a href="#">Beranda</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="#solusi">Solusi</a></li>
                <li><a href="#team">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <p class="hero-header">Special Place for <span class="text-gray">&#8594</span> Special Moments</>
            <p class="paragraf-primary">Alam adalah lukisan terindah yang diciptakan oleh Sang Maha Pencipta. Setiap goresan warna di langit, setiap hembusan angin, adalah adalah bentuk cinta-Nya, seolah mengingatkan kita untuk mencintai dan menjaga keindahan bumi ini &#127795.</p>
            <div class="link">
                <a href="artikel.php" class="artikel">Artikel</a>
                <a href="#team" class="team">Team</a>
            </div>
        </section>
        <section class="image-hero">
            <img src="public/img/Pohon.jpg" alt="pohon">
        </section>
        <article class="manfaat" id="manfaat">
            <div class="header-manfaat">
                <p class="apa-saja">Apa Saja <span class="text-green">Manfaat</span> Menjaga Alam?</p>
                <p class="deskripsi-primary apa-saja">Kamu harus mengenal berbagai manfaat jika kamu menjaga alam &#127795</p>
                <img src="public/img/arrow.png" alt="arrow">
            </div>

            <div class="box-image">
                <div class="box manfaat-1">
                    <figure>
                        <img src="public/img/trash.png" alt="banjir">
                    </figure>
                    <figcaption>
                        <h3>Mengurangi</h3>
                        <p class="deskripsi">Menjaga kebersihan dari sampah dapat mengurangi Risiko Penularan Penyakit</p>
                    </figcaption>
                </div>
                <div class="box manfaat-2">
                    <figure>
                        <img src="public/img/holding-hand.png" alt="banjir">
                    </figure>
                    <figcaption>
                        <h3>Menjaga</h3>
                        <p class="deskripsi">Menjaga keindahan lingkungan membuat hidup aman dan nyaman</p>
                    </figcaption>
                </div>
                <div class="box manfaat-3">
                    <figure>
                        <img src="public/img/recycle-sign.png" alt="banjir">
                    </figure>
                    <figcaption>
                        <h3>Memudahkan</h3>
                        <p class="deskripsi">Dapat memudahkan proses daur ulang sampah</p>
                    </figcaption>
                </div>
                <div class="box manfaat-4">
                    <figure>
                        <img src="public/img/flood.png" alt="banjir">
                    </figure>
                    <figcaption>
                        <h3>Mencegah</h3>
                        <p class="deskripsi">Mampu mencegah terjadinya bencana banjir akibat sampah</p>
                    </figcaption>
                </div>
            </div>
        </article>
        <section class="solusi" id="solusi">
            <p class="penting">*Penting</p>
            <p class="header">Apa Yang Bisa Kita Lakukan?</p>
            <p class="deskripsi">Ada berbagai upaya yang bisa kita lakukan untuk menjaga keindahan alam</p>
            <img src="public/img/Tanya.png" alt="stress" class="stress">
            <div class="box-solusi">
                <div class="kotak menanam">
                    <img src="public/img/holding-hand.png" alt="menanam">
                    <h3>Menanam Pohon</h3>
                    <p>Memiliki manfaat untuk penghijauan dan mencegah terjadinya abrasi</p>
                </div>
                <div class="kotak energi">
                    <img src="public/img/flash.png" alt="energi">
                    <h3>Menghemat Energi</h3>
                    <p>Menghemat penggunaan energi untuk kelangsungan hidup</p>
                </div>
                <div class="kotak perburuan">
                    <img src="public/img/no-weapons.png" alt="perburuan">
                    <h3>Melarang Perburuan Liar</h3>
                    <p>Mencegah punahnya hewan-hewan yang dilindungi untuk lingkungan</p>
                </div>
                <div class="kotak recycle">
                    <img src="public/img/recycle-sign.png" alt="recycle">
                    <h3>Produk Daur Ulang</h3>
                    <p>Bentuk strategi pengelolaan sampah padat dengan cara menggunakan kembali</p>
                </div>
                <div class="kotak sampah">
                    <img src="public/img/trash.png" alt="sampah">
                    <h3>Membuang Sampah di Tempatnya</h3>
                    <p>Mencegah sampah yang tersumbat sehingga mengakibatkan banjir</p>
                </div>
                <div class="kotak penebangan">
                    <img src="public/img/deforestation.png" alt="penebangan">
                    <h3>Mengurangi Penebangan Hutan</h3>
                    <p>Menghindari terjadinya tanah longsor dan menjadi sumber oksigen</p>
                </div>
                <div class="kotak motor">
                    <img src="public/img/transport.png">
                    <h3>Mengurangi Kendaraan Bermotor</h3>
                    <p>Mengurangi polusi udara penyebab dari asap kendaraan bermotor</p>
                </div>
                <div class="kotak kebakaran">
                    <img src="public/img/prohibition.png">
                    <h3>Mengurangi Pembakaran Sembarangan</h3>
                    <p>Asap pembakaran menjadi penyebab udara menjadi kurang sehat</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-header" id="team">
            <p class="kelompok">*kelompok 8</p>
            <h3>Anggota Kelompok</h3>
            <p>Perkenalkan kami kelompok 8 dari kelas 2023C</p>
        </div>
        <div class="box-card">
            <div class="card firzan">
                <img src="public/img/firzan.jpg" alt="firzan" class="firzan">
                <figcaption>
                    <h1>Firzan Zulzabbar</h1>
                    <p>23091397076</p>
                    <p>2023C</p>
                    <p>D4 Manajemen Informatika</p>
                    <a target="_blank" href="https://github.com/FirzanZulzabbar">Github</a>
                </figcaption>
            </div>
            <div class="card eni">
                <img src="public/img/eni.jpg" alt="firzan">
                <figcaption>
                    <h1>Nur Aini</h1>
                    <p>23091397077</p>
                    <p>2023C</p>
                    <p>D4 Manajemen Informatika</p>
                    <a target="_blank" href="https://github.com/Nuraini077">Github</a>
                </figcaption>
            </div>
            <div class="card">
                <img src="public/img/dafa.jpeg" alt="firzan" class="dafa">
                <figcaption>
                    <h1>Dafa Alvin</h1>
                    <p>23091397083</p>
                    <p>2023C</p>
                    <p>D4 Manajemen Informatika</p>
                    <a target="_blank" href="https://github.com/MuhammadDafaAlvin">Github</a>
                </figcaption>
            </div>
        </div>
    </footer>
    <script src="public/js/script.js"></script>
</body>

</html>