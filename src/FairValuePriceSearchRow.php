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
 * FairValuePriceSearchRow
 */
class FairValuePriceSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var FairValuePriceSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchRowBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "FairValuePriceSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
