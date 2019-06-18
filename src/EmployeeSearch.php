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
 * EmployeeSearch.
 */
class EmployeeSearch extends SearchRecord
{
    /**
     * @var EmployeeSearchBasic
     */
    public $basic;
    /**
     * @var CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var ChargeSearchBasic
     */
    public $chargeJoin;
    /**
     * @var DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var HcmJobSearchBasic
     */
    public $hcmJobJoin;
    /**
     * @var LocationSearchBasic
     */
    public $locationJoin;
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
     * @var ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'EmployeeSearchBasic',
        'campaignResponseJoin' => 'CampaignSearchBasic',
        'chargeJoin' => 'ChargeSearchBasic',
        'departmentJoin' => 'DepartmentSearchBasic',
        'fileJoin' => 'FileSearchBasic',
        'hcmJobJoin' => 'HcmJobSearchBasic',
        'locationJoin' => 'LocationSearchBasic',
        'messagesJoin' => 'MessageSearchBasic',
        'messagesFromJoin' => 'MessageSearchBasic',
        'messagesToJoin' => 'MessageSearchBasic',
        'resourceAllocationJoin' => 'ResourceAllocationSearchBasic',
        'subsidiaryJoin' => 'SubsidiarySearchBasic',
        'timeJoin' => 'TimeBillSearchBasic',
        'transactionJoin' => 'TransactionSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'userNotesJoin' => 'NoteSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
