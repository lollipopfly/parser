<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Parser</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
</head>
<body>
  <?php require 'scripts/simple-scrap.php' ?>

   <div class="container">
     <div class="row">
      <?php foreach ($items as $item): ?>
       <div class="col-md-4">
         <?php
          $item = pq($item);
          $src = $item->find('img')->attr('src');
          $title = $item->find('h3')->html();
          $desc = $item->find('.masonry-preview')->html();
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
      <?php phpQuery::unloadDocuments(); ?>
     </div>
   </div>
</body>
</html>