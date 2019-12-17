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
 * TaxGroupSearchAdvanced
 */
class TaxGroupSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TaxGroupSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TaxGroupSearchRow
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
		"criteria" => "TaxGroupSearch",
		"columns" => "TaxGroupSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
