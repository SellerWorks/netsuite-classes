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
 * CampaignSubscription.
 */
class CampaignSubscription extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $subscribedByDefault;
    /**
     * @var bool
     */
    public $unsubscribed;
    /**
     * @var string
     */
    public $externalName;
    /**
     * @var string
     */
    public $externalDescription;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'description' => 'string',
        'subscribedByDefault' => 'boolean',
        'unsubscribed' => 'boolean',
        'externalName' => 'string',
        'externalDescription' => 'string',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
