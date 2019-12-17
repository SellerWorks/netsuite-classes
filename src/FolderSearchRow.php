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
 * FolderSearchRow.
 */
class FolderSearchRow extends SearchRow
{
    /**
     * @var FolderSearchRowBasic
     */
    public $basic;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'FolderSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    ];
}
