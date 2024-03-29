<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/gpl-license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@refersion.com so we can send you a copy immediately.
 *
 * @category   TCS
 * @package    Tcs_Codshippingbooking
 * @copyright  Copyright (c) 2015 TCS (Pvt) Ltd.
 * @author	   TCS Developer <kamran.haider@tcs-e.com>
 * @license    http://opensource.org/licenses/gpl-license GNU General Public License
 */

/**
 * COD Shipping Booking Dropdown Print Model
 *
 * @category   TCS
 * @package    Tcs_Codshippingbooking
 * @author     TCS Developer <kamran.haider@tcs-e.com>
 */

class Tcs_Codshippingbooking_Model_System_Config_Source_Dropdown_Print {
	
	/**
	 * Set the option for config element
	 * 
	 * @param  null
	 * @return array
	 */	
	public function toOptionArray() {
		return array(
			array(
				'value' => 'pdf',
				'label' => 'PDF',
			),
			array(
				'value' => 'html',
				'label' => 'HTML',
			),
		);
	}
}