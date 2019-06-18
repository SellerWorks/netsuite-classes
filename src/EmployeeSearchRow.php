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
 * EmployeeSearchRow.
 */
class EmployeeSearchRow extends SearchRow
{
    /**
     * @var EmployeeSearchRowBasic
     */
    public $basic;
    /**
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var ChargeSearchRowBasic
     */
    public $chargeJoin;
    /**
     * @var DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var HcmJobSearchRowBasic
     */
    public $hcmJobJoin;
    /**
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
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
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
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

    public static $paramtypesmap = [
        'basic' => 'EmployeeSearchRowBasic',
        'campaignResponseJoin' => 'CampaignSearchRowBasic',
        'chargeJoin' => 'ChargeSearchRowBasic',
        'departmentJoin' => 'DepartmentSearchRowBasic',
        'fileJoin' => 'FileSearchRowBasic',
        'hcmJobJoin' => 'HcmJobSearchRowBasic',
        'locationJoin' => 'LocationSearchRowBasic',
        'messagesJoin' => 'MessageSearchRowBasic',
        'messagesFromJoin' => 'MessageSearchRowBasic',
        'messagesToJoin' => 'MessageSearchRowBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchRowBasic',
        'subsidiaryJoin' => 'SubsidiarySearchRowBasic',
        'timeJoin' => 'TimeBillSearchRowBasic',
        'transactionJoin' => 'TransactionSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'userNotesJoin' => 'NoteSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
