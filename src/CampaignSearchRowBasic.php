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
 * CampaignSearchRowBasic.
 */
class CampaignSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $audience;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $baseCost;
    /**
     * @var SearchColumnStringField[]
     */
    public $campaignId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var SearchColumnSelectField[]
     */
    public $channel;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $event;
    /**
     * @var SearchColumnDateField[]
     */
    public $executedDate;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $expectedRevenue;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $family;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isSalesCampaign;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnStringField[]
     */
    public $keyword;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $managerRole;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnSelectField[]
     */
    public $offer;
    /**
     * @var SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var SearchColumnStringField[]
     */
    public $promoCode;
    /**
     * @var SearchColumnSelectField[]
     */
    public $recipient;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $response;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $responseCategory;
    /**
     * @var SearchColumnLongField[]
     */
    public $responseCode;
    /**
     * @var SearchColumnDateField[]
     */
    public $responseDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $responseNotes;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $revenue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $roi;
    /**
     * @var SearchColumnDateField[]
     */
    public $scheduledDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $searchEngine;
    /**
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnStringField[]
     */
    public $url;
    /**
     * @var SearchColumnSelectField[]
     */
    public $vertical;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'audience' => 'SearchColumnSelectField[]',
        'baseCost' => 'SearchColumnDoubleField[]',
        'campaignId' => 'SearchColumnStringField[]',
        'category' => 'SearchColumnSelectField[]',
        'channel' => 'SearchColumnSelectField[]',
        'cost' => 'SearchColumnDoubleField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'endDate' => 'SearchColumnDateField[]',
        'event' => 'SearchColumnStringField[]',
        'executedDate' => 'SearchColumnDateField[]',
        'expectedRevenue' => 'SearchColumnDoubleField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'family' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'isSalesCampaign' => 'SearchColumnBooleanField[]',
        'item' => 'SearchColumnSelectField[]',
        'keyword' => 'SearchColumnStringField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'managerRole' => 'SearchColumnSelectField[]',
        'message' => 'SearchColumnStringField[]',
        'offer' => 'SearchColumnSelectField[]',
        'owner' => 'SearchColumnSelectField[]',
        'promoCode' => 'SearchColumnStringField[]',
        'recipient' => 'SearchColumnSelectField[]',
        'response' => 'SearchColumnEnumSelectField[]',
        'responseCategory' => 'SearchColumnEnumSelectField[]',
        'responseCode' => 'SearchColumnLongField[]',
        'responseDate' => 'SearchColumnDateField[]',
        'responseNotes' => 'SearchColumnStringField[]',
        'revenue' => 'SearchColumnDoubleField[]',
        'roi' => 'SearchColumnDoubleField[]',
        'scheduledDate' => 'SearchColumnDateField[]',
        'searchEngine' => 'SearchColumnSelectField[]',
        'startDate' => 'SearchColumnDateField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'subscription' => 'SearchColumnSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'url' => 'SearchColumnStringField[]',
        'vertical' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
