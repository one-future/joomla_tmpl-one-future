<?php
defined('_JEXEC');

$document->addStyleDeclaration("
@media (orientation: portrait) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD480_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 500px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD560_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 600px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD720_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 721px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD820_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 821px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD1080_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 1081px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD1400_P.jpg) !important;
    }
}

@media (orientation: portrait) and (min-height: 1401px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD1920_P.jpg) !important;
    }
}

@media (orientation: landscape) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-VLO_LS.jpg) !important;
    }
}

@media (orientation: landscape) and (min-width: 768px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-LOW_LS.jpg) !important;
    }
}

@media (orientation: landscape) and (min-width: 1041px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD_LS.jpg) !important;
    }
}

@media (orientation: landscape) and (min-width: 1281px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-FHD_LS.jpg) !important;
    }
}

@media (orientation: landscape) and (min-width: 1921px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-QHD_LS.jpg) !important;
    }
}

@media (aspect-ratio: 1) and (min-width: 481px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-HD_LS.jpg) !important;
    }
}

@media (aspect-ratio: 1) and (min-width: 1281px) {
    #title-header {
        background-image: url(" . $activeTemplateUrl . "/images/title-images/background-QHD_LS.jpg) !important;
    }
}

");
