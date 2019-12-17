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
 * SalesRoleSearch.
 */
class SalesRoleSearch extends SearchRecord
{
    /**
     * @var SalesRoleSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'SalesRoleSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}
