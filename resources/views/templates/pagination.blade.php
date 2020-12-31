<?php
    $startingPoint = 1; // starting page
?>

<nav>
    <ul class="pagination">
        <?php
            $paginationClass = '';
            $maxPages = 3;
            $path='home';

            if($queryPage < $maxPages) {
                $startingPoint = 1;
            } elseif($queryPage >= $pages - (floor($maxPages/2))) {
                $startingPoint = $pages - $maxPages + 1;
            } elseif($queryPage >= $maxPages) {
                $startingPoint = $queryPage - (floor($maxPages/2));
            }
        ?>

        <?php if($queryPage > 1): ?>
            <li class="page-item">
                <a class="page-link" href="<?=$path?>">First</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?=$path?>?page=<?php echo ($queryPage-1); ?>">Prev</a>
            </li>
        <?php endif; ?>

        <?php if($queryPage >= $maxPages): ?>
            <li class="page-item">
                <a class="page-link" href="<?=$path?>?page=1">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">..</a>
            </li>
        <?php endif; ?>

        <?php
            for($i = $startingPoint; $i <= ($startingPoint + ($maxPages - 1)); $i++):
                $paginationClass = '';
                if($i > $pages - 1)
                    continue;
                if($queryPage == $i || ($i == 1 && $queryPage == null)):
                    $paginationClass = 'page-item active';
                endif;
            ?>
            <li class="<?=$paginationClass?>">
                <a class="page-link" href="<?=$path?>?page=<?=$i?>"><?=$i?></a>
            </li>
        <?php endfor; ?>

        <?php if($queryPage <= $pages): ?>
            <?php if($queryPage < ($pages - 1)):?>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">..</a>
                </li>
            <?php endif; ?>
            <li class="page-item<?php if($queryPage == $pages):?> active<?php endif; ?>">
                <a class="page-link" href="<?=$path?>?page=<?=$pages?>"><?=$pages?></a>
            </li>
        <?php endif; ?>

        <?php if($queryPage < $pages): ?>
            <li class="page-item">
                <a class="page-link" href="<?=$path?>?page=<?=($queryPage + 1)?>">Next</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?=$path?>?page=<?=$pages?>">Last</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>