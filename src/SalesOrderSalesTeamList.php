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
 * SalesOrderSalesTeamList
 */
class SalesOrderSalesTeamList {
	/**
	 * @access public
	 * @var SalesOrderSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "SalesOrderSalesTeam[]",
		"replaceAll" => "boolean",
	);
}
