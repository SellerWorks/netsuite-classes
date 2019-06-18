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
 * ItemRevisionSearch.
 */
class ItemRevisionSearch extends SearchRecord
{
    /**
     * @var ItemRevisionSearchBasic
     */
    public $basic;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'ItemRevisionSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}