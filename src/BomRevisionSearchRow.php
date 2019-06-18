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
 * BomRevisionSearchRow.
 */
class BomRevisionSearchRow extends SearchRow
{
    /**
     * @var BomRevisionSearchRowBasic
     */
    public $basic;
    /**
     * @var BomSearchRowBasic
     */
    public $billOfMaterialsJoin;
    /**
     * @var BomRevisionComponentSearchRowBasic
     */
    public $componentJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BomRevisionSearchRowBasic',
        'billOfMaterialsJoin' => 'BomSearchRowBasic',
        'componentJoin' => 'BomRevisionComponentSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
