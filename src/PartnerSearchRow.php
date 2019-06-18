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
 * PartnerSearchRow.
 */
class PartnerSearchRow extends SearchRow
{
    /**
     * @var PartnerSearchRowBasic
     */
    public $basic;
    /**
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
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
     * @var EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
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
        'basic' => 'PartnerSearchRowBasic',
        'campaignResponseJoin' => 'CampaignSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'contactPrimaryJoin' => 'ContactSearchRowBasic',
        'customerJoin' => 'CustomerSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'messagesFromJoin' => 'MessageSearchRowBasic',
        'messagesToJoin' => 'MessageSearchRowBasic',
        'opportunityJoin' => 'OpportunitySearchRowBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
