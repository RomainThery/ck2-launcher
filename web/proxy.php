<?php
include('simple_html_dom.php');

$html = file_get_html('http://www.paradoxplaza.com/in-game/ck2/launcher.html');
$news = $html->find('div#box');
echo $news[0];
?>