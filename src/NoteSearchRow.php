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
 * NoteSearchRow.
 */
class NoteSearchRow extends SearchRow
{
    /**
     * @var NoteSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $authorJoin;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $campaignJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
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
     * @var EntitySearchRowBasic
     */
    public $entityJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var IssueSearchRowBasic
     */
    public $issueJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var SolutionSearchRowBasic
     */
    public $solutionJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'NoteSearchRowBasic',
        'authorJoin' => 'EmployeeSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'campaignJoin' => 'CampaignSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'entityJoin' => 'EntitySearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'issueJoin' => 'IssueSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'solutionJoin' => 'SolutionSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
