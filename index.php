<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
   <head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/of-original/css/template.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<jdoc:include type="modules" name="css"/>
	</head>
	<body>
		<nav class="navbar col-12">
			<div class="logo col-4">
				<jdoc:include type="modules" name="logo" style="none" />
			</div>
			<div class="nav-menu col-8">
				<jdoc:include type="modules" name="nav-menu" style="none" />
			</div>
		</nav>

		<?php if ($this->countModules('title-image')) : ?>
			<header id="title-header">
				<jdoc:include type="modules" name="title-image" />
				<div id="title-text" class="col-12">
					<jdoc:include type="modules" name="title-text" />
					<jdoc:include type="modules" name="motd" />
				</div>
				<jdoc:include type="modules" name="sponsors" />
			</header>
		<?php endif; ?>

		<div class="content-wrapper col-10">
			<section class="top-section">
				<jdoc:include type="modules" name="top"/>
			</section>
			<section class="content-section">
				<jdoc:include type="component"/>
			</section>
			<section class="bottom-section">
				<jdoc:include type="modules" name="bottom" />
			</section>
		</div>
		<footer class="col-12">
			<jdoc:include type="modules" name="footer"/>
		</footer>
	</body>
</html>