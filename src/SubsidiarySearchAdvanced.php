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
 * SubsidiarySearchAdvanced
 */
class SubsidiarySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var SubsidiarySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var SubsidiarySearchRow
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
		"criteria" => "SubsidiarySearch",
		"columns" => "SubsidiarySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
