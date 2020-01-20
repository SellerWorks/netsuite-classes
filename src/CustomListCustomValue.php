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
 * CustomListCustomValue
 */
class CustomListCustomValue {
	/**
	 * @access public
	 * @var string
	 */
	public $value;
	/**
	 * @access public
	 * @var string
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var integer
	 */
	public $valueId;
	/**
	 * @access public
	 * @var LanguageValueList
	 */
	public $valueLanguageValueList;

	static $paramtypesmap = array(
		"value" => "string",
		"abbreviation" => "string",
		"isInactive" => "boolean",
		"valueId" => "integer",
		"valueLanguageValueList" => "LanguageValueList",
	);
}
