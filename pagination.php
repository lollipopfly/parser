<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Parser</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
</head>
<body>
  <?php require 'scripts/pagination.php' ?>
   <div class="container">
     <div class="row">
        <?php foreach ($items as $item): ?>
         <div class="col-md-4">
           <?php
            $src = $item->children(0)->children(0)->children(0)->src;
            $title = $item->children(0)->children(1)->children(0)->outertext;
            $date = $item->children(0)->children(2)->outertext;
           ?>
           <?php if ($src): ?>
            <img src="<?=$sitename.$src?>">
           <?php endif ?>

           <?php if ($title): ?>
            <h2><?=$title ?></h2>
           <?php endif ?>

           <?php if ($date): ?>
             <p><?=$date ?></p>
           <?php endif ?>
         </div>
        <?php endforeach ?>
     </div>
     <?php if (($prev || $next) && $items): ?>
       <div class="row">
         <div class="col-xs-12 text-right">
            <?php if ($prev): ?>
              <a href="/pagination.php?page=<?=$prev_page_id ?>">
                <?=$prev->innertext ?>
              </a>
            <?php endif ?>
            <?php if ($next): ?>
              <a href="/pagination.php?page=<?=$next_page_id ?>">
                <?=$next->innertext ?>
              </a>
            <?php endif ?>
         </div>
       </div>
     <?php endif ?>
   </div>
</body>
</html>