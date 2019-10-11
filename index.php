<?php
require('header.php');
?>
<body class="bg-dark">
<div class="container">
<div class="jumbotron">
<?php
require('functions.php');
class index{
  public function hello(){
    $fnct = new functions();
?>
    <p class="text-primary"><?php echo $fnct->hello();?></p>
<?php
  }
}
$i = new index();
$i->hello();
?>
</div>
<?php require('links.php'); ?>
<div class="row">
<div class="col-sm-3">
    <p class="bg-danger"><?php $fnct = new functions(); echo $fnct->hello();?></p>
</div>
<div class="col-sm-3">
    <p class="bg-success"><?php $fnct = new functions(); echo $fnct->hello();?></p>
</div>
<div class="col-sm-3">
    <p class="bg-primary"><?php $fnct = new functions(); echo $fnct->hello();?></p>
</div>
<?php
require('footer.php');
?>
