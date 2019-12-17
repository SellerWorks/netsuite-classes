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
 * CustomerStatusSearchAdvanced
 */
class CustomerStatusSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerStatusSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerStatusSearchRow
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
		"criteria" => "CustomerStatusSearch",
		"columns" => "CustomerStatusSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
