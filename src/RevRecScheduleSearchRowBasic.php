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
 * RevRecScheduleSearchRowBasic.
 */
class RevRecScheduleSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $amorStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $amorTemplate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amortizedAmount;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $amorType;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnStringField[]
     */
    public $currency;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $deferredAmount;
    /**
     * @var SearchColumnStringField[]
     */
    public $destAcct;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $initialAmt;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isRecognized;
    /**
     * @var SearchColumnStringField[]
     */
    public $jeDoc;
    /**
     * @var SearchColumnLongField[]
     */
    public $lineSequenceNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $nameUrl;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $pctComplete;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $pctRecognition;
    /**
     * @var SearchColumnLongField[]
     */
    public $periodOffset;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $recurFxAmount;
    /**
     * @var SearchColumnDateField[]
     */
    public $schedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $scheduleNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $sourceAcct;
    /**
     * @var SearchColumnStringField[]
     */
    public $srcDocLine;
    /**
     * @var SearchColumnStringField[]
     */
    public $srcTran;
    /**
     * @var SearchColumnStringField[]
     */
    public $srcTranPostPeriod;
    /**
     * @var SearchColumnLongField[]
     */
    public $startOffset;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useForeignAmounts;

    public static $paramtypesmap = [
        'accountingBook' => 'SearchColumnSelectField[]',
        'amorStatus' => 'SearchColumnEnumSelectField[]',
        'amorTemplate' => 'SearchColumnStringField[]',
        'amortizedAmount' => 'SearchColumnDoubleField[]',
        'amorType' => 'SearchColumnEnumSelectField[]',
        'amount' => 'SearchColumnDoubleField[]',
        'currency' => 'SearchColumnStringField[]',
        'deferredAmount' => 'SearchColumnDoubleField[]',
        'destAcct' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'initialAmt' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isRecognized' => 'SearchColumnBooleanField[]',
        'jeDoc' => 'SearchColumnStringField[]',
        'lineSequenceNumber' => 'SearchColumnLongField[]',
        'name' => 'SearchColumnStringField[]',
        'nameUrl' => 'SearchColumnStringField[]',
        'pctComplete' => 'SearchColumnDoubleField[]',
        'pctRecognition' => 'SearchColumnDoubleField[]',
        'periodOffset' => 'SearchColumnLongField[]',
        'recurAmount' => 'SearchColumnDoubleField[]',
        'recurFxAmount' => 'SearchColumnDoubleField[]',
        'schedDate' => 'SearchColumnDateField[]',
        'scheduleNumber' => 'SearchColumnStringField[]',
        'sourceAcct' => 'SearchColumnStringField[]',
        'srcDocLine' => 'SearchColumnStringField[]',
        'srcTran' => 'SearchColumnStringField[]',
        'srcTranPostPeriod' => 'SearchColumnStringField[]',
        'startOffset' => 'SearchColumnLongField[]',
        'useForeignAmounts' => 'SearchColumnBooleanField[]',
    ];
}
