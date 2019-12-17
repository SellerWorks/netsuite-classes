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
 * CustomRecordSearch.
 */
class CustomRecordSearch extends SearchRecord
{
    /**
     * @var CustomRecordSearchBasic
     */
    public $basic;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $ownerJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'CustomRecordSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'ownerJoin' => 'EmployeeSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
