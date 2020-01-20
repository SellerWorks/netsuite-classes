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
 * FairValuePriceSearch
 */
class FairValuePriceSearch extends SearchRecord {
	/**
	 * @access public
	 * @var FairValuePriceSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "FairValuePriceSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
