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
 * SupportCaseSearch.
 */
class SupportCaseSearch extends SearchRecord
{
    /**
     * @var SupportCaseSearchBasic
     */
    public $basic;
    /**
     * @var EntitySearchBasic
     */
    public $companyJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var IssueSearchBasic
     */
    public $issueJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
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
        'basic' => 'SupportCaseSearchBasic',
        'companyJoin' => 'EntitySearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'issueJoin' => 'IssueSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
