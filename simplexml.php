<?php
echo 'Hatena Bookmarkcount RSS Test', '<br><br>';
$url = 'http://b.hatena.ne.jp/daisukebe/favorite.rss';
$data = simplexml_load_file($url)
	or die("xml parse error");

foreach($data->item as $item){
	echo $item->title,
		' -> ',
		$item->children('hatena', true)->bookmarkcount,
		'<br>';
}


