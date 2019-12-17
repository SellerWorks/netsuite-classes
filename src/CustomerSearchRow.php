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
 * CustomerSearchRow
 */
class CustomerSearchRow extends SearchRow
{
    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    public $basic;
    /**
     * @access public
     * @var BillingAccountSearchRowBasic
     */
    public $billingAccountJoin;
    /**
     * @access public
     * @var BillingScheduleSearchRowBasic
     */
    public $billingScheduleJoin;
    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @access public
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @access public
     * @var FileSearchRowBasic
     */
    public $hostedPageJoin;
    /**
     * @access public
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    public $leadSourceJoin;
    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesFromJoin;
    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    public $messagesToJoin;
    /**
     * @access public
     * @var MseSubsidiarySearchRowBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @access public
     * @var OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @access public
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    public $parentCustomerJoin;
    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @access public
     * @var PricingSearchRowBasic
     */
    public $pricingJoin;
    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    public $purchasedItemJoin;
    /**
     * @access public
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    public $subCustomerJoin;
    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @access public
     * @var EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    public $topLevelParentJoin;
    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    public $upsellItemJoin;
    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @access public
     * @var SiteCategorySearchRowBasic
     */
    public $webSiteCategoryJoin;
    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    public $webSiteItemJoin;
    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        "basic" => "CustomerSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hostedPageJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "parentCustomerJoin" => "CustomerSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "pricingJoin" => "PricingSearchRowBasic",
        "purchasedItemJoin" => "ItemSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "salesRepJoin" => "EmployeeSearchRowBasic",
        "subCustomerJoin" => "CustomerSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "topLevelParentJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "upsellItemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "webSiteCategoryJoin" => "SiteCategorySearchRowBasic",
        "webSiteItemJoin" => "ItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
