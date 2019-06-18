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
 * ItemRevisionSearchRow.
 */
class ItemRevisionSearchRow extends SearchRow
{
    /**
     * @var ItemRevisionSearchRowBasic
     */
    public $basic;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'ItemRevisionSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
