<?php
/**
 * This file is part of a FireGento e.V. module.
 *
 * This FireGento e.V. module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_AdminMonitoring
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2014 FireGento Team (http://www.firegento.com)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 */

/**
 * Source model for admin users
 *
 * @category FireGento
 * @package  FireGento_AdminMonitoring
 * @author   FireGento Team <team@firegento.com>
 */
class FireGento_AdminMonitoring_Model_System_Config_Source_Admin_User
    extends FireGento_AdminMonitoring_Model_System_Config_Source_SourceAbstract
{
    /**
     * Retrieve the option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (null === $this->_options) {
            $userCollection = Mage::getModel('admin/user')->getCollection();

            foreach ($userCollection as $user) {
                $this->_options[] = array(
                    'value' => $user->getData('user_id'),
                    'label' => $user->getData('username'),
                );
            }
        }

        return $this->_options;
    }
}
