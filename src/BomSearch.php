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
 * BomSearch.
 */
class BomSearch extends SearchRecord
{
    /**
     * @var BomSearchBasic
     */
    public $basic;
    /**
     * @var AssemblyItemBomSearchBasic
     */
    public $assemblyItemJoin;
    /**
     * @var BomRevisionSearchBasic
     */
    public $revisionJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BomSearchBasic',
        'assemblyItemJoin' => 'AssemblyItemBomSearchBasic',
        'revisionJoin' => 'BomRevisionSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
