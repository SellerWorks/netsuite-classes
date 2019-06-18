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
 * SupportCaseSearchRow.
 */
class SupportCaseSearchRow extends SearchRow
{
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $basic;
    /**
     * @var EntitySearchRowBasic
     */
    public $companyJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var IssueSearchRowBasic
     */
    public $issueJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
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

    public static $paramtypesmap = array(
        'basic' => 'SupportCaseSearchRowBasic',
        'companyJoin' => 'EntitySearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'issueJoin' => 'IssueSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
