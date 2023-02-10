<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Libros a la venta</h1>
<div class="row">
    <?php foreach ($libros as $libro) : ?>

        <div class="card" style="width: 18rem;">
            <?= Html::img($libro->imagen, ['class' => 'card-img-top']); ?>
            <div class="card-body">
                <?= Html::tag('h5', Html::encode($libro -> titulo), ['class'=>'card-title']) ?>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
                <?= Html::tag('a',Html::encode($libro->titulo),['class'=>'card-link'])?>
            </div>
        </div>


    <?php endforeach; ?>

</div>

<?= LinkPager::widget(['pagination' => $paginacion]) ?>