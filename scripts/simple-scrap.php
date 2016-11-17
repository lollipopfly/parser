<?php
  require 'libs/simple_html_dom.php';

  $sitename = 'http://kvmpenza.ru/';

  $html = file_get_html('http://kvmpenza.ru/news/');

  $items = $html->find('.masonry-news-item');

?>