<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css?<?= time(); ?>">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<?php include 'connection.php'; ?>

<?php
$sql = "SELECT news.id, news.tittle, news.dis, categories.categories  , news.cal, news.img 
FROM testdb.news 
LEFT JOIN testdb.categories  ON news.cat = categories.id Where categories.categories='Economy' 
ORDER BY cal ASC";


$result = mysqli_query($conn, $sql);



?>

<?php include 'php/header.php' ?>

<body>
    <?php include 'php/nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <?php
                $i = 0;
                while ($news = mysqli_fetch_assoc($result)) {
                  
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-6 col-sm-12 <?php echo ($i % 2 == 0) ? 'order-1' : 'order-2'; ?>">
                            <img src="assets/images/<?= $news['img']; ?>" >
                            <a href="#" onclick="openPopup()"></a>
                            </div>
                            <div class="col-lg-9 col-md-6 col-sm-12 <?php echo ($i % 2 == 0) ? 'order-2' : 'order-1'; ?>">
                                <div class="list-icons-<?php echo ($i % 2 == 0) ? 'left' : 'right'; ?>">
                                    <i class="fa fa-tag" aria-hidden="true"><?= $news['categories'] ?></i>
                                    <i class="fa fa-calendar" aria-hidden="true"><?= $news['cal'] ?></i>
                                </div>
                                <div class="tool-<?php echo ($i % 2 == 0) ? 'left' : 'right'; ?>">
                                    <h5><?= $news['tittle']; ?></h5>
                                    <p><?= $news['dis']; ?></p>
                                <button class="btn-primary">READ MORE</button>   
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php } ?>
            </div>

            <?php include 'php/col3.php' ?>

        </div>
    </div>
    <?php include 'php/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">


function openPopup() {
    document.getElementById("myPopup").style.display = "block";
}

function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

    </script>
</body
</html>
