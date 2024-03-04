<?php
$sql = "SELECT a.id, a.tittle, a.description, c.name AS category_name, a.calendar, a.img 
        FROM articles as a 
        LEFT JOIN category as c ON a.category = c.id
        ORDER BY a.calendar desc";

$result = mysqli_query($conn, $sql);
?>

<div class="col-lg-4 col-md-12">
    <div class="section-title">
        <h2>Stay Connected</h2>
    </div>

    <ul class="stay-connected">
        <li><a href="#"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a></li>
        <li><a href="#"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a></li>
        <li><a href="#"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a></li>
        <li><a href="#"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a></li>
    </ul>

    <div class="stay-connected-ads">
 
      <a href="#"><img src="assets/img/news.png" />
      
    </div>

    <div class="featured-news">
        <div class="section-title">
            <h2>Featured News</h2>
        </div>

        <?php
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="single-featured-news">
                <a href="#">  <img src='upload_directory/<?= $row['img']; ?>' class="img-fuild"></a>
                <div class="news-content">
                    <ul>
                        <li><i class="icofont-user-suited"></i> by <a href="#">John Author</a></li>
                        <li><i class="icofont-calendar"></i> <?= $row['calendar']; ?></li>
                    </ul>
                    <h3><a href="#"><?= $row['tittle']; ?></a></h3>
                </div>
                <div class="tags">
                    <a href="#"><?= $row['category_name']; ?></a>
                </div>
            </div>
        <?php
            $i++;
            if ($i >= 3) {
              
                break;
            }
        }
        ?>
    </div>
</div>
