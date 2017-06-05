<?php
// include 'wp_comments.php';
$results = file_get_contents('text.txt');
$configs = include('configs.php');
// echo $results;
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="alternate" type="application/rss+xml" title="<?= $configs->siteTitle ?>" href="/rss.php">
	<script type="text/javascript">
		function toADN(comment_ID){
			var text = document.getElementById(comment_ID).innerHTML;
			window.open('https://alpha.app.net/intent/post?text='+text+'%20-%20@YOURADNUSERNAMEHERE - http://YOURLIVEBLOGHERE.COM%23'+comment_ID);
		}
		function toTw(comment_ID){
			var text = document.getElementById(comment_ID).innerHTML;
			window.open('http://twitter.com/?status='+text+'%20-%20@<?= $configs->twitterName ?> - http://<?= $configs->siteUrl ?>%23'+comment_ID+' .');
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
	<h1><?= $configs->siteTitle ?></h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
			<?php
			
			$wp_comments = eval("return " . $results . ";");
			foreach ($wp_comments as $livepost)
				echo "<tr><td rowspan='2' id='".$livepost['comment_ID']."'>".$livepost['comment_content']."</td><td><a href='http://<?= $configs->siteUrl ?>#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a></td></tr><tr><td><button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"toTw(".$livepost['comment_ID'].")\">Tweet this!</button></td></tr>"; 
				// echo "<tr><td rowspan='2' id='".$livepost['comment_ID']."'>".$livepost['comment_content']."</td><td><a href='http://YOURLIVEBLOGHERE.COM#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a></td></tr><tr><td><button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"toADN(".$livepost['comment_ID'].")\">Share To ADN</button><button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"toTw(".$livepost['comment_ID'].")\">Tweet this!</button></td></tr>";
			?>
			</tbody>
		</table>
	</div>
</body>
</html>
