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
 * CampaignCategory.
 */
class CampaignCategory extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $parent;
    /**
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isexternal;
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

    public static $paramtypesmap = [
        'name' => 'string',
        'parent' => 'RecordRef',
        'leadSource' => 'RecordRef',
        'description' => 'string',
        'isexternal' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
