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
	<link rel="alternate" type="application/rss+xml" title="<?= $configs->siteTitle ?> RSS" href="/rss.php">
	<link rel="alternate" type="application/json" title="<?= $configs->siteTitle ?> JSON Feed" href="/jsonfeed.php">
	
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
		.post .content {
			float: left;
		}
		.syndic {
			float: right;
		}
		.icon {
  		display: inline-block;
  		width: 1em;
  		height: 1em;
  		stroke-width: 0;
  		stroke: currentColor;
  		fill: currentColor;
		}
		.icon-rss {
		stroke: #ff6600;
		fill: #ff6600;
		}
	</style>
</head>
<body>
<div class="container-fluid h-100" id="root">
   <div class="row h-100">
     <div class="col-md-1 fixed py-1"></div>
     <div class="col fluid py-1">
	<h1><?= $configs->siteTitle ?></h1>
	<h2><?= $configs->siteDescription ?><span class=\"syndic\">
	<a href="/rss.php"><svg class="icon icon-rss2"><use xlink:href="symbol-defs.svg#icon-rss2"></use></svg></a><a href="/jsonfeed.php"><svg class="icon icon-jsonfeed"><use xlink:href="symbol-defs.svg#icon-jsonfeed"></use></svg></a></span></h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
			<?php
			$wp_comments = eval("return " . $results . ";");
			foreach ($wp_comments as $livepost) {

				$blurb = '';
				if (!empty($livepost['blurb'])) {
					$blurb = "<a href='" . $livepost['blurb'] . "'><svg class=\"icon icon-mug\"><use xlink:href=\"symbol-defs.svg#icon-mug\"></use></svg></a> ";
				}
				$toot = '';
				if (!empty($livepost['toot'])) {
					$toot = "<a href='" . $livepost['toot'] . "'><svg class=\"icon icon-masto\"><use xlink:href=\"symbol-defs.svg#icon-masto\"></use></svg></a> ";
				}
				$tweet ='';
				if (!empty($livepost['tweet'])) {
					$tweet = "<a href='" . $livepost['tweet'] . "'><svg class=\"icon icon-twitter\"><use xlink:href=\"symbol-defs.svg#icon-twitter\"></use></svg></a>";
				}
				
				echo "<tr>
				<td class=\"post\" id='".$livepost['comment_ID']."'><span class=\"content\">".$livepost['comment_content']."</span>
					<span class=\"syndic\">" . $blurb . $toot . $tweet . "</span>
				</td>
				<td class=\"float-right\"><a href='$configs->siteUrl#".$livepost['comment_ID']."'>".$livepost['comment_date']."</a>
				</td>
				</tr>";
			}
				?>
			</tbody>
		</table>
	</div>
	</div>
	<div class="col-md-1 fixed py-1"></div>
	<script defer src="svgxuse.js"></script>
</body>
</html>
