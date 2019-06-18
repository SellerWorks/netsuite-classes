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
 * MessageSearch.
 */
class MessageSearch extends SearchRecord
{
    /**
     * @var MessageSearchBasic
     */
    public $basic;
    /**
     * @var FileSearchBasic
     */
    public $attachmentsJoin;
    /**
     * @var EntitySearchBasic
     */
    public $authorJoin;
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
     * @var EntitySearchBasic
     */
    public $recipientJoin;
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

    public static $paramtypesmap = array(
        'basic' => 'MessageSearchBasic',
        'attachmentsJoin' => 'FileSearchBasic',
        'authorJoin' => 'EntitySearchBasic',
        'campaignJoin' => 'CampaignSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'contactJoin' => 'ContactSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'entityJoin' => 'EntitySearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'recipientJoin' => 'EntitySearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
    );
}
