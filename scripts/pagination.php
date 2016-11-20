<?php
  // require 'libs/simple_html_dom.php';
  require 'libs/phpquery.php';

  $sitename = 'https://laravel-news.ru/';
  $page_id = 1;
  if(isset($_GET['page'])) $page_id = $_GET['page'];

  // Get page
  $html = file_get_contents('https://laravel-news.ru/?page=' . $page_id);

  phpQuery::newDocument($html);

  $items = pq('.blog-teaser');
  $prev = pq('.older');
  $next = pq('.newer');

  if($prev->html()) {
    $prev_page_id = explode("page=", $prev->attr('href'));
    $prev_page_id = $prev_page_id[1];
  }

  if($next->html()) {
    $next_page_id = explode("page=", $next->attr('href'));
    $next_page_id = $next_page_id[1];
  }
?>