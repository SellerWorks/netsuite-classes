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
 * InboundShipmentSearch.
 */
class InboundShipmentSearch extends SearchRecord
{
    /**
     * @var InboundShipmentSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $itemReceiptJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $purchaseOrderJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'InboundShipmentSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'itemReceiptJoin' => 'TransactionSearchBasic',
        'purchaseOrderJoin' => 'TransactionSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
