<?php
$this->pageTitle='Sorry, something is not right! | '.Yii::app()->name ;
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>