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
 * PaycheckJournal.
 */
class PaycheckJournal extends Record
{
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var PaycheckJournalCompanyContributionList
     */
    public $companyContributionList;
    /**
     * @var PaycheckJournalDeductionList
     */
    public $deductionList;
    /**
     * @var PaycheckJournalEmployeeTaxList
     */
    public $employeeTaxList;
    /**
     * @var PaycheckJournalCompanyTaxList
     */
    public $companyTaxList;
    /**
     * @var PaycheckJournalEarningList
     */
    public $earningList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'subsidiary' => 'RecordRef',
        'currency' => 'RecordRef',
        'exchangeRate' => 'float',
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'tranId' => 'string',
        'employee' => 'RecordRef',
        'tranDate' => 'dateTime',
        'postingPeriod' => 'RecordRef',
        'account' => 'RecordRef',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'companyContributionList' => 'PaycheckJournalCompanyContributionList',
        'deductionList' => 'PaycheckJournalDeductionList',
        'employeeTaxList' => 'PaycheckJournalEmployeeTaxList',
        'companyTaxList' => 'PaycheckJournalCompanyTaxList',
        'earningList' => 'PaycheckJournalEarningList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
