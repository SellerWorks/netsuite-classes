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
 * NoteSearch.
 */
class NoteSearch extends SearchRecord
{
    /**
     * @var NoteSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $authorJoin;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $campaignJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
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
     * @var EntitySearchBasic
     */
    public $entityJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var IssueSearchBasic
     */
    public $issueJoin;
    /**
     * @var ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var SolutionSearchBasic
     */
    public $solutionJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'NoteSearchBasic',
        'authorJoin' => 'EmployeeSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'campaignJoin' => 'CampaignSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'entityJoin' => 'EntitySearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'issueJoin' => 'IssueSearchBasic',
        'itemJoin' => 'ItemSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'solutionJoin' => 'SolutionSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
