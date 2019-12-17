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
 * ManufacturingCostTemplateSearchAdvanced
 */
class ManufacturingCostTemplateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingCostTemplateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ManufacturingCostTemplateSearchRow
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
		"criteria" => "ManufacturingCostTemplateSearch",
		"columns" => "ManufacturingCostTemplateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
