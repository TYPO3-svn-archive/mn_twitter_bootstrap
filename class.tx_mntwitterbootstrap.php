<?php
/***************************************************************
 * Copyright notice
 *
 * (c) 2007-2012 Mattias Nilsson (tollepjaer@gmail.com)
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
	 * Hook function for adding header data
	 *
	 * @param	array	Params for hook
	 * @return	void
	 */
    function includeTwitterBootstrap($params) {
        
        $confArr = $this->getConf();
        //Check if value is set to integrate the library
		if ($confArr['alwaysIntegrate']) {
            
            $files = $this->getMinifiedFiles();
            if(!$confArr['minifiedVersion']) {
                $files = $this->getNoneMinifiedFiles();
            }
               
            $renderPart = $this->getSection($confArr['integrateToFooter']);
        
            $params['cssFiles'][t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/css/" . $files['bootstrap-responsive']] = array(
    			'file'       => t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/css/" . $files['bootstrap-responsive'], 
    			'type'       => 'text/css',
    			'section'    => $renderPart,
    			'compress'   => FALSE,
    			'forceOnTop' => TRUE,
    			'allWrap'    => '',
                'rel'        => 'stylesheet',
                'media'      => 'all'
    		);
            
            if($confArr['navbarFix']) {
                $params['cssFiles'][t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/css/navbar-responsive.css"] = array(
        			'file'       => t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/css/navbar-responsive.css", 
        			'type'       => 'text/css',
        			'section'    => $renderPart,
        			'compress'   => FALSE,
        			'forceOnTop' => TRUE,
        			'allWrap'    => '',
                    'rel'        => 'stylesheet',
                    'media'      => 'all'
        		);    
            }
                    
            $params['cssFiles'][t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/css/" . $files['bootstrap']] = array(
    			'file'       => t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/css/" . $files['bootstrap'], 
    			'type'       => 'text/css',
    			'section'    => $renderPart,
    			'compress'   => FALSE,
    			'forceOnTop' => TRUE,
    			'allWrap'    => '',
                'rel'        => 'stylesheet',
                'media'      => 'all'
    		);
                
            $params['jsFiles'][t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/js/" . $files['bootstrap-js']] = array(
    			'file'       => t3lib_extMgm::siteRelPath('mn_twitter_bootstrap') . "res/bootstrap/js/" . $files['bootstrap-js'], 
    			'type'       => 'text/javascript',
    			'section'    => $renderPart,
    			'compress'   => FALSE,
    			'forceOnTop' => TRUE,
    			'allWrap'    => ''
    		);
        }
    }
    
    
    /**
     * tx_mntwitterbootstrap::getSection()
     * 
     * @param   boolean     $integrateToFooter
     * @return  constant    PageRender option
     */
    function getSection($integrateToFooter) {
		if ($integrateToFooter) {
			return t3lib_PageRenderer::PART_FOOTER;
		} else {
			return t3lib_PageRenderer::PART_HEADER;
		}
	}
    
    /**
	 * Get the configuration of mn_twitter_bootstrap 
     * 
	 * @return  array
	 */
	function getConf() {
		return unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mn_twitter_bootstrap']);
	}
    
    /**
     * Get the file paths for minified version
     * 
     * @return array $files
     */
    private function getMinifiedFiles() {
        $files = array(
            'bootstrap-responsive' => 'bootstrap-responsive.min.css',
            'bootstrap' => 'bootstrap.min.css',
            'bootstrap-js' => 'bootstrap.min.js'
        );
        return $files;
    }
    
    /**
     * Get the file paths for none minified version
     * 
     * @return array $files
     */
    private function getNoneMinifiedFiles() {
        $files = array(
            'bootstrap-responsive' => 'bootstrap-responsive.css',
            'bootstrap' => 'bootstrap.css',
            'bootstrap-js' => 'bootstrap.js'
        );
        return $files;
    }
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mn_twitter_bootstrap/class.tx_mntwitterbootstrap.php']);
}
?>