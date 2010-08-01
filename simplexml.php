<?php
echo 'Hatena Bookmarkcount RSS Test', '<br><br>';
$url = 'http://b.hatena.ne.jp/daisukebe/favorite.rss';
$data = simplexml_load_file($url)
	or die("xml parse error");

foreach($data->item as $item){
	echo '<a href=\'',
		$item->link,
		'\'>',
		$item->title,
		'</a>',
		' -> ',
		$item->children('hatena', true)->bookmarkcount,
		'<br>';
}


