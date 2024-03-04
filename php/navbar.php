<?php
$sql = "SELECT id, name FROM category";
$resultofnav = mysqli_query($conn, $sql);

$categories = array();

if ($resultofnav->num_rows > 0) {
    while ($row = $resultofnav->fetch_assoc()) {
        $categories[] = $row;
    }
}

$currentCategoryId = isset($_GET['id']) ? $_GET['id'] : null;
?>
<style>
    .myelement{
  color:red!important;
} </style>
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="sinmun-mobile-nav">
        <div class="logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
    </div>

    <div class="sinmun-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="post-category-2.php" class="nav-link">Home</a>

                        </li>

                        <?php for ($i = 0; $i < count($categories); $i++) {
                            $category = $categories[$i];
                            $class = ($category['id'] == $currentCategoryId) ? 'myelement' : 'current-category'; ?>
                            <li class="nav-item"><a class="<?= $class ?> nav-link" href="post-category-2.php?id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                        <?php } ?>

                        </li>
                    </ul>

                    <div class="others-options">

                        <div class="header-search d-inline-block">
                            <div class="nav-search">
                                <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                <form action="post-category-2.php"  method="get">
                                    <span class="nav-search-close-button" tabindex="0"></span>
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
<!-- End Navbar Area -->