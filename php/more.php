<?php
$sql = "SELECT a.id, a.tittle, a.description, c.name AS category_name, a.calendar, a.img 
        FROM articles as a 
        LEFT JOIN category as c ON a.category = c.id
        ORDER BY a.calendar desc";

$result = mysqli_query($conn, $sql);
?> 
    
    <!-- Start More News Area -->
   
<section class="more-news-area">
    <div class="container">
        <div class="more-news-inner">
            <div class="section-title">
                <h2>More News</h2>
            </div>

            <div class="row">
                <div class="more-news-slides owl-carousel owl-theme">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-more-news">
                        <img src='upload_directory/<?= $row['img']; ?>' alt="image">
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">John Smith</a></li>
                                    <li><i class="icofont-calendar"></i> <?= $row['calendar']; ?></li>
                                </ul>
                                <h3><a href="#"><?= $row['description']; ?></a></h3>
                            </div>
                            <div class="tags <?= $row['category_name']; ?>">
                                <a href="#"><?= $row['category_name']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End More News Area -->

