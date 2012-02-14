<?php
/***************************************************************
 * Copyright notice
 *
 * Based on t3mootools from Peter Klein <peter@umloud.dk>
 * (c) 2007-2010 Juergen Furrer (juergen.furrer@gmail.com)
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * A copy is found in the textfile GPL.txt and important notices to the license
 * from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * jQuery Javascript Loader functions
 *
 * @author Mattias Nilsson (tollepjaer@gmail.com)
 * @package TYPO3
 * @subpackage mn_twitter_bootstrap
 */
class tx_mntwitterbootstrap
{
    /**
    * Adds the jquery script tag to the page headers first place
	* For frontend usage only.
	* @return	void
	*/
    function addBootstrapFiles() {
        
        $includeFiles = '';
        $includeFiles .= '<link href="' . t3lib_extMgm::extPath('mn_twitter_bootstrap') . 'res/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
        $includeFiles .= '<link href="' . t3lib_extMgm::extPath('mn_twitter_bootstrap') . 'res/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">';
        
        $GLOBALS['TSFE']->additionalHeaderData['mn_twitter_bootstrap'] = $includeFiles;
    
    }
	/*function addJqJS()
	{
		if (t3lib_div::int_from_ver(TYPO3_version) >= 4003000) {
			$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['t3jquery'] = 'EXT:t3jquery/class.tx_t3jquery.php:&tx_t3jquery->addJqJsByHook';
		} else {
			$confArr = tx_t3jquery::getConf();
			// Override the headerdata, THX to S. Delcroix (RVVN -  sdelcroix@rvvn.org)
			$block = NULL;
			if ($confArr['integrateFromCDN'] && isset($confArr['locationCDN'])) {
				$params = array();
				tx_t3jquery::getCdnScript($params);
				if (isset($params['jsLibs'])) {
					foreach ($params['jsLibs'] as $key => $param) {
						$block .= '<script type="text/javascript" src="'.$param['file'].'"></script>';
					}
				}
				if (isset($params['jsFiles'])) {
					foreach ($params['jsFiles'] as $key => $param) {
						$block .= '<script type="text/javascript" src="'.$param['file'].'"></script>';
					}
				}
			} else {
				$block .= tx_t3jquery::getJqJS();
			}
			if ($confArr['integrateToFooter']) {
				$GLOBALS['TSFE']->additionalFooterData['t3jquery.lib'] = $block;
			} else {
				$GLOBALS['TSFE']->additionalHeaderData['t3jquery.lib'] = $block;
			}

		}
	}*/

	/**
	 * Get the used Section from Configuration
	 * @return boolean
	 */
	/*function getSection()
	{
		$confArr = tx_t3jquery::getConf();
		if ($confArr['integrateToFooter']) {
			return t3lib_PageRenderer::PART_FOOTER;
		} else {
			return t3lib_PageRenderer::PART_HEADER;
		}
	}*/

	/**
	 * Get the configuration of mn_twitter_bootstrap
	 * @return array
	 */
	function getConf()
	{
		return unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mn_twitter_bootstrap']);
	}

	
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']);
}
?>