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
 * AccountingTransactionSearchBasic.
 */
class AccountingTransactionSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchMultiSelectField
     */
    public $accountType;
    /**
     * @var SearchDoubleField
     */
    public $altSalesAmount;
    /**
     * @var SearchDoubleField
     */
    public $altSalesNetAmount;
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchBooleanField
     */
    public $bookSpecificTransaction;
    /**
     * @var SearchMultiSelectField
     */
    public $catchUpPeriod;
    /**
     * @var SearchDoubleField
     */
    public $creditAmount;
    /**
     * @var SearchBooleanField
     */
    public $customGL;
    /**
     * @var SearchDoubleField
     */
    public $debitAmount;
    /**
     * @var SearchBooleanField
     */
    public $deferRevRec;
    /**
     * @var SearchDoubleField
     */
    public $exchangeRate;
    /**
     * @var SearchDoubleField
     */
    public $grossAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $multiSubsidiary;
    /**
     * @var SearchDoubleField
     */
    public $netAmount;
    /**
     * @var SearchBooleanField
     */
    public $posting;
    /**
     * @var SearchDoubleField
     */
    public $quantityRevCommitted;
    /**
     * @var SearchDoubleField
     */
    public $recognizedRevenue;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $revCommitStatus;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $revenueStatus;
    /**
     * @var SearchDateField
     */
    public $revRecEndDate;
    /**
     * @var SearchBooleanField
     */
    public $revRecOnRevCommitment;
    /**
     * @var SearchDateField
     */
    public $revRecStartDate;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchBooleanField
     */
    public $tranIsVsoeBundle;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchDoubleField
     */
    public $vsoeAllocation;

    public static $paramtypesmap = [
        'account' => 'SearchMultiSelectField',
        'accountingBook' => 'SearchMultiSelectField',
        'accountType' => 'SearchMultiSelectField',
        'altSalesAmount' => 'SearchDoubleField',
        'altSalesNetAmount' => 'SearchDoubleField',
        'amount' => 'SearchDoubleField',
        'bookSpecificTransaction' => 'SearchBooleanField',
        'catchUpPeriod' => 'SearchMultiSelectField',
        'creditAmount' => 'SearchDoubleField',
        'customGL' => 'SearchBooleanField',
        'debitAmount' => 'SearchDoubleField',
        'deferRevRec' => 'SearchBooleanField',
        'exchangeRate' => 'SearchDoubleField',
        'grossAmount' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'multiSubsidiary' => 'SearchBooleanField',
        'netAmount' => 'SearchDoubleField',
        'posting' => 'SearchBooleanField',
        'quantityRevCommitted' => 'SearchDoubleField',
        'recognizedRevenue' => 'SearchDoubleField',
        'revCommitStatus' => 'SearchEnumMultiSelectField',
        'revenueStatus' => 'SearchEnumMultiSelectField',
        'revRecEndDate' => 'SearchDateField',
        'revRecOnRevCommitment' => 'SearchBooleanField',
        'revRecStartDate' => 'SearchDateField',
        'subsidiary' => 'SearchMultiSelectField',
        'tranIsVsoeBundle' => 'SearchBooleanField',
        'type' => 'SearchEnumMultiSelectField',
        'vsoeAllocation' => 'SearchDoubleField',
    ];
}
