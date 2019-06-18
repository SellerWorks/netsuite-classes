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
 * UnitsTypeSearch.
 */
class UnitsTypeSearch extends SearchRecord
{
    /**
     * @var UnitsTypeSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'UnitsTypeSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    );
}
