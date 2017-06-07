<?php
	$configs = include('configs.php');
	$results = file_get_contents('text.txt');

	$feed_items = array();

	$wp_comments = eval("return " . $results . ";");
	$i=0;
	foreach ($wp_comments as $livepost){
		if($i==20) break;
		$feed_item = array(
			'id' => $livepost['comment_ID'],
			'url' => $configs->siteUrl.'#'.$livepost['comment_ID'],
			'content_text' => $livepost['comment_content'],
			'date_published' => date( DATE_RFC822, strtotime($livepost['comment_date']) ),
			'author' => array(
				'name' => $configs->userName,
			),
		);

		$feed_items[] = $feed_item;
	}

	$feed_json = array(
		'version' => 'https://jsonfeed.org/version/1',
		'home_page_url' => $configs->siteUrl,
		'feed_url' => $configs->siteUrl.'/json.php',
		'title' => $configs->siteTitle,
		'description' => $configs->siteDescription,
		'items' => $feed_items,
	);

	echo json_encode($feed_json);
?>