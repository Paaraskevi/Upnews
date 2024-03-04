<?php
include 'connection.php';
include 'functions.php';

$myFunctions = new MyFunctions();
$tags = $_GET['tag_id'];

$functionResults = $myFunctions->decideWhichFunctionToCall($conn,$tags);

$result = $functionResults['result'];
$total_articles = $functionResults['total_articles'];
$num_pages = $functionResults['num_pages'];
?>


<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Sinmun - News & Magazine HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <?php include 'navbar.php' ?>

    </header>

    <!-- Start Page Title Area -->
    <?php include 'titlearea.php' ?>
    <!-- End Page Title Area -->

    <!-- Start All Category News Area -->
    <section class="all-category-news ptb-40 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="section-title">
                <h2><?=$tags?></h2>
                </div>
                <?php
                $i = 0;
                while ($articles = mysqli_fetch_assoc($result)) {
                    $bg_color_class = $i % 2 === 0 ? 'bg-2' : 'bg-3';
                ?>
                    <div class="single-category-news">
                        <div class="row m-0 align-items-center">
                            <div class="col-lg-5 col-md-6 p-0">
                                <div class="category-news-image">
                                    <a href="#"><img src="upload_directory/<?= $articles['img']; ?>"></a>

                                    <div class="tags <?= $bg_color_class ?>">
                                        <a href="#"><?= $articles['category_name'] ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-6">
                                <div class="category-news-content">
                                    <span><i class="icofont-clock-time"></i> <?= $articles['calendar'] ?></span>
                                    <h3><a href="single-post-1.php?article_id=<?= $articles['id'] ?>"><?= $articles['tittle'] ?></a></h3>
                                    <p><?= $articles['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
                <?php include 'pagination.php' ?>
                <?php include 'stayconnected.php' ?>
            </div>
        </div>
</section>
    <!-- End All Category News Area -->

    <!-- Start More News Area -->
    <?php include 'more.php' ?>
    <!-- End More News Area -->

    <!-- Start Footer Area -->
    <?php include 'footer.php' ?>
    <!-- End Footer Area -->

    <div class="go-top"><i class="icofont-swoosh-up"></i></div>

    <!-- Jquery Min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- MeanMenu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- MixItUp Min JS -->
    <script src="assets/js/mixitup.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact Form Script JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- ajaxChimp Min JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
<script>
    function showPage(page, idCat) {
        if (idCat) {
            window.location.href = 'post-category-2.php?id=' + idCat + '&page=' + page;
        } else {
            window.location.href = 'post-category-2.php?page=' + page;
        }
    }
</script>

</html>