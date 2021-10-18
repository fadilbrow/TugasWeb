<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('42') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('42') ?></p>
        <h2><?php echo ambil_judul('42') ?></h2>
        <?php echo maximum_kata(ambil_isi('42'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('42') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
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
            <?php
            $sql1   = "select * from tutors order by id desc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                </div>
            <?php
            }
            ?>

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
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . partners_foto($r1['id']) ?>" />
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>