<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Parser</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
</head>
<body>
  <?php require 'scrap.php' ?>

   <div class="container">
     <div class="row">
      <?php foreach ($items as $item): ?>
       <div class="col-md-4">
         <?php
          $src = $item->children(0)->src;
          $title = $item->children(1)->outertext;
          $desc = $item->children(2)->outertext;
         ?>
         <?php if ($src): ?>
          <img src="<?=$sitename.$src?>">
         <?php endif ?>

         <?php if ($title): ?>
          <h2><?=$title ?></h2>
         <?php endif ?>

         <?php if ($desc): ?>
           <p><?=$desc ?></p>
         <?php endif ?>
       </div>
      <?php endforeach ?>
     </div>
   </div>
</body>
</html>