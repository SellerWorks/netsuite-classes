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
 * CustomRecordSearchRow.
 */
class CustomRecordSearchRow extends SearchRow
{
    /**
     * @var CustomRecordSearchRowBasic
     */
    public $basic;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $ownerJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CustomRecordSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'ownerJoin' => 'EmployeeSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
