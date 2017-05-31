<?php
// include 'wp_comments.php';
$results = file_get_contents('text.txt');
// echo $results;
?>

<html>
<head>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/journal/bootstrap.min.css" rel="stylesheet">
	<link rel="alternate" type="application/rss+xml" title="YOURLiveblogTITLEHERE" href="/rss.php">
	<script type="text/javascript">
		function toADN(comment_ID){
			var text = document.getElementById(comment_ID).innerHTML;
			window.open('https://alpha.app.net/intent/post?text='+text+'%20-%20@YOURADNUSERNAMEHERE - http://YOURLIVEBLOGHERE.COM%23'+comment_ID);
		}
		function toTw(comment_ID){
			var text = document.getElementById(comment_ID).innerHTML;
			window.open('http://twitter.com/?status='+text+'%20-%20@YOURTWITTERUSERNAMEHERE - http://YOURLIVEBLOGHERE.COM%23'+comment_ID+' .');
		}
	</script>
	<style type="text/css">
		.btn-default{
			color: #333;
			background-color: #fff;
			border-color: #ccc;
		}
		.btn-primary{
			color: #fff;
			background-color: #428bca;
			border-color: #357ebd;
		}
		.btn-info{
			color: #fff;
			background-color: #5bc0de;
			border-color: #46b8da;
		}
		.table {
		    /*table-layout: fixed;*/
		    /*word-break: break-all;*/
		    word-wrap: break-word;
		}
	</style>
</head>
<body>
	<h1>YOURLiveblogTITLEHERE</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
			<?php
			
			$wp_comments = eval("return " . $results . ";");
			foreach ($wp_comments as $livepost)
				echo "<tr><td rowspan='2' id='".$livepost['comment_ID']."'>".$livepost['comment_content']."</td><td><a href='http://liveblog.nitinkhanna.com#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a></td></tr><tr><td><button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"toTw(".$livepost['comment_ID'].")\">Tweet this!</button></td></tr>"; 
				// echo "<tr><td rowspan='2' id='".$livepost['comment_ID']."'>".$livepost['comment_content']."</td><td><a href='http://YOURLIVEBLOGHERE.COM#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a></td></tr><tr><td><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"toADN(".$livepost['comment_ID'].")\">Share To ADN</button><button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"toTw(".$livepost['comment_ID'].")\">Tweet this!</button></td></tr>";
			?>
			</tbody>
		</table>
	</div>
</body>
</html>
