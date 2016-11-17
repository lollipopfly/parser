<?php
  require 'libs/simple_html_dom.php';

  $sitename = 'https://laravel-news.ru/';
  $page_id = 1;
  if(isset($_GET['page'])) $page_id = $_GET['page'];

  // Get page
  $html = file_get_html('https://laravel-news.ru/?page=' . $page_id);

  $items = $html->find('.blog-teaser');
  $prev = $html->find('.older', 0);
  $next = $html->find('.newer', 0);

  if($prev) {
    $prev_page_id = explode("page=", $prev->href);
    $prev_page_id = $prev_page_id[1];
  }

  if($next) {
    $next_page_id = explode("page=", $next->href);
    $next_page_id = $next_page_id[1];
  }
?>