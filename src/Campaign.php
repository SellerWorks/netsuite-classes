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
 * Campaign.
 */
class Campaign extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $campaignId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var string
     */
    public $url;
    /**
     * @var float
     */
    public $baseCost;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $expectedRevenue;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $local;
    /**
     * @var float
     */
    public $totalRevenue;
    /**
     * @var float
     */
    public $roi;
    /**
     * @var float
     */
    public $profit;
    /**
     * @var float
     */
    public $costPerCustomer;
    /**
     * @var float
     */
    public $convCostPerCustomer;
    /**
     * @var int
     */
    public $conversions;
    /**
     * @var int
     */
    public $leadsGenerated;
    /**
     * @var int
     */
    public $uniqueVisitors;
    /**
     * @var RecordRef
     */
    public $vertical;
    /**
     * @var RecordRef
     */
    public $audience;
    /**
     * @var RecordRef
     */
    public $offer;
    /**
     * @var RecordRef
     */
    public $promotionCode;
    /**
     * @var RecordRefList
     */
    public $itemList;
    /**
     * @var RecordRef
     */
    public $family;
    /**
     * @var RecordRef
     */
    public $searchEngine;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var CampaignEmailList
     */
    public $campaignEmailList;
    /**
     * @var CampaignDirectMailList
     */
    public $campaignDirectMailList;
    /**
     * @var CampaignEventList
     */
    public $campaignEventList;
    /**
     * @var CampaignEventResponseList
     */
    public $eventResponseList;
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
        'customForm' => 'RecordRef',
        'campaignId' => 'string',
        'title' => 'string',
        'category' => 'RecordRef',
        'owner' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'url' => 'string',
        'baseCost' => 'float',
        'cost' => 'float',
        'expectedRevenue' => 'float',
        'message' => 'string',
        'isInactive' => 'boolean',
        'local' => 'boolean',
        'totalRevenue' => 'float',
        'roi' => 'float',
        'profit' => 'float',
        'costPerCustomer' => 'float',
        'convCostPerCustomer' => 'float',
        'conversions' => 'integer',
        'leadsGenerated' => 'integer',
        'uniqueVisitors' => 'integer',
        'vertical' => 'RecordRef',
        'audience' => 'RecordRef',
        'offer' => 'RecordRef',
        'promotionCode' => 'RecordRef',
        'itemList' => 'RecordRefList',
        'family' => 'RecordRef',
        'searchEngine' => 'RecordRef',
        'keyword' => 'string',
        'campaignEmailList' => 'CampaignEmailList',
        'campaignDirectMailList' => 'CampaignDirectMailList',
        'campaignEventList' => 'CampaignEventList',
        'eventResponseList' => 'CampaignEventResponseList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
