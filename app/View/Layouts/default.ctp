<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,900italic,700italic,700,300,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('animate.min');
		echo $this->Html->css('stylesheet');

		echo $this->Html->script('jquery.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div id="main-body-container">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo Router::url('/', true) ?>img/logo.fw.png" alt="ConsumerVent" style="width: 207px;">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>

					<li class="login"><a href="#"> Log In </a></li>
					<li class="user-login">
						<span>
							<img src="<?php echo Router::url('/', true) ?>img/customer-photo.jpg">
						</span>
						<a class="username dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Olatunde D. </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>

					</li>

<!--					<li class="dropdown">-->
<!--						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
<!--					</li>-->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</div>

<?php
echo $this->Html->meta('icon');

echo $this->Html->script('bootstrap');
echo $this->Html->script('parallax');
echo $this->Html->script('smoothscroll');
echo $this->Html->script('waypoints');
echo $this->Html->script('jquery.counterup.min');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

<script>
	$(window).load(function() {

		$('.timer').counterUp({
			delay: 20,
			time: 2500
		});

		$(window).scroll(function () {
			if ($(window).scrollTop() > $("nav").height()) {
				$("nav.navbar-slide").addClass("show-menu");
			} else {
				$("nav.navbar-slide").removeClass("show-menu");
		//			$(".navbar-slide .navMenuCollapse").collapse({toggle: false});
		//			$(".navbar-slide .navMenuCollapse").collapse("hide");
		//			$(".navbar-slide .navbar-toggle").addClass("collapsed");
			}
		});
	});
</script>


</body>
</html>