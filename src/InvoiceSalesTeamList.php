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
 * InvoiceSalesTeamList
 */
class InvoiceSalesTeamList {
	/**
	 * @access public
	 * @var InvoiceSalesTeam[]
	 */
	public $salesTeam;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"salesTeam" => "InvoiceSalesTeam[]",
		"replaceAll" => "boolean",
	);
}
