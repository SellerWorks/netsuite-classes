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
 * PromotionCode.
 */
class PromotionCode extends Record
{
    /**
     * @var RecordRef
     */
    public $implementation;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var PromotionCodeUseType
     */
    public $useType;
    /**
     * @var bool
     */
    public $displayLineDiscounts;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $codePattern;
    /**
     * @var int
     */
    public $numberToGenerate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRefList
     */
    public $locationList;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var RecordRef
     */
    public $discount;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var bool
     */
    public $discountType;
    /**
     * @var PromotionCodeApplyDiscountTo
     */
    public $applyDiscountTo;
    /**
     * @var RecordRef
     */
    public $freeShipMethod;
    /**
     * @var float
     */
    public $minimumOrderAmount;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var bool
     */
    public $isPublic;
    /**
     * @var PromotionCodeCurrencyList
     */
    public $currencyList;
    /**
     * @var bool
     */
    public $excludeItems;
    /**
     * @var string
     */
    public $name;
    /**
     * @var PromotionCodeItemsList
     */
    public $itemsList;
    /**
     * @var PromotionCodePartnersList
     */
    public $partnersList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'implementation' => 'RecordRef',
        'customForm' => 'RecordRef',
        'useType' => 'PromotionCodeUseType',
        'displayLineDiscounts' => 'boolean',
        'code' => 'string',
        'codePattern' => 'string',
        'numberToGenerate' => 'integer',
        'description' => 'string',
        'locationList' => 'RecordRefList',
        'isInactive' => 'boolean',
        'discount' => 'RecordRef',
        'rate' => 'string',
        'discountType' => 'boolean',
        'applyDiscountTo' => 'PromotionCodeApplyDiscountTo',
        'freeShipMethod' => 'RecordRef',
        'minimumOrderAmount' => 'float',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'isPublic' => 'boolean',
        'currencyList' => 'PromotionCodeCurrencyList',
        'excludeItems' => 'boolean',
        'name' => 'string',
        'itemsList' => 'PromotionCodeItemsList',
        'partnersList' => 'PromotionCodePartnersList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
