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
 * CustomerMessageSearchRow.
 */
class CustomerMessageSearchRow extends SearchRow
{
    /**
     * @var CustomerMessageSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'CustomerMessageSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
