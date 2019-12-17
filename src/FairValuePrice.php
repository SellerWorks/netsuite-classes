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
 * FairValuePrice.
 */
class FairValuePrice extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $itemRevenueCategory;
    /**
     * @var float
     */
    public $fairValue;
    /**
     * @var RecordRef
     */
    public $fairValueFormula;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var RecordRef
     */
    public $unitsType;
    /**
     * @var RecordRef
     */
    public $units;
    /**
     * @var FairValuePriceFairValueRangePolicy
     */
    public $fairValueRangePolicy;
    /**
     * @var float
     */
    public $lowValue;
    /**
     * @var float
     */
    public $lowValuePercent;
    /**
     * @var float
     */
    public $highValue;
    /**
     * @var float
     */
    public $highValuePercent;
    /**
     * @var bool
     */
    public $isVsoePrice;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var DimensionList
     */
    public $dimensionList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'item' => 'RecordRef',
        'itemRevenueCategory' => 'RecordRef',
        'fairValue' => 'float',
        'fairValueFormula' => 'RecordRef',
        'currency' => 'RecordRef',
        'unitsType' => 'RecordRef',
        'units' => 'RecordRef',
        'fairValueRangePolicy' => 'FairValuePriceFairValueRangePolicy',
        'lowValue' => 'float',
        'lowValuePercent' => 'float',
        'highValue' => 'float',
        'highValuePercent' => 'float',
        'isVsoePrice' => 'boolean',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'customFieldList' => 'CustomFieldList',
        'dimensionList' => 'DimensionList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
