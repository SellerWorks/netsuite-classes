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
 * CampaignSearchRow.
 */
class CampaignSearchRow extends SearchRow
{
    /**
     * @var CampaignSearchRowBasic
     */
    public $basic;
    /**
     * @var EntitySearchRowBasic
     */
    public $campaignRecipientJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var PromotionCodeSearchRowBasic
     */
    public $promotionCodeJoin;
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
        'basic' => 'CampaignSearchRowBasic',
        'campaignRecipientJoin' => 'EntitySearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'originatingLeadJoin' => 'OriginatingLeadSearchRowBasic',
        'promotionCodeJoin' => 'PromotionCodeSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
