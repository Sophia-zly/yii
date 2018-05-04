<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

/**
 * author: zly
 * Date: 2018/5/4
 */
?>
    <h1>国家信息</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} {$country->code}") ?>
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>