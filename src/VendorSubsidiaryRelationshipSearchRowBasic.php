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
 * VendorSubsidiaryRelationshipSearchRowBasic.
 */
class VendorSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $balancebase;
    /**
     * @var SearchColumnSelectField[]
     */
    public $baseCurrency;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $creditlimit;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $inTransitBalance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $inTransitBalanceBase;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isprimarysub;
    /**
     * @var SearchColumnSelectField[]
     */
    public $primaryCurrency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxitem;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unbilledorders;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unbilledordersbase;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'balance' => 'SearchColumnDoubleField[]',
        'balancebase' => 'SearchColumnDoubleField[]',
        'baseCurrency' => 'SearchColumnSelectField[]',
        'creditlimit' => 'SearchColumnDoubleField[]',
        'entity' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'inTransitBalance' => 'SearchColumnDoubleField[]',
        'inTransitBalanceBase' => 'SearchColumnDoubleField[]',
        'isprimarysub' => 'SearchColumnBooleanField[]',
        'primaryCurrency' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'taxitem' => 'SearchColumnSelectField[]',
        'unbilledorders' => 'SearchColumnDoubleField[]',
        'unbilledordersbase' => 'SearchColumnDoubleField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
