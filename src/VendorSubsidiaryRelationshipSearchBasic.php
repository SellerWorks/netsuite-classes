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
 * VendorSubsidiaryRelationshipSearchBasic.
 */
class VendorSubsidiaryRelationshipSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $balance;
    /**
     * @var SearchDoubleField
     */
    public $balanceBase;
    /**
     * @var SearchMultiSelectField
     */
    public $baseCurrency;
    /**
     * @var SearchDoubleField
     */
    public $creditLimit;
    /**
     * @var SearchMultiSelectField
     */
    public $entity;
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
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchDoubleField
     */
    public $inTransitBalance;
    /**
     * @var SearchDoubleField
     */
    public $inTransitBalanceBase;
    /**
     * @var SearchBooleanField
     */
    public $isPrimarySub;
    /**
     * @var SearchMultiSelectField
     */
    public $primaryCurrency;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $taxItem;
    /**
     * @var SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var SearchDoubleField
     */
    public $unbilledOrdersBase;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'balance' => 'SearchDoubleField',
        'balanceBase' => 'SearchDoubleField',
        'baseCurrency' => 'SearchMultiSelectField',
        'creditLimit' => 'SearchDoubleField',
        'entity' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'inTransitBalance' => 'SearchDoubleField',
        'inTransitBalanceBase' => 'SearchDoubleField',
        'isPrimarySub' => 'SearchBooleanField',
        'primaryCurrency' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'taxItem' => 'SearchMultiSelectField',
        'unbilledOrders' => 'SearchDoubleField',
        'unbilledOrdersBase' => 'SearchDoubleField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
