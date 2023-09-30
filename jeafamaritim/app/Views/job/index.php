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
                                    <li>
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
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('blog') ?>">Blog</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="<?= base_url('/') ?>">Contact</a>
                                    </li>
                                    <li class="active">
                                        <a class="page-scroll" href="<?= base_url('/job') ?>">Job</a>
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
    <div class="header-job page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">Job Portal</h1>
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
                            <?php foreach ($job as $row) : ?>
                                <div class="single-blog">
                                    <?php if ($row->gaji !== null && $row->gaji !== "") : ?>
                                        <div class="single-blog-img">
                                            <h1><?= $row->title ?></h1>
                                            <span class="date-type">
                                                <i class="fa fa-money"></i><?= $row->gaji ?>
                                                <br>
                                                <i class="fa fa-plus"></i><?= str_replace('.', '<br>• ', $row->benefit) ?>
                                            </span>
                                        </div>
                                    <?php else : ?>
                                        <div class="single-blog-img">
                                            <h1><?= $row->title ?></h1>
                                        </div>
                                    <?php endif; ?>
                                    <div class="blog-meta">

                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($row->created_date)); ?>
                                        </span>
                                    </div>
                                    <div class="blog-text">
                                        <h2>
                                            Requirement :
                                        </h2>
                                        <p>
                                            <?= str_replace('.', '<br>• ', $row->kualifikasi) ?>
                                        </p>
                                        <h2>Job Desc</h2>
                                        <?= str_replace('.', '<br>• ', $row->deskripsi) ?></p>
                                    </div>
                                    <span>
                                        <!-- Trigger modal for job application -->
                                        <a class="ready-btn" data-toggle="modal" data-target="#applyModal<?= $row->title ?>">Apply</a>
                                    </span>
                                </div>

                                <!-- Modal for job application -->
                                <div class="modal fade" id="applyModal<?= $row->title ?>" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel<?= $row->id ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="applyModalLabel<?= $row->id ?>">Apply for <?= $row->title ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Your job application form goes here -->
                                                <form action="<?= base_url('job/submit') ?>" method="POST" enctype="multipart/form-data">
                                                    <!-- Form fields (e.g., name, email, resume upload) -->
                                                    <input type="hidden" class="form-control" value="<?=$row->title?>" id="title" name="title">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Date of Birth</label>
                                                        <input type="date" class="form-control" id="date" name="date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Address</label>
                                                        <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Telp No</label>
                                                        <input type="text" class="form-control" id="telp" name="telp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location">Gender</label>
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <!-- Add more location options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="location">Education</label>
                                                        <select class="form-control" id="education" name="education">
                                                            <option value="High School">High School</option>
                                                            <option value="Diploma ">Diploma (D1-D4)</option>
                                                            <option value="Bachelor's Degree ">Bachelor's Degree </option>
                                                            <option value="Master's Degree ">Master's Degree </option>
                                                            <option value="Doctorate ">Doctorate </option>
                                                            <!-- Add more location options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="marital-status">Marital Status</label>
                                                        <select class="form-control" id="marital-status" name="marital-status">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Divorced">Divorced</option>
                                                            <option value="Widowed">Widowed</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Resume</label>
                                                        <input type="file" class="form-control" id="file" name="file"accept=".pdf">
                                                    </div>
                                                    <!-- Add more form fields as needed -->

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
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
                    $totalPosts = count($job); // Assuming $job is your array of blog posts

                    // Get the current page number from the URL, default to page 1
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;

                    // Calculate the offset to retrieve the correct posts for the current page
                    $offset = ($page - 1) * $postsPerPage;

                    // Slice the $job array to get the posts for the current page
                    $postsForPage = array_slice($job, $offset, $postsPerPage);

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