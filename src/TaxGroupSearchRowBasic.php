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
 * TaxGroupSearchRowBasic
 */
class TaxGroupSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeChildren;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $piggyBack;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $stateDisplayName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiaryNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxItem1;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxItem2;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPrice1;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPrice2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;

	static $paramtypesmap = array(
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"county" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"includeChildren" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefault" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"itemId" => "SearchColumnStringField[]",
		"piggyBack" => "SearchColumnBooleanField[]",
		"rate" => "SearchColumnDoubleField[]",
		"state" => "SearchColumnSelectField[]",
		"stateDisplayName" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
		"taxItem1" => "SearchColumnSelectField[]",
		"taxItem2" => "SearchColumnSelectField[]",
		"taxType" => "SearchColumnSelectField[]",
		"unitPrice1" => "SearchColumnDoubleField[]",
		"unitPrice2" => "SearchColumnDoubleField[]",
		"zip" => "SearchColumnStringField[]",
	);
}
