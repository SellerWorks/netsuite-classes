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
 * CampaignResponse.
 */
class CampaignResponse extends Record
{
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var RecordRef
     */
    public $campaignEvent;
    /**
     * @var dateTime
     */
    public $campaignResponseDate;
    /**
     * @var string
     */
    public $channel;
    /**
     * @var CampaignResponseResponse
     */
    public $response;
    /**
     * @var string
     */
    public $note;
    /**
     * @var CampaignResponseResponsesList
     */
    public $responsesList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'entity' => 'RecordRef',
        'leadSource' => 'RecordRef',
        'campaignEvent' => 'RecordRef',
        'campaignResponseDate' => 'dateTime',
        'channel' => 'string',
        'response' => 'CampaignResponseResponse',
        'note' => 'string',
        'responsesList' => 'CampaignResponseResponsesList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
