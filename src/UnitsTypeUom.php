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
 * UnitsTypeUom
 */
class UnitsTypeUom {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $unitName;
	/**
	 * @access public
	 * @var string
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var string
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var string
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var float
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $baseUnit;

	static $paramtypesmap = array(
		"internalId" => "string",
		"unitName" => "string",
		"pluralName" => "string",
		"abbreviation" => "string",
		"pluralAbbreviation" => "string",
		"conversionRate" => "float",
		"baseUnit" => "boolean",
	);
}
