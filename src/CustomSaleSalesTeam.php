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
 * CustomSaleSalesTeam
 */
class CustomSaleSalesTeam {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"employee" => "RecordRef",
		"salesRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}
