<?php
$uri = service('uri');
$uris = explode('/', rtrim($uri->getPath(), '/'));
$uriStr = '';
$total = count($uris);
?>

<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Dashboard</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <?php $i = 0;
                        foreach ($uris as $url) :
                            $uriStr .= "/$url";
                        ?>
                            <?php if (($i + 1) == $total) : ?>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= ucfirst($url) ?>
                                </li>
                            <?php else : ?>
                                <li class="breadcrumb-item">
                                    <a href="<?= $uriStr ?>"><?= ucfirst($url) ?></a>
                                </li>
                            <?php endif; ?>
                        <?php $i++;
                        endforeach; ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
