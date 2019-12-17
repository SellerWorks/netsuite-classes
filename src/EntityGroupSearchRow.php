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
 * EntityGroupSearchRow.
 */
class EntityGroupSearchRow extends SearchRow
{
    /**
     * @var EntityGroupSearchRowBasic
     */
    public $basic;
    /**
     * @var EntitySearchRowBasic
     */
    public $groupMemberJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'EntityGroupSearchRowBasic',
        'groupMemberJoin' => 'EntitySearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
