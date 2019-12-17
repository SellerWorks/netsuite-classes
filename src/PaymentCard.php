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
 * PaymentCard.
 */
class PaymentCard extends Record
{
    /**
     * @var string
     */
    public $lastFourDigits;
    /**
     * @var string
     */
    public $issuerIdNumber;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $mask;
    /**
     * @var RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var PaymentInstrumentState
     */
    public $state;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $preserveOnFile;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var string
     */
    public $cardNumber;
    /**
     * @var dateTime
     */
    public $expirationDate;
    /**
     * @var PaymentCardBrand
     */
    public $cardBrand;
    /**
     * @var PaymentCardType
     */
    public $cardType;
    /**
     * @var string
     */
    public $nameOnCard;
    /**
     * @var string
     */
    public $street;
    /**
     * @var string
     */
    public $zipCode;
    /**
     * @var dateTime
     */
    public $validFromDate;
    /**
     * @var string
     */
    public $issueNumber;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'lastFourDigits' => 'string',
        'issuerIdNumber' => 'string',
        'entity' => 'RecordRef',
        'mask' => 'string',
        'paymentMethod' => 'RecordRef',
        'memo' => 'string',
        'state' => 'PaymentInstrumentState',
        'isInactive' => 'boolean',
        'preserveOnFile' => 'boolean',
        'isDefault' => 'boolean',
        'cardNumber' => 'string',
        'expirationDate' => 'dateTime',
        'cardBrand' => 'PaymentCardBrand',
        'cardType' => 'PaymentCardType',
        'nameOnCard' => 'string',
        'street' => 'string',
        'zipCode' => 'string',
        'validFromDate' => 'dateTime',
        'issueNumber' => 'string',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
