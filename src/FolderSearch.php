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
 * FolderSearch.
 */
class FolderSearch extends SearchRecord
{
    /**
     * @var FolderSearchBasic
     */
    public $basic;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'FolderSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}
