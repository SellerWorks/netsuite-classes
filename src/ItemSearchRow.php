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
 * ItemSearchRow.
 */
class ItemSearchRow extends SearchRow
{
    /**
     * @var ItemSearchRowBasic
     */
    public $basic;
    /**
     * @var RevRecTemplateSearchRowBasic
     */
    public $accountingBookRevRecScheduleJoin;
    /**
     * @var AssemblyItemBomSearchRowBasic
     */
    public $assemblyItemBillOfMaterialsJoin;
    /**
     * @var BinSearchRowBasic
     */
    public $binNumberJoin;
    /**
     * @var ItemBinNumberSearchRowBasic
     */
    public $binOnHandJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $correlatedItemJoin;
    /**
     * @var ItemRevisionSearchRowBasic
     */
    public $effectiveRevisionJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var InventoryDetailSearchRowBasic
     */
    public $inventoryDetailJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $inventoryLocationJoin;
    /**
     * @var InventoryNumberSearchRowBasic
     */
    public $inventoryNumberJoin;
    /**
     * @var InventoryNumberBinSearchRowBasic
     */
    public $inventoryNumberBinOnHandJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $memberItemJoin;
    /**
     * @var ItemRevisionSearchRowBasic
     */
    public $obsoleteRevisionJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $parentJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $preferredLocationJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $preferredVendorJoin;
    /**
     * @var PricingSearchRowBasic
     */
    public $pricingJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $shopperJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ItemSearchRowBasic',
        'accountingBookRevRecScheduleJoin' => 'RevRecTemplateSearchRowBasic',
        'assemblyItemBillOfMaterialsJoin' => 'AssemblyItemBomSearchRowBasic',
        'binNumberJoin' => 'BinSearchRowBasic',
        'binOnHandJoin' => 'ItemBinNumberSearchRowBasic',
        'correlatedItemJoin' => 'ItemSearchRowBasic',
        'effectiveRevisionJoin' => 'ItemRevisionSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'inventoryDetailJoin' => 'InventoryDetailSearchRowBasic',
        'inventoryLocationJoin' => 'LocationSearchRowBasic',
        'inventoryNumberJoin' => 'InventoryNumberSearchRowBasic',
        'inventoryNumberBinOnHandJoin' => 'InventoryNumberBinSearchRowBasic',
        'memberItemJoin' => 'ItemSearchRowBasic',
        'obsoleteRevisionJoin' => 'ItemRevisionSearchRowBasic',
        'parentJoin' => 'ItemSearchRowBasic',
        'preferredLocationJoin' => 'LocationSearchRowBasic',
        'preferredVendorJoin' => 'VendorSearchRowBasic',
        'pricingJoin' => 'PricingSearchRowBasic',
        'shopperJoin' => 'CustomerSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
