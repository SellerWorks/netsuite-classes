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
 * CampaignDirectMail.
 */
class CampaignDirectMail
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var RecordRef
     */
    public $campaignGroup;
    /**
     * @var RecordRef
     */
    public $template;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $subscription;
    /**
     * @var RecordRef
     */
    public $channel;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var CampaignCampaignDirectMailStatus
     */
    public $status;
    /**
     * @var dateTime
     */
    public $dateScheduled;
    /**
     * @var RecordRef
     */
    public $promoCode;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'internalId' => 'string',
        'campaignGroup' => 'RecordRef',
        'template' => 'RecordRef',
        'description' => 'string',
        'subscription' => 'RecordRef',
        'channel' => 'RecordRef',
        'cost' => 'float',
        'status' => 'CampaignCampaignDirectMailStatus',
        'dateScheduled' => 'dateTime',
        'promoCode' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    );
}
