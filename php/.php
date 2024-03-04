


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/icofont.min.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <title>Sinmun - News & Magazine HTML Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>

    <header class="header-area">

        <div class="navbar-area">
            <div class="sinmun-mobile-nav">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt="logo" /></a>
                </div>
            </div>
            <div class="sinmun-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo" /></a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Home</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="index.html" class="nav-link active">Home One</a></li>
                                        <li class="nav-item"><a href="index-2.html" class="nav-link">Home Two</a></li>
                                        <li class="nav-item"><a href="index-3.html" class="nav-link">Home Three</a></li>
                                        <li class="nav-item"><a href="index-4.html" class="nav-link">Home Four</a></li>
                                        <li class="nav-item"><a href="index-5.html" class="nav-link">Home Five</a></li>
                                        <li class="nav-item"><a href="index-6.html" class="nav-link">Home Six</a></li>
                                        <li class="nav-item"><a href="index-7.html" class="nav-link">Home Seven</a></li>
                                    </ul>
                                </li>
                                <?php while ($category = mysqli_fetch_assoc($result)) { ?>
                                    <li class="nav-item"><a href="index.php?id=<?= $category['id'] ?>" class="nav-link"><?= $category['name'] ?></a></li>
                                <?php } ?>


                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Category Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="post-category-1.html" class="nav-link">Category Layout 1</a></li>
                                            <li class="nav-item"><a href="post-category-2.html" class="nav-link">Category Layout 2</a></li>
                                            <li class="nav-item"><a href="post-category-3.html" class="nav-link">Category Layout 3</a></li>
                                            <li class="nav-item"><a href="post-category-4.html" class="nav-link">Category Layout 4</a></li>
                                            <li class="nav-item"><a href="post-category-5.html" class="nav-link">Category Layout 5</a></li>
                                            <li class="nav-item"><a href="post-category-6.html" class="nav-link">Category Layout 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Post Formate</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="single-post-1.html" class="nav-link">Single Post 1</a></li>
                                            <li class="nav-item"><a href="single-post-2.html" class="nav-link">Single Post 2</a></li>
                                            <li class="nav-item"><a href="single-post-3.html" class="nav-link">Single Post 3</a></li>
                                            <li class="nav-item"><a href="single-post-4.html" class="nav-link">Single Post 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="gallery-1.html" class="nav-link">Gallery Layout 1</a></li>
                                            <li class="nav-item"><a href="gallery-2.html" class="nav-link">Gallery Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="author.html" class="nav-link">Author</a></li>
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                                    <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>
                                    <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
                                    <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                                    <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a></li>
                                </ul>
                                </li>
                            </ul>
                            <div class="others-options">
                                <div class="header-search d-inline-block">
                                    <div class="nav-search">
                                        <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                        <form>
                                            <span class="nav-search-close-button" tabindex="0">✕</span>
                                            <div class="nav-search-inner"><input name="search" placeholder="Search here...." /></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="default-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-default-news">
                            <img src="assets/img/<?= $article['img'] ?>" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i><?= $article['calendar'] ?></li>
                                </ul>
                                <h3><a href="#"><?= $article['tittle'] ?></a></h3>
                            </div>
                            <div class="tags"><a href="#"><?= $article['category_name'] ?></a></div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-default-inner-news">
                            <?php while ($article = mysqli_fetch_assoc($resultarticles)) { ?>
                                <div class="news-image">  <img src="assets/img/<?= $article['img'] ?>" alt="image" /></div>
                                <div class="news-content">
                                    <h3><?= $article['tittle'] ?></h3>
                                    <span><i class="icofont-calendar"></i><?= $article['category_name'] ?></span>
                                </div>
                                <a href="#" class="link-overlay"></a>
                                <div class="tags bg-2"><a href="#"><?= $article['category_name'] ?></a></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-default-inner-news">
                                <div class="news-image"><img src="assets/img/3.jpg" alt="image" /></div>
                                <div class="news-content">
                                    <h3>How to Customize your PHP Footer</h3>
                                    <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                </div>
                                <a href="#" class="link-overlay"></a>
                                <div class="tags bg-3"><a href="#">Sports</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="small-image-ads text-center">
                        <a href="#"><img src="assets/img/1-ads.png" alt="image" /></a>
                    </div>
                    <div class="single-default-inner-news">
                        <div class="news-image"><img src="assets/img/4.jpg" alt="image" /></div>
                        <div class="news-content">
                            <h3>Banning Winter Holiy As Islands Offers</h3>
                            <span><i class="icofont-calendar"></i> March 22, 2021</span>
                        </div>
                        <a href="#" class="link-overlay"></a>
                        <div class="tags bg-4"><a href="#">Sports</a></div>
                    </div>
                    <div class="single-default-inner-news">
                        <div class="news-image"><img src="assets/img/5.jpg" alt="image" /></div>
                        <div class="news-content">
                            <h3>Gloost Better They Are With A Featured</h3>
                            <span><i class="icofont-calendar"></i> March 22, 2021</span>
                        </div>
                        <a href="#" class="link-overlay"></a>
                        <div class="tags bg-5"><a href="#">Sports</a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="default-video-news">
                        <h3 class="title">Video</h3>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="assets/img/video-1.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                            </div>
                        </div>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="assets/img/video-2.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Differences between User Experience Interface</a></h3>
                            </div>
                        </div>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="assets/img/video-3.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">A Guide to Avoiding Web Design Mistakes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-news-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="popular-section-ads">
                    <a href="#"><img src="assets/img/<?= $articlepopular['img']; ?>" alt="image" /></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="section-title"><h2>Most Popular</h2></div>
                <div class="row">
                    <div class="popular-news-slides owl-carousel owl-theme">
                       <?php  while ($articlepopular = mysqli_fetch_assoc($resultpopular)) {
                        ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="single-popular-news">
                                    <div class="news-image"><img src="assets/img/<?= $articlepopular['img']; ?>" alt="image" /></div>
                                    <div class="news-content">
                                        <h3><?= $article['tittle']; ?></h3>
                                        <span><i class="icofont-calendar"></i> <?= $articlepopular['calendar']; ?></span>
                                    </div>
                                    <a href="#" class="link-overlay"></a>
                                    <div class="tags bg-2"><a href="#">Sports</a></div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="international-news-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h2>International</h2>
                    </div>
                    <div class="international-news-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-international-news">
                                    <div class="news-image"><img src="assets/img/6.jpg" alt="image" /></div>
                                    <div class="news-content">
                                        <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                        <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="international-news-list">
                                    <div class="media news-media align-items-center">
                                        <a href="#"> <img src="assets/img/small-1.jpg" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                            <h3><a href="#">Introducing the New 404 Page Templates</a></h3>
                                        </div>
                                    </div>
                                    <div class="media news-media align-items-center">
                                        <a href="#"> <img src="assets/img/small-2.jpg" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                            <h3><a href="#">Newspaper Theme: What’s new in v.9</a></h3>
                                        </div>
                                    </div>
                                    <div class="media news-media align-items-center">
                                        <a href="#"> <img src="assets/img/small-3.jpg" alt="image" /> </a>
                                        <div class="content">
                                            <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                            <h3><a href="#">Tricks to Boost your WordPress Site’s Traffic</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="section-title">
                        <h2>Stay Connected</h2>
                    </div>
                    <ul class="stay-connected">
                        <li>
                            <a href="#"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a>
                        </li>
                    </ul>
                    <div class="stay-connected-ads">
                        <a href="#"><img src="assets/img/3-ads.png" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hot-news-area pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="health-lifestyle-news">
                                <div class="section-title">
                                    <h2>Health & Lifestyle</h2>
                                </div>
                                <div class="health-lifestyle-news-slides owl-carousel owl-theme">
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/8.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/7.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-health-lifestyle-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/6.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="politics-news">
                                <div class="section-title">
                                    <h2>Politics</h2>
                                </div>
                                <div class="politics-news-slides owl-carousel owl-theme">
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/6.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">The New-Style GCSEs Show Why Politicians.</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/7.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                    <div class="single-politics-news">
                                        <div class="news-image">
                                            <a href="#"><img src="assets/img/8.jpg" alt="image" /></a>
                                        </div>
                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                            </ul>
                                            <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="around-the-world-news pt-40">
                                <div class="section-title">
                                    <h2>Around The World</h2>
                                    <a href="#" class="view-more">View More <i class="icofont-rounded-double-right"></i></a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-around-the-world-news">
                                            <div class="news-image">
                                                <a href="#"><img src="assets/img/1.jpg" alt="image" /></a>
                                            </div>
                                            <div class="news-content">
                                                <ul>
                                                    <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                    <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                                </ul>
                                                <h3><a href="#">The New-Style GCSEs Show Why Politicians.</a></h3>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-around-the-world-news">
                                            <div class="news-image">
                                                <a href="#"><img src="assets/img/2.jpg" alt="image" /></a>
                                            </div>
                                            <div class="news-content">
                                                <ul>
                                                    <li><i class="icofont-calendar"></i> March 25, 2021</li>
                                                    <li><i class="icofont-speech-comments"></i> <a href="#">50</a></li>
                                                </ul>
                                                <h3><a href="#">Disabled People Must Be Front And Centre On TV</a></h3>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="#"> <img src="assets/img/small-1.jpg" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                                <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="#"> <img src="assets/img/small-2.jpg" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                                <h3><a href="#">Happy Newspaper Day: 50,000+ Delighted Customers!</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="#"> <img src="assets/img/small-3.jpg" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                                <h3><a href="#">Newspaper 8.5. – Discover Landing Page Elements</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="media around-the-world-news-media align-items-center">
                                            <a href="#"> <img src="assets/img/small-4.jpg" alt="image" /> </a>
                                            <div class="content">
                                                <span><i class="icofont-calendar"></i> March 22, 2021</span>
                                                <h3><a href="#">New in Newspaper: Social Network Buttons</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="featured-news">
                        <div class="section-title">
                            <h2>Featured News</h2>
                        </div>
                        <div class="single-featured-news">
                            <img src="assets/img/1.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                            </div>
                            <div class="tags"><a href="#">Sports</a></div>
                        </div>
                        <div class="single-featured-news">
                            <img src="assets/img/2.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">You’ve got mail! All about the tagDiv Newsletter plugin</a></h3>
                            </div>
                            <div class="tags bg-2"><a href="#">Sports</a></div>
                        </div>
                        <div class="single-featured-news">
                            <img src="assets/img/3.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">Newspaper Theme: Enhance Your Pages with the Row Divider</a></h3>
                            </div>
                            <div class="tags bg-3"><a href="#">Sports</a></div>
                        </div>
                    </div>
                    <div class="newsletter-box">
                        <div class="section-title">
                            <h2>Newsletter</h2>
                        </div>
                        <div class="newsletter-box-inner">
                            <h3>Subscribe To Our Mailing List To Get The New Updates!</h3>
                            <i class="icofont-email"></i>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="newsletter-input" placeholder="Enter your email" name="EMAIL" required autocomplete="off" /> <button type="submit"><i class="icofont-paper-plane"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                    <div class="hot-news-ads">
                        <a href="#"><img src="assets/img/4-ads.png" alt="image" /></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="hot-news-ads2">
                        <a href="#"><img src="assets/img/5-ads.png" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="gallery-news">
                        <div class="section-title">
                            <h2>Gallery News</h2>
                        </div>
                        <div class="gallery-news-inner-slides owl-carousel owl-theme">
                            <div class="row align-items-center m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-content">
                                        <h3>
                                            <a href="#"><i class="icofont-camera-alt"></i> A glance (18 June 2021)</a>
                                        </h3>
                                        <p>Gloost Better They Are With A Featured. New York, USA, 17 June. Photo: John Smith</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-image"><img src="assets/img/gallery-news1.jpg" alt="image" /></div>
                                </div>
                            </div>
                            <div class="row align-items-center m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-content">
                                        <h3>
                                            <a href="#"><i class="icofont-camera-alt"></i> A glance (18 June 2021)</a>
                                        </h3>
                                        <p>Gloost Better They Are With A Featured. New York, USA, 17 June. Photo: John Smith</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="gallery-news-image"><img src="assets/img/gallery-news1.jpg" alt="image" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="gallery-news-list">
                        <div class="media gallery-news-media align-items-center">
                            <div class="image">
                                <img src="assets/img/small-4.jpg" alt="image" /> <a href="#"><i class="icofont-ui-camera"></i></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="#"><i class="icofont-camera-alt"></i> A glance (17 June 2021)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="media gallery-news-media align-items-center">
                            <div class="image">
                                <img src="assets/img/small-2.jpg" alt="image" /> <a href="#"><i class="icofont-ui-camera"></i></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="#"><i class="icofont-camera-alt"></i> A glance (16 June 2021)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fashion-news">
                        <div class="section-title">
                            <h2>Fashion</h2>
                        </div>
                        <div class="single-fashion-news">
                            <img src="assets/img/1.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="fashion-inner-news">
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="food-news">
                        <div class="section-title">
                            <h2>Food & Hobbbies</h2>
                        </div>
                        <div class="single-food-news">
                            <img src="assets/img/2.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="food-inner-news">
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="north-america-news">
                        <div class="section-title">
                            <h2>North America</h2>
                        </div>
                        <div class="single-north-america-news">
                            <img src="assets/img/3.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="north-america-inner-news">
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="economics-news">
                        <div class="section-title">
                            <h2>Economics</h2>
                        </div>
                        <div class="single-fashion-news">
                            <img src="assets/img/4.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="fashion-inner-news">
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="science-technology-news">
                        <div class="section-title">
                            <h2>Science and Technology</h2>
                        </div>
                        <div class="single-food-news">
                            <img src="assets/img/5.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="food-inner-news">
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-food-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="living-life-news">
                        <div class="section-title">
                            <h2>Living Life</h2>
                        </div>
                        <div class="single-north-america-news">
                            <img src="assets/img/6.jpg" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                </ul>
                                <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                            </div>
                        </div>
                        <div class="north-america-inner-news">
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                            <div class="single-north-america-inner-news">
                                <span><i class="icofont-calendar"></i> March 10, 2021</span>
                                <h3><a href="#">Not Who Has Much Is Rich, But Who Gives Much</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="all-news-ads">
                        <a href="#"><img src="assets/img/5-ads.png" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="more-news-area">
        <div class="container">
            <div class="more-news-inner">
                <div class="section-title">
                    <h2>More News</h2>
                </div>
                <div class="row">
                    <div class="more-news-slides owl-carousel owl-theme">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="assets/img/1.jpg" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-2"><a href="#">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="assets/img/2.jpg" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-3"><a href="#">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="assets/img/3.jpg" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-4"><a href="#">Sports</a></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <img src="assets/img/4.jpg" alt="image" />
                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                    </ul>
                                    <h3><a href="#">As well as stopping goals, Cristiane Endler is opening doors.</a></h3>
                                </div>
                                <div class="tags bg-5"><a href="#">Sports</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>About The Magazine</h3>
                        <div class="contact-info">
                            <p>You can reach us via phone, email and website. Or send us some message through our Contact Page.</p>
                            <ul>
                                <li><i class="icofont-google-map"></i> 27 Division St, New York, NY 10002, USA</li>
                                <li><i class="icofont-phone"></i> <a href="#">+(587) 234-4521</a></li>
                                <li><i class="icofont-envelope"></i> <a href="#">info@sinmun.com</a></li>
                            </ul>
                        </div>
                        <div class="connect-social">
                            <p>We're social, connect with us:</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="icofont-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Latest News</h3>
                        <div class="footer-latest-news-list">
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="assets/img/small-2.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="assets/img/small-4.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                            <div class="media latest-news-media align-items-center">
                                <a href="#"> <img src="assets/img/small-3.jpg" alt="image" /> </a>
                                <div class="content">
                                    <ul>
                                        <li><i class="icofont-calendar"></i> March 22, 2021</li>
                                        <li>
                                            <a href="#"><i class="icofont-comment"></i> 12</a>
                                        </li>
                                    </ul>
                                    <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-footer-widget">
                        <h3>Twitter Feed</h3>
                        <div class="twitter-tweet-list">
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                            <div class="single-tweet">
                                <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                                <p>Conference Event WordPress Theme -> 2 New Home Added #wordpress #event #conference #wordpresstheme <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyright © 2022 <a href="http://envytheme.com" target="_blank">EnvyTheme</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="footer-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="go-top"><i class="icofont-swoosh-up"></i></div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>