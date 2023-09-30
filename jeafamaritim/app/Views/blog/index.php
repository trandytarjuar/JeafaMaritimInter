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
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <h1><span>JEAFA</span>Maritim </h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li >
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">About</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Services</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Team</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Portfolio</a>
                                    </li>
                                    <li class="active">
                                        <a class="page-scroll" href="<?= base_url('blog') ?>">Blog</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Contact</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('job') ?>">Job</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Bottom Header -->
    <div class="header-blog page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">My Blog</h1>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">

                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-12 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php foreach ($blog as $row) : ?>
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <img src="<?= getenv('urlImage') . '/blog/' . $row->image ?> " alt="">
                                    </div>
                                    <div class="blog-meta">

                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($row->created_date)); ?>
                                        </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="#"><?= $row->judul ?></a>
                                        </h4>
                                        <p id="p_news">
                                            <?= $row->deskripsi ?>
                                        </p>
                                    </div>
                                    <span>
                                        <!-- <a  class="ready-btn" data-expanded="false"  onclick="readmore()">Read more</a> -->
                                        <a class="ready-btn" data-toggle="modal" data-target="#myModal<?= $row->id ?>">Read more</a>
                                    </span>
                                </div>
                                <div class="modal fade" id="myModal<?= $row->id ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $row->judul ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <center>
                                                    <div class="single-blog-img">

                                                        <img src="<?= getenv('urlImage') . '/blog/' . $row->image ?> " alt="">
                                                    </div>
                                                    <?= $row->deskripsi ?>
                                                </center>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- End single blog -->


                        <!-- End single blog -->

                        <!-- Start single blog -->

                        <!-- End single blog -->
                        <?php
                        // Define the number of blog posts per page and get the total number of blog posts
                        $postsPerPage = 5; // Change this to the desired number of posts per page
                        $totalPosts = count($blog); // Assuming $blog is your array of blog posts

                        // Get the current page number from the URL, default to page 1
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;

                        // Calculate the offset to retrieve the correct posts for the current page
                        $offset = ($page - 1) * $postsPerPage;

                        // Slice the $blog array to get the posts for the current page
                        $postsForPage = array_slice($blog, $offset, $postsPerPage);

                        // Loop through the posts for the current page
                        foreach ($postsForPage as $row) {
                            // Display your blog post here
                        }
                        ?>

                        <!-- Display Pagination Links -->
                        <div class="blog-pagination">
                            <ul class="pagination">
                                <?php
                                // Calculate the total number of pages
                                $totalPages = ceil($totalPosts / $postsPerPage);

                                // Generate Previous Page link
                                if ($page > 1) {
                                    echo '<li><a href="?page=' . ($page - 1) . '">&lt;</a></li>';
                                }

                                // Generate page links
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    if ($i == $page) {
                                        echo '<li class="active"><a href="?page=' . $i . '">' . $i . '</a></li>';
                                    } else {
                                        echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Generate Next Page link
                                if ($page < $totalPages) {
                                    echo '<li><a href="?page=' . ($page + 1) . '">&gt;</a></li>';
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <div class="clearfix"></div>

    <!-- Start Footer bottom Area -->
    <?= view('layouts/footer') ?>
    <?= view('layouts/script') ?>
    <?= view('layouts/jquery') ?>
</body>

</html>