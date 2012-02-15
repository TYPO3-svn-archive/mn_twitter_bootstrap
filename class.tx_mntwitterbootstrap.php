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
 * Twitter bootstrap loader functions
 *
 * @author Mattias Nilsson (tollepjaer@gmail.com)
 * @package TYPO3
 * @subpackage tx_mntwitterbootstrap
 */
class tx_mntwitterbootstrap
{
    /**
	 * Hook function for adding script
	 *
	 * @param	array	Params for hook
	 * @return	void
	 */
    function includeTwitterBootstrap($params) {
        $params['jsFiles'][t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/js/bootstrap.min.js"] = array(
			'file'       => t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/js/bootstrap.min.js", //tx_t3jquery::getJqJS(TRUE),
			'type'       => 'text/javascript',
			'section'    => t3lib_PageRenderer::PART_HEADER,//self::getSection(),
			'compress'   => FALSE,
			'forceOnTop' => TRUE,
			'allWrap'    => ''
		);
    }
    
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']);
}
?>