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
 * CampaignEventResponse.
 */
class CampaignEventResponse
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var dateTime
     */
    public $dateSent;
    /**
     * @var float
     */
    public $sent;
    /**
     * @var float
     */
    public $opened;
    /**
     * @var float
     */
    public $openedRatio;
    /**
     * @var float
     */
    public $clickedThru;
    /**
     * @var float
     */
    public $clickedThruRatio;
    /**
     * @var int
     */
    public $responded;
    /**
     * @var float
     */
    public $respondedRatio;
    /**
     * @var int
     */
    public $unsubscribed;
    /**
     * @var float
     */
    public $unsubscribedRatio;
    /**
     * @var int
     */
    public $bounced;
    /**
     * @var float
     */
    public $bouncedRatio;

    public static $paramtypesmap = [
        'name' => 'string',
        'type' => 'string',
        'dateSent' => 'dateTime',
        'sent' => 'float',
        'opened' => 'float',
        'openedRatio' => 'float',
        'clickedThru' => 'float',
        'clickedThruRatio' => 'float',
        'responded' => 'integer',
        'respondedRatio' => 'float',
        'unsubscribed' => 'integer',
        'unsubscribedRatio' => 'float',
        'bounced' => 'integer',
        'bouncedRatio' => 'float',
    ];
}
