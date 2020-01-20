<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * CashSaleSalesTeamList
 */
class CashSaleSalesTeamList {
	/**
	 * @access public
	 * @var CashSaleSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "CashSaleSalesTeam[]",
		"replaceAll" => "boolean",
	);
}
