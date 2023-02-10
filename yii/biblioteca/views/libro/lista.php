<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Libros a la venta</h1>
<div class="row">
    <?php foreach ($libros as $libro) : ?>

        <div class="card" style="width: 18rem;">
            <?= Html::img($libro->imagen, ['width' => '100px', 'class' => 'card-img-top']); ?>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
                <?= Html::encode($libro->titulo) ?>
            </div>
        </div>


    <?php endforeach; ?>

</div>

<?= LinkPager::widget(['pagination' => $paginacion]) ?>