<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Guy Couronné <guy.couronne@qcmedia.ca>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Description of ExtConfiguration
 * 
 * @package qm_configuration
 * @subpackage utility
 * @author Guy Couronné <guy.couronne@qcmedia.ca>
 * @version 1.0
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @copyright (c) 2014 Guy Couronné <guy.couronne@qcmedia.ca>
 */
class Tx_QmConfiguration_Utility_ExtConfiguration implements t3lib_Singleton
{

    /**
     * Get the ext configuration for one extension.
     *
     * @param string $extensionKey
     * @return array typoscript configuration
     */
    public function getConfiguration($extensionKey)
    {
        return $this->parseConfiguration($extensionKey);
    }

    /**
     * Parse settings and return it as array
     *
     * @param string $extensionKey
     * @return array extconf configuration
     */
    protected function parseConfiguration($extensionKey)
    {
        $configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extensionKey]);

        if (!is_array($configuration)) {
            $configuration = array();
        }

        return $configuration;
    }

}
