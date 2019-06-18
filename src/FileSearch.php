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
 * FileSearch.
 */
class FileSearch extends SearchRecord
{
    /**
     * @var FileSearchBasic
     */
    public $basic;
    /**
     * @var CustomerSearchBasic
     */
    public $shopperJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'FileSearchBasic',
        'shopperJoin' => 'CustomerSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    );
}
