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
 * ManufacturingOperationTaskSearchAdvanced
 */
class ManufacturingOperationTaskSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRow
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
		"criteria" => "ManufacturingOperationTaskSearch",
		"columns" => "ManufacturingOperationTaskSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
