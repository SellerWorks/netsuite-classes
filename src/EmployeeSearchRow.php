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
 * EmployeeSearchRow
 */
class EmployeeSearchRow extends SearchRow
{
    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    public $basic;
    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @access public
     * @var ChargeSearchRowBasic
     */
    public $chargeJoin;
    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @access public
     * @var FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @access public
     * @var HcmJobSearchRowBasic
     */
    public $hcmJobJoin;
    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @access public
     * @var JobSearchRowBasic
     */
    public $managedJobJoin;
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
     * @var ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    public $transactionJoin;
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
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        "basic" => "EmployeeSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hcmJobJoin" => "HcmJobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "managedJobJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
