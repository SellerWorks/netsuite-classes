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
 * ItemSearch.
 */
class ItemSearch extends SearchRecord
{
    /**
     * @var ItemSearchBasic
     */
    public $basic;
    /**
     * @var RevRecTemplateSearchBasic
     */
    public $accountingBookRevRecScheduleJoin;
    /**
     * @var AssemblyItemBomSearchBasic
     */
    public $assemblyItemBillOfMaterialsJoin;
    /**
     * @var BinSearchBasic
     */
    public $binNumberJoin;
    /**
     * @var ItemBinNumberSearchBasic
     */
    public $binOnHandJoin;
    /**
     * @var ItemSearchBasic
     */
    public $correlatedItemJoin;
    /**
     * @var ItemRevisionSearchBasic
     */
    public $effectiveRevisionJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var InventoryDetailSearchBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var LocationSearchBasic
     */
    public $inventoryLocationJoin;
    /**
     * @var InventoryNumberSearchBasic
     */
    public $inventoryNumberJoin;
    /**
     * @var InventoryNumberBinSearchBasic
     */
    public $inventoryNumberBinOnHandJoin;
    /**
     * @var ItemSearchBasic
     */
    public $memberItemJoin;
    /**
     * @var ItemRevisionSearchBasic
     */
    public $obsoleteRevisionJoin;
    /**
     * @var ItemSearchBasic
     */
    public $parentJoin;
    /**
     * @var LocationSearchBasic
     */
    public $preferredLocationJoin;
    /**
     * @var VendorSearchBasic
     */
    public $preferredVendorJoin;
    /**
     * @var PricingSearchBasic
     */
    public $pricingJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $shopperJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ItemSearchBasic',
        'accountingBookRevRecScheduleJoin' => 'RevRecTemplateSearchBasic',
        'assemblyItemBillOfMaterialsJoin' => 'AssemblyItemBomSearchBasic',
        'binNumberJoin' => 'BinSearchBasic',
        'binOnHandJoin' => 'ItemBinNumberSearchBasic',
        'correlatedItemJoin' => 'ItemSearchBasic',
        'effectiveRevisionJoin' => 'ItemRevisionSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'inventoryDetailJoin' => 'InventoryDetailSearchBasic',
        'inventoryLocationJoin' => 'LocationSearchBasic',
        'inventoryNumberJoin' => 'InventoryNumberSearchBasic',
        'inventoryNumberBinOnHandJoin' => 'InventoryNumberBinSearchBasic',
        'memberItemJoin' => 'ItemSearchBasic',
        'obsoleteRevisionJoin' => 'ItemRevisionSearchBasic',
        'parentJoin' => 'ItemSearchBasic',
        'preferredLocationJoin' => 'LocationSearchBasic',
        'preferredVendorJoin' => 'VendorSearchBasic',
        'pricingJoin' => 'PricingSearchBasic',
        'shopperJoin' => 'CustomerSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
