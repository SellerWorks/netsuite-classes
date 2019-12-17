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
 * PromotionCodeSearchBasic.
 */
class PromotionCodeSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchEnumMultiSelectField
     */
    public $applyDiscountTo;
    /**
     * @var SearchStringField
     */
    public $code;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $discount;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $freeShipItem;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isPublic;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $partner;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'applyDiscountTo' => 'SearchEnumMultiSelectField',
        'code' => 'SearchStringField',
        'description' => 'SearchStringField',
        'discount' => 'SearchMultiSelectField',
        'endDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'freeShipItem' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isPublic' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'partner' => 'SearchMultiSelectField',
        'startDate' => 'SearchDateField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
