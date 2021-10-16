<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('40') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('40') ?></p>
        <h2><?php echo ambil_judul('40') ?></h2>
        <?php echo maximum_kata(ambil_isi('40'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('40') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('39') ?></p>
        <h2><?php echo ambil_judul('39') ?></h2>
        <?php echo maximum_kata(ambil_isi('39'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('39') ?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
    </div>
    <img src="<?php echo ambil_gambar('39') ?>" />
</section>

<!-- untuk myteam -->
<section id="myteam">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">My Team</p>
            <h2>Profile Team</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
        </div>

        <div class="tutor-list">
            <div class="kartu-tutor">
                <img src="img/fadil.jfif" />
                <a href="https://www.instagram.com/fadil013/">
                    <p>Fadilah N.H</p>
                </a>
            </div>
            <div class="kartu-tutor">
                <img src="img/farhan.jpeg" />
                <a href="https://www.instagram.com/hansetyaaa/">
                    <p>M. Farhan S.W
                    </p>
                </a>
            </div>
            <div class="kartu-tutor">
                <img src="img/andika.jpg" />
                <a href="https://www.instagram.com/dikaalsab/">
                    <p>M.Andika A</p>
                </a>
            </div>
            <div class="kartu-tutor">
                <img src="img/pp.jfif" />
                <a href="">
                    <p>Hana Tri A</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partners</p>
            <h2>Partners</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
        </div>

        <div class="partner-list">
            <div class="kartu-partner">
                <img src="https://tse2.mm.bing.net/th?id=OIP.KEVdrsX3sLhAbIsy7zQs4QHaHa&pid=Api&P=0&w=300&h=300" />
            </div>
            <div class="kartu-partner">
                <img src="https://tse2.mm.bing.net/th?id=OIP.55DCXbXlKDgEBoZhKxpzLAHaHa&pid=Api&P=0&w=300&h=300" />
            </div>
            <div class="kartu-partner">
                <img src="https://tse4.mm.bing.net/th?id=OIP.mjoG94zAqNefzlni3m2hRgHaHa&pid=Api&P=0&w=300&h=300" />
            </div>
            <div class="kartu-partner">
                <img src="https://tse3.mm.bing.net/th?id=OIP.t3BwUKghRPIH5bopyWLd9wHaHa&pid=Api&P=0&w=300&h=300" />
            </div>
            <div class="kartu-partner">
                <img src="https://rekreartive.com/wp-content/uploads/2018/11/Logo-Polije-Politeknik-Negeri-Jember-Original-1024x1013.png" />
            </div>
        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>