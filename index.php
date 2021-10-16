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

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Tutors</p>
            <h2>Tutors</h2>
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
                <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png" />
            </div>
            <div class="kartu-partner">
                <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg" />
            </div>
            <div class="kartu-partner">
                <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg" />
            </div>
            <div class="kartu-partner">
                <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png" />
            </div>
            <div class="kartu-partner">
                <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg" />
            </div>
        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>