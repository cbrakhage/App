<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link href="<?=get_template_directory_uri()?>/assets/fontawesome/css/all.css" rel="stylesheet" />
		<link href="<?=get_template_directory_uri()?>/css/sidebar.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ramabhadra">
		<link rel="icon" type="image/png" href="/favicon.png"/>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/js/sidebar.js"></script>

		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<?php wp_head(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
		<style type="text/css">
			/* DO NOT FUCKING TOUCH THIS */
			body { background: #ccc; padding: 0px; margin: 0px; font-family: 'Ramabhadra', serif; font-size: 12px; overflow: hidden; }
			@media only screen and (max-width: 991px) {
				body, #page {
					background: #6666ff;
				}
			}
			#page { position: relative; width: 100%; height: 100%; }

			#cherrybomb { border: 10px solid #6666ff; position: absolute; left: 50%; top: 0; bottom: 0px; transform: translateX(-50%); border-radius: 10px; background: #ff99cc; border-bottom: 5px; }

			#header { position: absolute; width: 100%; top: 0px; height: 125px; line-height: 125px; overflow: hidden; background: white; z-index: 3000; border: 0px; font-size: 26px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom: 2px solid black;  }
			#header #toggleMenu { position: relative; transform: translateY(100%); cursor: pointer; }
			#logo { height: 100px; }

			#sidebar { position: absolute; top: 0; bottom: 30px; width: 250px; z-index: 2000; overflow: hidden; overflow-y: scroll; }
			#background { position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; background: #000; opacity: .7; z-index: 999; }
			#sidebar .menu { position: absolute; top: 125px;  bottom: 0px; width: 250px; background: black; border-right: 2px solid white; z-index: 1000; }

			#content { position: absolute; top: 125px; bottom: 30px; width: 100%; overflow: hidden; overflow-y: scroll; background: black; border: 0px; outline: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }
			#content::-webkit-scrollbar, #sidebar::-webkit-scrollbar {
				  display: none;
			 }
			#footer { position: absolute; width: 100%; bottom: 0px; height: 30px; line-height: 30px; overflow: hidden; background: #ff99cc; font-weight: bold; color: white; font-size: 11px; z-index: 3000; }
			/* TO HERE */
		</style>

		<style>
		body {
		  background-image: url('https://cherrybombatl.com/wp-content/uploads/2021/04/bggg.jpg');
		}
		</style>


		<script type="text/javascript">
			$(document).ready(function() {
				$(document).on("click", "#toggleMenu", function() {
					$("#sidebar").toggleClass('d-none');
					$("#background").toggleClass('d-none');
				});
				$(document).on("click", "#background", function() {
					$("#background").addClass('d-none');
					$("#sidebar").addClass('d-none');
				})
			});
		</script>
	</head>
	<body>
		<div style="position: relative;" id="page">

			<div id="cherrybomb" class="col-12 col-lg-8 py-0">
					<div id="background" class="d-none"></div>
					<div class="py-2 text-center" id="header">
						<div class="row desktop d-none d-md-flex">
							<div class="col-3">
								<img src="/wp-content/uploads/2021/04/CBD200.png" id="logo" />
							</div>
							<div class="col-3">
								Home
							</div>
							<div class="col-3">
								Services
							</div>
							<div class="col-3">
								Contact
							</div>
						</div>
						<div class="row mobile d-flex d-md-none">
							<div class="col">
								<img src="/wp-content/uploads/2021/04/CBD200.png" id="logo" />
								<div id="toggleMenu" class="float-end me-3"><i class="fas fa-bars"></i></div>
							</div>
						</div>
					</div>
					<div id="sidebar" class="d-none d-md-none">

						<div class="menu">
							<div id="jquery-accordion-menu" class="jquery-accordion-menu">
								<ul>
									<li><a href="#"><i class="fa fa-bomb"></i>Home </a></li>
									<li><a href="#"><i class="fa fa-user"></i>About </a></li>
									<li><a href="#"><i class="fa fa-file-image-o"></i>Gallery </a><span class="jquery-accordion-menu-label">12 </span></li>
									<li><a href="#"><i class="fa fa-cog"></i>Services </a>
										<ul class="submenu">
											<li><a href="#">Branding</a></li>
											<li><a href="#">Custom Design</a></li>
											<li><a href="#">Printing</a>
												<ul class="submenu">
													<li><a href="#">Vinyl </a></li>
													<li><a href="#">Screen </a></li>
													<li><a href="#">Vectors </a></li>
												</ul>
											</li>
											<li><a href="#">Consulting </a></li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-newspaper-o"></i>Blog </a></li>
									<li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>
										<ul class="submenu">
											<li><a href="#">Web Design </a></li>
											<li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>
											<li><a href="#">Photoshop </a></li>
												</ul>
									</li>
									<li><a href="#"><i class="fa fa-envelope"></i>Contact</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="py-2 px-3" id="content">
