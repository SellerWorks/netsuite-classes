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
 * BomSearchRow.
 */
class BomSearchRow extends SearchRow
{
    /**
     * @var BomSearchRowBasic
     */
    public $basic;
    /**
     * @var AssemblyItemBomSearchRowBasic
     */
    public $assemblyItemJoin;
    /**
     * @var BomRevisionSearchRowBasic
     */
    public $revisionJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BomSearchRowBasic',
        'assemblyItemJoin' => 'AssemblyItemBomSearchRowBasic',
        'revisionJoin' => 'BomRevisionSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
