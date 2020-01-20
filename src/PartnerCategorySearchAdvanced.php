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
 * PartnerCategorySearchAdvanced
 */
class PartnerCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var PartnerCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var PartnerCategorySearchRow
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
		"criteria" => "PartnerCategorySearch",
		"columns" => "PartnerCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
