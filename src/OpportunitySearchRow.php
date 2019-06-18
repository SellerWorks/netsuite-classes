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
 * OpportunitySearchRow.
 */
class OpportunitySearchRow extends SearchRow
{
    /**
     * @var OpportunitySearchRowBasic
     */
    public $basic;
    /**
     * @var TransactionSearchRowBasic
     */
    public $actualJoin;
    /**
     * @var PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $decisionMakerJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $estimateJoin;
    /**
     * @var CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var CampaignSearchRowBasic
     */
    public $leadSourceJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $orderJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @var TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'OpportunitySearchRowBasic',
        'actualJoin' => 'TransactionSearchRowBasic',
        'callJoin' => 'PhoneCallSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'decisionMakerJoin' => 'ContactSearchRowBasic',
        'estimateJoin' => 'TransactionSearchRowBasic',
        'eventJoin' => 'CalendarEventSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'itemJoin' => 'ItemSearchRowBasic',
        'leadSourceJoin' => 'CampaignSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'orderJoin' => 'TransactionSearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'partnerJoin' => 'PartnerSearchRowBasic',
        'salesRepJoin' => 'EmployeeSearchRowBasic',
        'taskJoin' => 'TaskSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
