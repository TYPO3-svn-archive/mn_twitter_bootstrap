<?php
/* Add Hooks */
if (TYPO3_MODE != 'BE' && t3lib_div::int_from_ver(TYPO3_version) >= 4003000) {
	//$confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3jquery']);
	//if ($confArr['alwaysIntegrate']) {
		require_once(t3lib_extMgm::extPath('mn_twitter_bootstrap').'class.tx_mntwitterbootstrap.php');
		tx_mntwitterboostrap::addBoostrapFiles();
	//}
}
?>