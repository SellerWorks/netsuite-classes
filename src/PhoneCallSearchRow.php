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
 * PhoneCallSearchRow.
 */
class PhoneCallSearchRow extends SearchRow
{
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $companyCustomerJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var EntitySearchRowBasic
     */
    public $participantJoin;
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
        'basic' => 'PhoneCallSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'companyCustomerJoin' => 'CustomerSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'participantJoin' => 'EntitySearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
