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
 * FairValuePriceSearchBasic.
 */
class FairValuePriceSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchDateField
     */
    public $endDate;
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
    public $fairValue;
    /**
     * @var SearchMultiSelectField
     */
    public $fairValueFormula;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $fairValueRangePolicy;
    /**
     * @var SearchDoubleField
     */
    public $highValue;
    /**
     * @var SearchDoubleField
     */
    public $highValuePercent;
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
    public $isVsoePrice;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchMultiSelectField
     */
    public $itemRevenueCategory;
    /**
     * @var SearchDoubleField
     */
    public $lowValue;
    /**
     * @var SearchDoubleField
     */
    public $lowValuePercent;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchMultiSelectField
     */
    public $unitsType;

    public static $paramtypesmap = [
        'currency' => 'SearchMultiSelectField',
        'endDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'fairValue' => 'SearchDoubleField',
        'fairValueFormula' => 'SearchMultiSelectField',
        'fairValueRangePolicy' => 'SearchEnumMultiSelectField',
        'highValue' => 'SearchDoubleField',
        'highValuePercent' => 'SearchDoubleField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isVsoePrice' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'itemRevenueCategory' => 'SearchMultiSelectField',
        'lowValue' => 'SearchDoubleField',
        'lowValuePercent' => 'SearchDoubleField',
        'startDate' => 'SearchDateField',
        'unitsType' => 'SearchMultiSelectField',
    ];
}
