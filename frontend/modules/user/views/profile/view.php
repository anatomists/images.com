<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
 ?>
<h3><?php echo Html::encode($user->username); ?></h3>
<p><?php echo HtmlPurifier::process($user->about); ?></p><hr>