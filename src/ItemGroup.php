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
 * ItemGroup.
 */
class ItemGroup extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var bool
     */
    public $includeStartEndLines;
    /**
     * @var bool
     */
    public $isVsoeBundle;
    /**
     * @var RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var bool
     */
    public $availableToPartners;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $upcCode;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var RecordRef
     */
    public $issueProduct;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var ShippingCarrier
     */
    public $itemCarrier;
    /**
     * @var RecordRefList
     */
    public $itemShipMethodList;
    /**
     * @var bool
     */
    public $printItems;
    /**
     * @var ItemMemberList
     */
    public $memberList;
    /**
     * @var TranslationList
     */
    public $translationsList;
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

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'includeStartEndLines' => 'boolean',
        'isVsoeBundle' => 'boolean',
        'defaultItemShipMethod' => 'RecordRef',
        'availableToPartners' => 'boolean',
        'isInactive' => 'boolean',
        'itemId' => 'string',
        'upcCode' => 'string',
        'displayName' => 'string',
        'vendorName' => 'string',
        'issueProduct' => 'RecordRef',
        'parent' => 'RecordRef',
        'description' => 'string',
        'subsidiaryList' => 'RecordRefList',
        'includeChildren' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'itemCarrier' => 'ShippingCarrier',
        'itemShipMethodList' => 'RecordRefList',
        'printItems' => 'boolean',
        'memberList' => 'ItemMemberList',
        'translationsList' => 'TranslationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
