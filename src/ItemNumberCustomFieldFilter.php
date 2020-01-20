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
 * ItemNumberCustomFieldFilter
 */
class ItemNumberCustomFieldFilter {
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
	 * @var boolean
	 */
	public $fldFilterNotNull;
	/**
	 * @access public
	 * @var boolean
	 */
	public $fldfilterNull;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fldCompareField;

	static $paramtypesmap = array(
		"fldFilter" => "RecordRef",
		"fldFilterChecked" => "boolean",
		"fldFilterCompareType" => "CustomizationFilterCompareType",
		"fldFilterVal" => "string",
		"fldFilterNotNull" => "boolean",
		"fldfilterNull" => "boolean",
		"fldCompareField" => "RecordRef",
	);
}
