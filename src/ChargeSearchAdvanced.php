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
 * ChargeSearchAdvanced
 */
class ChargeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ChargeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ChargeSearchRow
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
		"criteria" => "ChargeSearch",
		"columns" => "ChargeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
