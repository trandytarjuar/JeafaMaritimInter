<!doctype html>
<html lang="en">

<?= view('layouts/header') ?>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <?= view('layouts/navbar') ?>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <?php foreach($home as $row): ?>
                <img src="<?= getenv('urlImage') . '/home/' . $row->banner1 ?>" alt="" title="#slider-direction-1" />
                <img src="<?= getenv('urlImage') . '/home/' . $row->banner2 ?>" alt="" title="#slider-direction-2" />
                <?php endforeach ; ?>
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <?php foreach($home as $row): ?>
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1"><?= $row->title?> </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2"><?=$row->tagline?></h1>
                                </div>
                                <?php endforeach ; ?>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                                <!-- layer 1 -->
                                <?php foreach($home as $row): ?>
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1"><?= $row->title ?> </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2"><?=$row->tagline?></h1>
                                </div>
                                <?php endforeach; ?>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <?php foreach($home as $row): ?>
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1"><?=$row->title?> </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2"><?= $row->tagline?></h1>
                                </div>
                                <?php endforeach;?>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <a href="#">
                                <img src="img/about/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <!-- <a href="#"> -->
                            <h4 class="sec-head">Visi</h4>
                            <!-- </a> -->

                            <ul>
                                <?php foreach ($visi as $row) : ?>
                                    <li>
                                        <i class="fa fa-check"></i> <?= $row->deskripsi ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <!-- <a href="#"> -->
                            <h4 class="sec-head">Misi</h4>
                            <!-- </a> -->
                            <ul>
                                <?php foreach ($visi as $row) : ?>
                                    <li>
                                        <i class="fa fa-check"></i> <?= $row->deskripsi ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <center>
                <div class="col-md-10 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <!-- <a href="#"> -->
                            <h4 class="sec-head">Manfaat Kerja Sama</h4>
                            <!-- </a> -->
                            <ul>
                                <?php foreach ($manfaat as $row) : ?>
                                    <li>
                                        <i class="fa fa-check"></i> <?= $row->deskripsi ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                </center>
                <!-- End col-->
            </div>
        </div>
    </div>
    <!-- End About area -->



    <!-- our-skill-area start -->

    <!-- our-skill-area end -->



    <!-- Start Wellcome Area -->
    <div id="services" class="wellcome-area">
        <div class="well-bg">
            <div class="test-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wellcome-text">
                            <div class="well-text text-center">
                                <h2>Our Services</h2>
                                <div class="services-contents">
                                    <!-- Start Left services -->
                                    <?php foreach ($service as $row) : ?>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="about-move">
                                                <div class="services-details">
                                                    <div class="single-services well-text">

                                                        <h2><?= $row->title ?></h2>
                                                        <p>
                                                            <?= $row->description ?>.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- end about-details -->
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wellcome Area -->

    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($blog as $row) : ?>
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="<?= getenv('urlImage') . '/blog/' . $row->image ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-meta">

                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i><?= date("d-m-Y", strtotime($row->created_date)) ?>
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html"><?= $row->judul ?></a>
                                    </h4>
                                    <p id="p_news">
                                        <?= $row->deskripsi ?>
                                    </p>
                                </div>
                                <span>
                                    <a href="<?= base_url('blog') ?>" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                    <?php endforeach; ?>
                    <!-- End Right Blog-->
                </div>
            </div>
        </div>
    </div>

    <!-- Start team Area -->
   





    <!-- Start Testimonials -->
    <div id="team" class="testimonials-area">
        <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="well-text testimonial-content text-center">
                            <h2>Our special Team</h2>
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <?php foreach ($team as $row) : ?>
                                    <div class="single-testi">
                                        <div class="testi-text">

                                            <div class="single-team-member">

                                                <div class="team-img">
                                                    <img src="<?= getenv('urlImage') . '/team/' . $row->foto ?>" alt="">
                                                </div>
                                                <div class="well-text team-content text-center">
                                                    <h2><?= $row->nama ?></h2>
                                                    <p><?= $row->jabatan ?></p>
                                                    <p><?= $row->pesan ?></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- End single item -->

                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Blog Area -->

    <!-- End Blog -->
    <!-- Start Suscrive Area -->

    <!-- End Suscrive Area -->
    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($contacts as $row) : ?>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Call:<a href="tel:<?= $row->no_telp ?>"><?= $row->no_telp ?></a<br>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Email: <a href="mailto:<?= $row->email ?>"><?= $row->email ?></a><br>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Location:<?= $row->alamat ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">

                    <!-- Start Google Map -->
                    <div class="col-lg-12">
                        <!-- Start Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=<?= $row->gmaps ?>" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->

                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer bottom Area -->
  <?= view('layouts/footer')?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <?= view('layouts/script') ?>
</body>

</html>