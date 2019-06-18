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
 * PaymentCardToken.
 */
class PaymentCardToken extends Record
{
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
    public $token;
    /**
     * @var dateTime
     */
    public $tokenExpirationDate;
    /**
     * @var TokenFamily
     */
    public $tokenFamily;
    /**
     * @var string
     */
    public $tokenNamespace;
    /**
     * @var string
     */
    public $cardIssuerIdNumber;
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
    public $cardNameOnCard;
    /**
     * @var string
     */
    public $cardLastFourDigits;
    /**
     * @var dateTime
     */
    public $cardExpirationDate;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'entity' => 'RecordRef',
        'mask' => 'string',
        'paymentMethod' => 'RecordRef',
        'memo' => 'string',
        'state' => 'PaymentInstrumentState',
        'isInactive' => 'boolean',
        'preserveOnFile' => 'boolean',
        'isDefault' => 'boolean',
        'token' => 'string',
        'tokenExpirationDate' => 'dateTime',
        'tokenFamily' => 'TokenFamily',
        'tokenNamespace' => 'string',
        'cardIssuerIdNumber' => 'string',
        'cardBrand' => 'PaymentCardBrand',
        'cardType' => 'PaymentCardType',
        'cardNameOnCard' => 'string',
        'cardLastFourDigits' => 'string',
        'cardExpirationDate' => 'dateTime',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
