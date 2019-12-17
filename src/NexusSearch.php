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
 * NexusSearch.
 */
class NexusSearch extends SearchRecord
{
    /**
     * @var NexusSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'NexusSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}
