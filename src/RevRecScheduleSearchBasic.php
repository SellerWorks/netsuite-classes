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
 * RevRecScheduleSearchBasic.
 */
class RevRecScheduleSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $amorStatus;
    /**
     * @var SearchDoubleField
     */
    public $amortizedAmount;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $amorType;
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchDoubleField
     */
    public $deferredAmount;
    /**
     * @var SearchMultiSelectField
     */
    public $destAcct;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchDoubleField
     */
    public $initialAmt;
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
    public $isRecognized;
    /**
     * @var SearchMultiSelectField
     */
    public $jeDoc;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchDoubleField
     */
    public $pctComplete;
    /**
     * @var SearchDoubleField
     */
    public $pctRecognition;
    /**
     * @var SearchLongField
     */
    public $periodOffset;
    /**
     * @var SearchMultiSelectField
     */
    public $postPeriod;
    /**
     * @var SearchDateField
     */
    public $schedDate;
    /**
     * @var SearchLongField
     */
    public $scheduleNumber;
    /**
     * @var SearchStringField
     */
    public $scheduleNumberText;
    /**
     * @var SearchMultiSelectField
     */
    public $sourceAcct;
    /**
     * @var SearchMultiSelectField
     */
    public $srcTranPostPeriod;
    /**
     * @var SearchMultiSelectField
     */
    public $srcTranType;
    /**
     * @var SearchLongField
     */
    public $startOffset;
    /**
     * @var SearchStringField
     */
    public $templateName;
    /**
     * @var SearchBooleanField
     */
    public $useForeignAmounts;

    public static $paramtypesmap = array(
        'accountingBook' => 'SearchMultiSelectField',
        'amorStatus' => 'SearchEnumMultiSelectField',
        'amortizedAmount' => 'SearchDoubleField',
        'amorType' => 'SearchEnumMultiSelectField',
        'amount' => 'SearchDoubleField',
        'currency' => 'SearchMultiSelectField',
        'deferredAmount' => 'SearchDoubleField',
        'destAcct' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'initialAmt' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isRecognized' => 'SearchBooleanField',
        'jeDoc' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'pctComplete' => 'SearchDoubleField',
        'pctRecognition' => 'SearchDoubleField',
        'periodOffset' => 'SearchLongField',
        'postPeriod' => 'SearchMultiSelectField',
        'schedDate' => 'SearchDateField',
        'scheduleNumber' => 'SearchLongField',
        'scheduleNumberText' => 'SearchStringField',
        'sourceAcct' => 'SearchMultiSelectField',
        'srcTranPostPeriod' => 'SearchMultiSelectField',
        'srcTranType' => 'SearchMultiSelectField',
        'startOffset' => 'SearchLongField',
        'templateName' => 'SearchStringField',
        'useForeignAmounts' => 'SearchBooleanField',
    );
}
