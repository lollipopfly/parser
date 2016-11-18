<?php
  require 'libs/phpquery.php';

  $sitename = 'http://kvmpenza.ru/';

  $html = file_get_contents('http://kvmpenza.ru/news/');

  phpQuery::newDocument($html);

  $items = pq('.masonry-news-item');
?>