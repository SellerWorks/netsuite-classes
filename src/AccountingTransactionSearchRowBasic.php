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
 * AccountingTransactionSearchRowBasic.
 */
class AccountingTransactionSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnStringField[]
     */
    public $accountType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $altSalesAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnStringField[]
     */
    public $baseCurrency;
    /**
     * @var SearchColumnStringField[]
     */
    public $catchUpPeriod;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $creditAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $customGL;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $debitAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $grossAmount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $multiSubsidiary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $netAmount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $posting;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recognizedRevenue;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $revenueStatus;
    /**
     * @var SearchColumnDateField[]
     */
    public $revRecEndDate;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;
    /**
     * @var SearchColumnDateField[]
     */
    public $revRecStartDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAllocation;

    public static $paramtypesmap = [
        'account' => 'SearchColumnSelectField[]',
        'accountingBook' => 'SearchColumnSelectField[]',
        'accountType' => 'SearchColumnStringField[]',
        'altSalesAmount' => 'SearchColumnDoubleField[]',
        'altSalesNetAmount' => 'SearchColumnDoubleField[]',
        'amount' => 'SearchColumnDoubleField[]',
        'baseCurrency' => 'SearchColumnStringField[]',
        'catchUpPeriod' => 'SearchColumnStringField[]',
        'creditAmount' => 'SearchColumnDoubleField[]',
        'customGL' => 'SearchColumnBooleanField[]',
        'dateCreated' => 'SearchColumnDateField[]',
        'debitAmount' => 'SearchColumnDoubleField[]',
        'deferRevRec' => 'SearchColumnBooleanField[]',
        'exchangeRate' => 'SearchColumnDoubleField[]',
        'fxAmount' => 'SearchColumnDoubleField[]',
        'grossAmount' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'multiSubsidiary' => 'SearchColumnBooleanField[]',
        'netAmount' => 'SearchColumnDoubleField[]',
        'posting' => 'SearchColumnBooleanField[]',
        'quantityRevCommitted' => 'SearchColumnDoubleField[]',
        'recognizedRevenue' => 'SearchColumnDoubleField[]',
        'revCommitStatus' => 'SearchColumnEnumSelectField[]',
        'revenueStatus' => 'SearchColumnEnumSelectField[]',
        'revRecEndDate' => 'SearchColumnDateField[]',
        'revRecOnRevCommitment' => 'SearchColumnBooleanField[]',
        'revRecStartDate' => 'SearchColumnDateField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'tranIsVsoeBundle' => 'SearchColumnBooleanField[]',
        'vsoeAllocation' => 'SearchColumnDoubleField[]',
    ];
}
