<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Mathin Mochammad
| Template Name     : Muvimag V2
| -------------------------------------------------------------------------------
*/

require_once($_SERVER['DOCUMENT_ROOT'] .'/app/config/autoload.php'); ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="profile" href="http://gmpg.org/xfn/11">
					<title>Redirecting to Request to Watch</title>
					<link rel='stylesheet' id='bootstrap-css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />
					<link rel='stylesheet' id='simple-css' href='//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css' type='text/css' media='all' />
					<link rel='stylesheet' id='style-css' href='<?php style_theme();?>/css/style.min.css' type='text/css' media='all' />
				</head>
				<body class="offer">
					<div class="center-container">
						<div class="center-wrapper">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center">
										<span class="spinner loading">
											<span class="icon-lock"></span>
										</span>
										<br>
											<div class="progress active">
												<div class="progress-bar progress-bar-success" style="width:0%" data-url="<?php echo get_ads() ?>"></div>
											</div>
											<div>Redirecting to secure page...</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script type='text/javascript' src='//code.jquery.com/jquery-2.2.0.min.js' defer></script>
						<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' defer></script>
						<script type='text/javascript' src='<?php style_theme();?>/js/scripts.min.js' defer></script>
						<?php echo histats_write() ?>
					</body>
				</html>