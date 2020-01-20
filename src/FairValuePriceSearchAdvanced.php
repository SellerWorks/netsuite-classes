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
 * FairValuePriceSearchAdvanced
 */
class FairValuePriceSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var FairValuePriceSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var FairValuePriceSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "FairValuePriceSearch",
		"columns" => "FairValuePriceSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
