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
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
	<script type="text/javascript">
		function toTw(comment_ID){
			var text = document.getElementById(comment_ID).innerHTML;
			window.open('http://twitter.com/?status='+text+'%20-%20@<?= $configs->twitterName ?> - http://<?= $configs->siteUrl ?>%23'+comment_ID);
		}
	</script>
	<style type="text/css">
		.table {
		    word-wrap: break-word;
		}
	</style>
</head>
<body>
<div class="container-fluid h-100" id="root">
   <div class="row h-100">
     <div class="col-md-1 fixed py-1"></div>
     <div class="col fluid py-1">
	<h1><?= $configs->siteTitle ?></h1>
	<h2><?= $configs->siteDescription ?></h2>
	<h3>Feeds:&nbsp;<a href="/rss.php">rss</a>&bull;<a href="/jsonfeed.php">json</a></h3>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
			<?php
			$wp_comments = eval("return " . $results . ";");
			foreach ($wp_comments as $livepost)

			echo "<tr><td id='".$livepost['comment_ID']."'>".$livepost['comment_content'].$livepost['blurb'].$livepost['tweet']."</td><td class=\"float-right\"><a href='$configs->siteUrl#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a></td></tr>";
			?>
			</tbody>
		</table>
	</div>
	</div>
	<div class="col-md-1 fixed py-1"></div>
</body>
</html>
