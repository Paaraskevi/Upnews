<?php   $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 1;?>
<div class="pagination-area">
    <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a>
    <?php for ($i = 1; $i <= $num_pages; $i++) { ?>
        <a href="#" class="page-numbers <?=$page?><?php if ($i == $page){?> current <?php } ?>" onclick="showPage(<?= $i ?>, <?= $category_id ?>)"><?= $i; ?></a>
    <?php } ?>
    <a href="#" class="next page-numbers"><i class="icofont-double-right"></i></a>
    </div>
    <?php if ($page > 1) { ?>
<?= '<a class="prev page-numbers" href="#" onclick="showPage(' . ($page - 1) . ',' . $category_id . ')"></a>';
}?>
   <?php  if ($page < $num_pages) { ?>
        <a class="next page-numbers" href="#" onclick="showPage(<?= $page + 1 ?>, <?= $category_id ?>)"></i></a>
    <?php } ?>

    </div>