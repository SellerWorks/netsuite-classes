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
 * MerchandiseHierarchyNodeSearch.
 */
class MerchandiseHierarchyNodeSearch extends SearchRecord
{
    /**
     * @var MerchandiseHierarchyNodeSearchBasic
     */
    public $basic;
    /**
     * @var MerchandiseHierarchyNodeSearchBasic
     */
    public $parentNodeJoin;

    public static $paramtypesmap = [
        'basic' => 'MerchandiseHierarchyNodeSearchBasic',
        'parentNodeJoin' => 'MerchandiseHierarchyNodeSearchBasic',
    ];
}
