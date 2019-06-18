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
 * FileSearchRow.
 */
class FileSearchRow extends SearchRow
{
    /**
     * @var FileSearchRowBasic
     */
    public $basic;
    /**
     * @var CustomerSearchRowBasic
     */
    public $shopperJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'FileSearchRowBasic',
        'shopperJoin' => 'CustomerSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
