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
 * PaymentCardToken
 */
class PaymentCardToken extends Record {
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
	public $token;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tokenExpirationDate;
	/**
	 * @access public
	 * @var TokenFamily
	 */
	public $tokenFamily;
	/**
	 * @access public
	 * @var string
	 */
	public $tokenNamespace;
	/**
	 * @access public
	 * @var string
	 */
	public $cardIssuerIdNumber;
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
	public $cardNameOnCard;
	/**
	 * @access public
	 * @var string
	 */
	public $cardLastFourDigits;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $cardExpirationDate;
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
		"entity" => "RecordRef",
		"mask" => "string",
		"paymentMethod" => "RecordRef",
		"memo" => "string",
		"state" => "PaymentInstrumentState",
		"isInactive" => "boolean",
		"preserveOnFile" => "boolean",
		"isDefault" => "boolean",
		"token" => "string",
		"tokenExpirationDate" => "dateTime",
		"tokenFamily" => "TokenFamily",
		"tokenNamespace" => "string",
		"cardIssuerIdNumber" => "string",
		"cardBrand" => "PaymentCardBrand",
		"cardType" => "PaymentCardType",
		"cardNameOnCard" => "string",
		"cardLastFourDigits" => "string",
		"cardExpirationDate" => "dateTime",
		"internalId" => "string",
		"externalId" => "string",
	);
}
