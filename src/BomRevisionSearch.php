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
 * BomRevisionSearch.
 */
class BomRevisionSearch extends SearchRecord
{
    /**
     * @var BomRevisionSearchBasic
     */
    public $basic;
    /**
     * @var BomSearchBasic
     */
    public $billOfMaterialsJoin;
    /**
     * @var BomRevisionComponentSearchBasic
     */
    public $componentJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BomRevisionSearchBasic',
        'billOfMaterialsJoin' => 'BomSearchBasic',
        'componentJoin' => 'BomRevisionComponentSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
