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
 * EntityGroupSearch.
 */
class EntityGroupSearch extends SearchRecord
{
    /**
     * @var EntityGroupSearchBasic
     */
    public $basic;
    /**
     * @var EntitySearchBasic
     */
    public $groupMemberJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'EntityGroupSearchBasic',
        'groupMemberJoin' => 'EntitySearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
