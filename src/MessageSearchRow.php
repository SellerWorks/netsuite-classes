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
 * MessageSearchRow.
 */
class MessageSearchRow extends SearchRow
{
    /**
     * @var MessageSearchRowBasic
     */
    public $basic;
    /**
     * @var FileSearchRowBasic
     */
    public $attachmentsJoin;
    /**
     * @var EntitySearchRowBasic
     */
    public $authorJoin;
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
     * @var EntitySearchRowBasic
     */
    public $recipientJoin;
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

    public static $paramtypesmap = [
        'basic' => 'MessageSearchRowBasic',
        'attachmentsJoin' => 'FileSearchRowBasic',
        'authorJoin' => 'EntitySearchRowBasic',
        'campaignJoin' => 'CampaignSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'employeeJoin' => 'EmployeeSearchRowBasic',
        'entityJoin' => 'EntitySearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'recipientJoin' => 'EntitySearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
    ];
}
