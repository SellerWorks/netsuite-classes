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
 * ContactSearchRow.
 */
class ContactSearchRow extends SearchRow
{
    /**
     * @var ContactSearchRowBasic
     */
    public $basic;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerPrimaryJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $jobPrimaryJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesToJoin;
    /**
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $parentCustomerJoin;
    /**
     * @var JobSearchRowBasic
     */
    public $parentJobJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $parentPartnerJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $parentVendorJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerPrimaryJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $purchasedItemJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $upsellItemJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var VendorSearchRowBasic
     */
    public $vendorPrimaryJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ContactSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'campaignResponseJoin' => 'CampaignSearchRowBasic',
        'caseJoin' => 'SupportCaseSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'customerPrimaryJoin' => 'CustomerSearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'jobPrimaryJoin' => 'JobSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'messagesFromJoin' => 'MessageSearchRowBasic',
        'messagesToJoin' => 'MessageSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'parentCustomerJoin' => 'CustomerSearchRowBasic',
        'parentJobJoin' => 'JobSearchRowBasic',
        'parentPartnerJoin' => 'PartnerSearchRowBasic',
        'parentVendorJoin' => 'VendorSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'partnerPrimaryJoin' => 'PartnerSearchRowBasic',
        'purchasedItemJoin' => 'ItemSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'upsellItemJoin' => 'ItemSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'vendorJoin' => 'VendorSearchRowBasic',
        'vendorPrimaryJoin' => 'VendorSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
