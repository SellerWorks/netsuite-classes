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
 * ConsolidatedExchangeRateSearchAdvanced
 */
class ConsolidatedExchangeRateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateSearchRow
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
		"criteria" => "ConsolidatedExchangeRateSearch",
		"columns" => "ConsolidatedExchangeRateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
