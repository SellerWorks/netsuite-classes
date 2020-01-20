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
 * TaxTypeSearchAdvanced
 */
class TaxTypeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TaxTypeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TaxTypeSearchRow
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
		"criteria" => "TaxTypeSearch",
		"columns" => "TaxTypeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
