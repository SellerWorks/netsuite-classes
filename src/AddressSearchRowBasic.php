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
 * AddressSearchRowBasic
 */
class AddressSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
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
	public $countryCode;
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
	public $override;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"override" => "SearchColumnBooleanField[]",
		"phone" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
