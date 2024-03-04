<?php
include 'connection.php';
include 'spFunction.php';

$spFunction = new spFunction();

$article = $spFunction->getSingleArticle($conn);

if ($article) {
    $article_id = $_GET['article_id'];
    $tags = $spFunction->getTagsForArticle($conn, $article_id);
}

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
        <!-- Start Navbar Area -->
        <?php include 'navbar.php'; ?>
        <!-- End Navbar Area -->
    </header>
    <!-- End Header Area -->

    <!-- Start News Details Area -->
    <section class="news-details-area pb-40">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icofont-home"></i> Home</a></li>
                <li><i class="icofont-rounded-right"></i></li>
                <li><a href="#"><?= $article['category_name'] ?></a></li>
            </ul>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="news-details">
                        <div class="article-img">
                            <?php if ($article) { ?>
                                <img src="upload_directory/<?= $article['img'] ?>" alt="Article Image">
                            <?php } ?>
                        </div>

                        <div class="article-content">
                            <?php if ($article) { ?>
                                <ul class="entry-meta">
                                    <li><i class="icofont-user"></i> <a href="#">Sinmun</a></li>
                                    <li><i class="icofont-eye-alt"></i> 1040</li>
                                    <li><i class="icofont-calendar"></i><?= $article['calendar']; ?></li>
                                </ul>

                                <h3><?= $article['tittle']; ?></h3>

                                <p><?= $article['description']; ?></p>

                                <blockquote class="wp-block-quote">
                                    <p><?= $article['tittle']; ?></p>
                                    <cite>Tom Cruise</cite>
                                </blockquote>

                                <p><?= $article['paragraph']; ?></p>


                                <ul class="category">
                                    <li><span>Tags:</span></li>
                                    <?php if (!empty($tags)) {
                                        foreach ($tags as $tag) { ?>
                                            <li><a href="post-tag.php?tag_id=<?= $tag?>" class="tag-link"><?= $tag ?></a>

                                    <?php }
                                    } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="post-controls-buttons">
                        <div>
                            <a href="#">Prev Post</a>
                        </div>

                        <div>
                            <a href="#">Next Post</a>
                        </div>
                    </div>
                </div>
                <?php include 'stayconnected.php'; ?>
            </div>
        </div>
    </section>
    <!-- End News Details Area -->

    <!-- Start More News Area -->
    <?php include 'more.php'; ?>
    <!-- End More News Area -->

    <!-- Start Footer Area -->
    <?php include 'footer.php'; ?>
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

</html>