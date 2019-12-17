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
 * PaymentCard
 */
class PaymentCard extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $lastFourDigits;
	/**
	 * @access public
	 * @var string
	 */
	public $issuerIdNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var string
	 */
	public $mask;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var PaymentInstrumentState
	 */
	public $state;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preserveOnFile;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var string
	 */
	public $cardNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var PaymentCardBrand
	 */
	public $cardBrand;
	/**
	 * @access public
	 * @var PaymentCardType
	 */
	public $cardType;
	/**
	 * @access public
	 * @var string
	 */
	public $nameOnCard;
	/**
	 * @access public
	 * @var string
	 */
	public $street;
	/**
	 * @access public
	 * @var string
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $validFromDate;
	/**
	 * @access public
	 * @var string
	 */
	public $issueNumber;
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
		"lastFourDigits" => "string",
		"issuerIdNumber" => "string",
		"entity" => "RecordRef",
		"mask" => "string",
		"paymentMethod" => "RecordRef",
		"memo" => "string",
		"state" => "PaymentInstrumentState",
		"isInactive" => "boolean",
		"preserveOnFile" => "boolean",
		"isDefault" => "boolean",
		"cardNumber" => "string",
		"expirationDate" => "dateTime",
		"cardBrand" => "PaymentCardBrand",
		"cardType" => "PaymentCardType",
		"nameOnCard" => "string",
		"street" => "string",
		"zipCode" => "string",
		"validFromDate" => "dateTime",
		"issueNumber" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}
