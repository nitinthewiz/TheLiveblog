<?php
/*
	Copyright (c) 2012, Matt Zanchelli
	All rights reserved.

	Redistribution and use in source and binary forms, with or without
	modification, are permitted provided that the following conditions are met:
		* Redistributions of source code must retain the above copyright
		  notice, this list of conditions and the following disclaimer.
		* Redistributions in binary form must reproduce the above copyright
		  notice, this list of conditions and the following disclaimer in the
		  documentation and/or other materials provided with the distribution.
		* Neither the name of the <organization> nor the
		  names of its contributors may be used to endorse or promote products
		  derived from this software without specific prior written permission.

	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
	ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
	WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
	DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
	DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
	(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
	ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
	(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
	$configs = include('configs.php');
	header("Content-Type: text/xml;charset=iso-8859-1");
	// include 'wp_comments.php';
	$results = file_get_contents('text.txt');
	// echo $results;
	echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n";
?>
<rss version="2.0">
	<channel>
		<title><?= $configs->siteTitle ?></title>
		<description><?= $configs->siteDescription ?></description>
		<link> <?php echo "http://" . $_SERVER['HTTP_HOST']; ?> </link>
		<language>en</language>
		<?php
			$wp_comments = eval("return " . $results . ";");
			$i=0;
			foreach ($wp_comments as $livepost){
				if($i==20) break;
				echo "\n<item>\n";
					echo "<title></title>\n";
					echo "<link>$configs->siteUrl#".$livepost['comment_ID']."</link>\n";
					echo "<guid>$configs->siteUrl#".$livepost['comment_ID']."</guid>\n";
					echo "<pubDate>" . date( DATE_RFC822, strtotime($livepost['comment_date']) ) . "</pubDate>\n";
					echo "<description>";
						echo str_replace('&nbsp;',' ',$livepost['comment_content']);
					echo "</description>\n";
				echo "</item>";
				$i++;
			}
		?>
	</channel>
</rss>
