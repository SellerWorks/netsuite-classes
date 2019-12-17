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
 * PhoneCallSearch.
 */
class PhoneCallSearch extends SearchRecord
{
    /**
     * @var PhoneCallSearchBasic
     */
    public $basic;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $companyCustomerJoin;
    /**
     * @var ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var EntitySearchBasic
     */
    public $participantJoin;
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
        'basic' => 'PhoneCallSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'companyCustomerJoin' => 'CustomerSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'participantJoin' => 'EntitySearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
