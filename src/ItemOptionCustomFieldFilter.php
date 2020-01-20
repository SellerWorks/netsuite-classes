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
 * ItemOptionCustomFieldFilter
 */
class ItemOptionCustomFieldFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fldFilter;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldFilterChecked;
	/**
	 * @access public
	 * @var CustomizationFilterCompareType
	 */
	public $fldFilterCompareType;
	/**
	 * @access public
	 * @var string
	 */
	public $fldFilterVal;
	/**
	 * @access public
	 * @var FldFilterSelList
	 */
	public $fldFilterSelList;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldFilterNotNull;

	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterSelList" => "FldFilterSelList",
		"fldFilterNotNull" => "boolean",
	);
}
