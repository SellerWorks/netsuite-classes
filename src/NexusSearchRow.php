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
 * NexusSearchRow.
 */
class NexusSearchRow extends SearchRow
{
    /**
     * @var NexusSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'NexusSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    ];
}
