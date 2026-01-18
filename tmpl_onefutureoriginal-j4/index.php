<?php defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$document = $app->getDocument();
$wa  = $document->getWebAssetManager();
$templateName = $app->getTemplate();

$wa->getRegistry()->addExtensionRegistryFile('joomla');
$wa->useScript('jquery');

$wa->registerAndUseScript(
    'tmpl_onefutureoriginal.modernizr-custom',
    'templates/' . $templateName . '/js/modernizr-custom.js',
    [],
    ['defer' => true]
);

$wa->registerAndUseScript(
    'tmpl_onefutureoriginal.script',
    'templates/' . $templateName . '/js/script.js',
    ['jquery'],
    ['defer' => true]
);

$wa->registerAndUseScript(
    'tmpl_onefutureoriginal.fontawesome-base',
    'templates/' . $templateName . '/js/fontawesome.min.js',
    [],
    ['defer' => true]
);

$wa->registerAndUseScript(
    'tmpl_onefutureoriginal.fontawesome-solid',
    'templates/' . $templateName . '/js/solid.min.js',
    [],
    ['defer' => true]
);

$wa->registerAndUseStyle(
    'tmpl_onefutureoriginal.base',
    'templates/' . $templateName . '/css/template-alternative.css',
);

$wa->registerAndUseStyle(
    'tmpl_onefutureoriginal.articles',
    'templates/' . $templateName . '/css/articles.css',
    ['tmpl_onefutureoriginal.base']
);


$activeTemplateUrl = Uri::base() . '/templates/' . $templateName;
$this->addFavicon($activeTemplateUrl . '/favicon.ico', 'image/image/x-icon', 'shortcut icon');

require __DIR__ . "/mobile-optimization.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:url" content="<?php echo Uri::base() ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo Uri::base() . '/images/background-VLO_LS.jpg' ?>">
    <meta property="og:title" content="One Future e.V. | Helfen. Lernen. Verstehen.">
    <meta property="og:description" content="Im Herbst 2015 haben wir den gemeinnützigen Verein One Future e.V. aus einer Schülerinitiative des Europäischen Gymnasiums Bertha-von-Suttner gebildet. Der Verein wird von Jugendlichen und Schüler*innen komplett ehrenamtlich geleitet.">
    <jdoc:include type="metas" />
    <jdoc:include type="styles" />
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
        <p id="copyright">
            <span style="vertical-align: top;line-height: .4em;">&copy;</span>
            <?php echo (new DateTime())->format("Y");; ?>
            One Future e.V.
        </p>
        <div id="imprint">
            <jdoc:include type="modules" name="copyright" />
        </div>
    </div>
    <jdoc:include type="scripts" />
</body>

</html>