<?php
use yii;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <pre>
                <?php
                echo yii::$app->language;
//                foreach ($model as $lang) {
//                    var_dump($lang);
//                }
                ?>
                </pre>
            </div>
        </div>

    </div>
</div>
