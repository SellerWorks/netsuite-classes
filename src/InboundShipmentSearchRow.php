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
 * InboundShipmentSearchRow.
 */
class InboundShipmentSearchRow extends SearchRow
{
    /**
     * @var InboundShipmentSearchRowBasic
     */
    public $basic;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $itemReceiptJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'InboundShipmentSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'itemReceiptJoin' => 'TransactionSearchRowBasic',
        'purchaseOrderJoin' => 'TransactionSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
