<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginPage() ?>
<?= $this->render('components/_header') ?>
<body>
<?php $this->beginBody() ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?= $this->render('components/_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
