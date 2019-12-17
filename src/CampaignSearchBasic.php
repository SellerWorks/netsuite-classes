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
 * CampaignSearchBasic.
 */
class CampaignSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $audience;
    /**
     * @var SearchDoubleField
     */
    public $baseCost;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $campaignEventType;
    /**
     * @var SearchStringField
     */
    public $campaignId;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchMultiSelectField
     */
    public $channel;
    /**
     * @var SearchDoubleField
     */
    public $cost;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchDateField
     */
    public $endDate;
    /**
     * @var SearchStringField
     */
    public $event;
    /**
     * @var SearchDoubleField
     */
    public $expectedRevenue;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $family;
    /**
     * @var SearchMultiSelectField
     */
    public $group;
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
    public $isInactive;
    /**
     * @var SearchBooleanField
     */
    public $isSalesCampaign;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchStringField
     */
    public $keyword;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $manager;
    /**
     * @var SearchMultiSelectField
     */
    public $managerRole;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchMultiSelectField
     */
    public $offer;
    /**
     * @var SearchMultiSelectField
     */
    public $promoCode;
    /**
     * @var SearchMultiSelectField
     */
    public $recipient;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $response;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $responseCategory;
    /**
     * @var SearchLongField
     */
    public $responseCode;
    /**
     * @var SearchStringField
     */
    public $responseComments;
    /**
     * @var SearchDateField
     */
    public $responseDate;
    /**
     * @var SearchDateField
     */
    public $scheduleDate;
    /**
     * @var SearchMultiSelectField
     */
    public $searchEngine;
    /**
     * @var SearchDateField
     */
    public $startDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $subscription;
    /**
     * @var SearchMultiSelectField
     */
    public $template;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchMultiSelectField
     */
    public $vertical;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'audience' => 'SearchMultiSelectField',
        'baseCost' => 'SearchDoubleField',
        'campaignEventType' => 'SearchEnumMultiSelectField',
        'campaignId' => 'SearchStringField',
        'category' => 'SearchMultiSelectField',
        'channel' => 'SearchMultiSelectField',
        'cost' => 'SearchDoubleField',
        'createdDate' => 'SearchDateField',
        'endDate' => 'SearchDateField',
        'event' => 'SearchStringField',
        'expectedRevenue' => 'SearchDoubleField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'family' => 'SearchMultiSelectField',
        'group' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'isSalesCampaign' => 'SearchBooleanField',
        'item' => 'SearchMultiSelectField',
        'keyword' => 'SearchStringField',
        'lastModifiedDate' => 'SearchDateField',
        'manager' => 'SearchMultiSelectField',
        'managerRole' => 'SearchMultiSelectField',
        'number' => 'SearchLongField',
        'offer' => 'SearchMultiSelectField',
        'promoCode' => 'SearchMultiSelectField',
        'recipient' => 'SearchMultiSelectField',
        'response' => 'SearchEnumMultiSelectField',
        'responseCategory' => 'SearchEnumMultiSelectField',
        'responseCode' => 'SearchLongField',
        'responseComments' => 'SearchStringField',
        'responseDate' => 'SearchDateField',
        'scheduleDate' => 'SearchDateField',
        'searchEngine' => 'SearchMultiSelectField',
        'startDate' => 'SearchDateField',
        'status' => 'SearchEnumMultiSelectField',
        'subscription' => 'SearchMultiSelectField',
        'template' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'vertical' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
