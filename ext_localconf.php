<?php

if (TYPO3_MODE != 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 'tx_mntwitterbootstrap->includeTwitterBootstrap';
}

?>