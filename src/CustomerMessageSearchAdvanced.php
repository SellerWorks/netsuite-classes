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
 * CustomerMessageSearchAdvanced
 */
class CustomerMessageSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomerMessageSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomerMessageSearchRow
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
		"criteria" => "CustomerMessageSearch",
		"columns" => "CustomerMessageSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
