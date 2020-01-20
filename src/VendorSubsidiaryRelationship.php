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
 * VendorSubsidiaryRelationship
 */
class VendorSubsidiaryRelationship extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimarySub;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $primaryCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"creditLimit" => "float",
		"entity" => "RecordRef",
		"isPrimarySub" => "boolean",
		"primaryCurrency" => "RecordRef",
		"subsidiary" => "RecordRef",
		"taxItem" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
