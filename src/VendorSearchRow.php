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
 * VendorSearchRow.
 */
class VendorSearchRow extends SearchRow
{
    /**
     * @var VendorSearchRowBasic
     */
    public $basic;
    /**
     * @var AccountSearchRowBasic
     */
    public $accountJoin;
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
     * @var AccountSearchRowBasic
     */
    public $expAccountJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var MseSubsidiarySearchRowBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesFromJoin;
    /**
     * @var MessageSearchRowBasic
     */
    public $messagesToJoin;
    /**
     * @var EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $timeApproverJoin;
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
        'basic' => 'VendorSearchRowBasic',
        'accountJoin' => 'AccountSearchRowBasic',
        'campaignResponseJoin' => 'CampaignSearchRowBasic',
        'contactJoin' => 'ContactSearchRowBasic',
        'contactPrimaryJoin' => 'ContactSearchRowBasic',
        'expAccountJoin' => 'AccountSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'mseSubsidiaryJoin' => 'MseSubsidiarySearchRowBasic',
        'messagesFromJoin' => 'MessageSearchRowBasic',
        'messagesToJoin' => 'MessageSearchRowBasic',
        'taxRegistrationJoin' => 'EntityTaxRegistrationSearchRowBasic',
        'timeApproverJoin' => 'EmployeeSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
