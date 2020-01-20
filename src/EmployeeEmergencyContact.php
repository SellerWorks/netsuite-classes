<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * EmployeeEmergencyContact
 */
class EmployeeEmergencyContact {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $contact;
	/**
	 * @access public
	 * @var string
	 */
	public $relationship;
	/**
	 * @access public
	 * @var string
	 */
	public $address;
	/**
	 * @access public
	 * @var string
	 */
	public $phone;

	static $paramtypesmap = array(
		"id" => "integer",
		"contact" => "string",
		"relationship" => "string",
		"address" => "string",
		"phone" => "string",
	);
}
