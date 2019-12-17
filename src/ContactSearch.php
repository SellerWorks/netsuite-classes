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
 * ContactSearch.
 */
class ContactSearch extends SearchRecord
{
    /**
     * @var ContactSearchBasic
     */
    public $basic;
    /**
     * @var PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $customerPrimaryJoin;
    /**
     * @var CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var JobSearchBasic
     */
    public $jobPrimaryJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchBasic
     */
    public $messagesToJoin;
    /**
     * @var OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var CustomerSearchBasic
     */
    public $parentCustomerJoin;
    /**
     * @var JobSearchBasic
     */
    public $parentJobJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $parentPartnerJoin;
    /**
     * @var VendorSearchBasic
     */
    public $parentVendorJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var PartnerSearchBasic
     */
    public $partnerPrimaryJoin;
    /**
     * @var ItemSearchBasic
     */
    public $purchasedItemJoin;
    /**
     * @var TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var ItemSearchBasic
     */
    public $upsellItemJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var VendorSearchBasic
     */
    public $vendorPrimaryJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ContactSearchBasic',
        'callJoin' => 'PhoneCallSearchBasic',
        'campaignResponseJoin' => 'CampaignSearchBasic',
        'caseJoin' => 'SupportCaseSearchBasic',
        'customerJoin' => 'CustomerSearchBasic',
        'customerPrimaryJoin' => 'CustomerSearchBasic',
        'eventJoin' => 'CalendarEventSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'jobPrimaryJoin' => 'JobSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'messagesFromJoin' => 'MessageSearchBasic',
        'messagesToJoin' => 'MessageSearchBasic',
        'opportunityJoin' => 'OpportunitySearchBasic',
        'parentCustomerJoin' => 'CustomerSearchBasic',
        'parentJobJoin' => 'JobSearchBasic',
        'parentPartnerJoin' => 'PartnerSearchBasic',
        'parentVendorJoin' => 'VendorSearchBasic',
        'partnerJoin' => 'PartnerSearchBasic',
        'partnerPrimaryJoin' => 'PartnerSearchBasic',
        'purchasedItemJoin' => 'ItemSearchBasic',
        'taskJoin' => 'TaskSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'upsellItemJoin' => 'ItemSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'vendorJoin' => 'VendorSearchBasic',
        'vendorPrimaryJoin' => 'VendorSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
