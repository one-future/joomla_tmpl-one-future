<?php defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$document = Factory::getDocument();
$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();

$activeTemplateUrl = Uri::base() . '/templates/' . $app->getTemplate();

HTMLHelper::_('jquery.framework');

require __DIR__ . "/mobile-optimization.php";

$now = new DateTime();
$year = $now->format("Y");

$this->addFavicon($activeTemplateUrl . '/favicon.ico', 'image/image/x-icon', 'shortcut icon');
HTMLHelper::stylesheet($activeTemplateUrl . '/css/template-alternative.css');
HTMLHelper::stylesheet($activeTemplateUrl . '/css/articles.css');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:url" content="<?php echo Uri::base() ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo Uri::base() . '/images/background-VLO_LS.jpg' ?>">
    <meta property="og:title" content="One Future e.V. | Helfen. Lernen. Verstehen.">
    <meta property="og:description" content="Im Herbst 2015 haben wir den gemeinnützigen Verein One Future e.V. aus einer Schülerinitiative des Europäischen Gymnasiums Bertha-von-Suttner gebildet. Der Verein wird von Jugendlichen und Schüler*innen komplett ehrenamtlich geleitet.">
    <jdoc:include type="modules" name="css" />
</head>

<body>
    <div class="modal-wrapper">
        <div class="collapsible-nav-menu collapse">
            <div class="triangle"></div>
            <div class="menu-items">
                <jdoc:include type="modules" name="nav-menu" style="none" />
            </div>
        </div>
    </div>
    <noscript class="js-modal">
        This page works better with JavaScript enabled.
    </noscript>
    <?php if ($this->countModules('logo') or $this->countModules('nav-menu')) : ?>
        <nav class="navbar col-12 nojs-nav">
            <div class="logo">
                <a href="#">
                    <jdoc:include type="modules" name="logo" style="none" />
                </a>
            </div>
            <div class="nav-menu">
                <jdoc:include type="modules" name="nav-menu" style="none" />
            </div>
            <button class="mobile-nav-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </nav>
    <?php endif; ?>

    <?php if ($this->countModules('title-image')) : ?>
        <header id="title-header">
            <jdoc:include type="modules" name="title-image" />
            <div id="title-text" class="col-12">
                <jdoc:include type="modules" name="title-text" style="none" />
                <jdoc:include type="modules" name="motd" style="none" />
            </div>
            <!--
				<div class="frontpage_notice col-12">
					<div class="notice_container">
						<i class="fas fa-info-circle"></i>
						<jdoc:include type="modules" name="notice"/>
					</div>
				</div>
				-->
        </header>
        <div class="sponsorbanner">
            <jdoc:include type="modules" name="sponsors" />
        </div>
    <?php endif; ?>

    <div class="content-wrapper col-12">
        <section class="top-section">
            <jdoc:include type="modules" name="top" />
        </section>
        <section class="content-section narrow">
            <jdoc:include type="component" />
        </section>
        <section class="bottom-section">
            <jdoc:include type="modules" name="bottom" />
        </section>
    </div>
    <div class="col-12 content-footer">
        <jdoc:include type="modules" name="footer" />
    </div>
    <div class="copyright-footer">
        <div id="imprint">
            <jdoc:include type="modules" name="copyright" />
        </div>
        <p id="copyright">
            <span style="vertical-align: top;line-height: .4em;">&copy;</span>
            <?php echo $year; ?>
            One Future e.V.
        </p>
    </div>
    <script type="text/javascript" src="<?php echo $activeTemplateUrl ?>/js/modernizr-custom.js"></script>
    <script async type="text/javascript" src="<?php echo $activeTemplateUrl ?>/js/script.js"></script>
    <script defer type="text/javascript" src="<?php echo $activeTemplateUrl ?>/js/fontawesome.min.js"></script>
    <script defer type="text/javascript" src="<?php echo $activeTemplateUrl ?>/js/solid.min.js"></script>
    <?php if ($app->input->get('view') == "featured") : ?>
        <script defer type="text/javascript" src="<?php echo $activeTemplateUrl ?>/js/browser-detection.js"></script>
    <?php endif; ?>
    <script type="text/javascript">
        jQuery(".nojs-nav").removeClass("nojs-nav");
    </script>
    <style type="text/css">
        .nojs-nav {
            background-color: white;
            box-shadow: 0px 0px 5px grey;
        }
    </style>
</body>

</html>