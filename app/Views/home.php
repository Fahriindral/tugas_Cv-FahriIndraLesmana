<?= $this->extend('template'); ?>
<?= $this->section('bodycontent'); ?>
<div class="content">
    <!-- Header Start -->
    <div class="header" id="header">
        <div class="content-inner">
            <p>I'm</p>
            <h1>Fahri Indra Lesmana</h1>
            <h2></h2>
            <div class="typed-text">Fotografer, Futsal, Basket, Programmer, Videography</div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Large Button Start -->
    <div class="large-btn">
        <div class="content-inner">
            <a class="btn" href="https://www.instagram.com/fahriindral/"><i class="fa fa-envelope"></i>My Instagram</a>
            <a class="btn" href="https://www.blogger.com/profile/17214256907657219128"><i class="fa fa-blog"></i>My Blog</a>
        </div>
    </div>
    <!-- Large Button End -->

    <!-- About Start -->
    <div class="about" id="about">
        <div class="content-inner">
            <div class="content-header">
                <h2>Tentang Saya</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <img src="assets/img/fahri.jpeg" alt="Image">
                </div>
                <div class="col-md-6 col-lg-7">
                    <p>
                        Saya Mahasiswa yang aktif dalam kegiatan Ekstrakulikuler, dalam bermain game saya mahir bermain game Mobile legend hero favorit saya Tigreal dan rolle saya bisa Tank dan juga Hayper di game Mobile legend, saya juga mahir dalam bermain sepak bola.
                    </p>
                    <a class="btn" href="https://www.blogger.com/profile/17214256907657219128">My Blog</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="skills">
                        <div class="skill-name">
                            <p>Design & Editing</p>
                            <p>80%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="skill-name">
                            <p>Programing</p>
                            <p>60%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills">
                        <div class="skill-name">
                            <p>Videography</p>
                            <p>85%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="skill-name">
                            <p>Photography</p>
                            <p>86%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Education Start -->
    <div class="education" id="education">
        <div class="content-inner">
            <div class="content-header">
                <h2>Edukasi</h2>
            </div>
            <div class="row align-items-center">
                <?php foreach ($edu as $row) : ?>
                    <div class="col-md-6">
                        <div class="edu-col">
                            <span><?= $row['edu_in'] ?> <i>to</i> <?= $row['edu_out'] ?></span>
                            <h3><?= $row['edu_name'] ?></h3>
                            <p><?= $row['edu_detail'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Education Start -->

    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="content-inner">
            <div class="content-header">
                <h2>Pengalaman</h2>
            </div>
            <div class="row align-items-center">
                <?php foreach ($exp as $row) : ?>
                    <div class="col-md-6">
                        <div class="exp-col">
                            <span><?= $row['exp_in'] ?> <i>to</i> <?= $row['exp_out'] ?></span>
                            <h3><?= $row['exp_name'] ?></h3>
                            <p><?= $row['exp_detail'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Experience Start -->

    <!-- Service Start -->
    <div class="service" id="service">
        <div class="content-inner">
            <div class="content-header">
                <h2>Pengalaman Organisasi</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-group"></i>
                        <h3>LKS</h3>
                        <p>Panitia Kegiatan Latihan Kepemimpinan Siswa</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-group"></i>
                        <h3>PERS</h3>
                        <p>Anggota Divisi HRD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

    <!-- Contact Start -->
    <div class="contact" id="contact">
        <div class="content-inner">
            <div class="content-header">
                <h2>Kontak</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fa fa-user"></i>Fahri Indra Lesmana</p>
                        <p><i class="fa fa-tag"></i>Fotografer, Futsal, Basket, Programmer, Videography</p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">fahriindra419@gmail.com</a></p>
                        <p><i class="fa fa-phone"></i><a href="tel:+1234567890">+62 812 9869 4341</a></p>
                        <p><i class="fa fa-map-marker"></i>Sindang Palay Kec.Cibeureum Kota Sukabumi</p>
                        <div class="social">
                            <a class="btn" href="https://web.facebook.com/fahri.lesmana.1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="https://api.whatsapp.com/send?phone=6281298694341"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn" href="https://www.instagram.com/fahriindral/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="content-inner">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; Fahri Indra L Production. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <p>Version 1.0</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
</div>
<?= $this->endSection(); ?>