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
 * UnitsTypeSearchRowBasic
 */
class UnitsTypeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $baseUnit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInActive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $unitName;

	static $paramtypesmap = array(
		"abbreviation" => "SearchColumnStringField[]",
		"baseUnit" => "SearchColumnBooleanField[]",
		"conversionRate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInActive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"pluralAbbreviation" => "SearchColumnStringField[]",
		"pluralName" => "SearchColumnStringField[]",
		"unitName" => "SearchColumnStringField[]",
	);
}
