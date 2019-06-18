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
 * DiscountItem.
 */
class DiscountItem extends Record
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
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $nonPosting;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var bool
     */
    public $isPreTax;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var RecordRef
     */
    public $issueProduct;
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
    public $parent;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $availableToPartners;
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
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var RecordRef
     */
    public $expenseAccount;
    /**
     * @var RecordRef
     */
    public $incomeAccount;
    /**
     * @var RecordRef
     */
    public $revRecSchedule;
    /**
     * @var RecordRef
     */
    public $salesTaxCode;
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

    public static $paramtypesmap = array(
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'description' => 'string',
        'nonPosting' => 'boolean',
        'account' => 'RecordRef',
        'includeChildren' => 'boolean',
        'rate' => 'string',
        'isPreTax' => 'boolean',
        'customForm' => 'RecordRef',
        'itemId' => 'string',
        'issueProduct' => 'RecordRef',
        'upcCode' => 'string',
        'displayName' => 'string',
        'vendorName' => 'string',
        'parent' => 'RecordRef',
        'isInactive' => 'boolean',
        'availableToPartners' => 'boolean',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'subsidiaryList' => 'RecordRefList',
        'taxSchedule' => 'RecordRef',
        'deferredRevenueAccount' => 'RecordRef',
        'expenseAccount' => 'RecordRef',
        'incomeAccount' => 'RecordRef',
        'revRecSchedule' => 'RecordRef',
        'salesTaxCode' => 'RecordRef',
        'translationsList' => 'TranslationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
