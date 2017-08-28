<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Video test</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://vjs.zencdn.net/5-unsafe/video-js.css" rel="stylesheet">
	<script src="https://vjs.zencdn.net/5-unsafe/video.js"></script>
	<link href="youtube.css" rel="stylesheet">
</head>
<body>
	<form method="Post" action="">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Link phim" name ="link">
			<span class="input-group-btn">
			<button class="btn btn-default" type="submit">Go!</button>
			</span>
		</div>
	</form>
	<br>
	<?php
		$link = "#";
		if (isset($_POST["link"])) {
			$link = $_POST["link"];
		}
	?>
	<video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px"
	controls <?php if ($link != "#") echo "autoplay"; ?> preload="none" data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.2, 1.4, 1.8, 2] }'>
	<source src="<?php echo $link; ?>" type="video/mp4"/>
</video>
</body>
</html>
