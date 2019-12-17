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
 * FairValuePriceSearchRowBasic.
 */
class FairValuePriceSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $fairValue;
    /**
     * @var SearchColumnSelectField[]
     */
    public $fairValueFormula;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $fairValueRangePolicy;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $highValue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $highValuePercent;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isVsoePrice;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnSelectField[]
     */
    public $itemRevenueCategory;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $lowValue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $lowValuePercent;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var SearchColumnSelectField[]
     */
    public $unitsType;

    public static $paramtypesmap = [
        'currency' => 'SearchColumnSelectField[]',
        'endDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'fairValue' => 'SearchColumnDoubleField[]',
        'fairValueFormula' => 'SearchColumnSelectField[]',
        'fairValueRangePolicy' => 'SearchColumnEnumSelectField[]',
        'highValue' => 'SearchColumnDoubleField[]',
        'highValuePercent' => 'SearchColumnDoubleField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isVsoePrice' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'itemRevenueCategory' => 'SearchColumnSelectField[]',
        'lowValue' => 'SearchColumnDoubleField[]',
        'lowValuePercent' => 'SearchColumnDoubleField[]',
        'startDate' => 'SearchColumnDateField[]',
        'units' => 'SearchColumnSelectField[]',
        'unitsType' => 'SearchColumnSelectField[]',
    ];
}
