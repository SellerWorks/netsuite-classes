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
 * BomRevisionSearchAdvanced
 */
class BomRevisionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var BomRevisionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var BomRevisionSearchRow
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
		"criteria" => "BomRevisionSearch",
		"columns" => "BomRevisionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
