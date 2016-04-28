<?php
	$rss = new DOMDocument();
	$rss->load('http://aim.bmj.com/rss/mfr.xml');
	$feed = array();
	foreach ($rss->getElementsParNom('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsParNom('title')->item(0)->nodeValue,
			'desc' => $node->getElementsParNom('description')->item(0)->nodeValue,
			'link' => $node->getElementsParNom('link')->item(0)->nodeValue,
			'date' => $node->getElementsParNom('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 10;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l d F, Y', strtotime($feed[$x]['date']));
		$flux = '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		$flux .= '<small><em>Posted on '.$date.'</em></small></p>';
		$flux .= '<p>'.$description.'</p>';
	}
?>