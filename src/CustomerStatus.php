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
 * CustomerStatus.
 */
class CustomerStatus extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var CustomerStatusStage
     */
    public $stage;
    /**
     * @var float
     */
    public $probability;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $includeInLeadReports;
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
        'stage' => 'CustomerStatusStage',
        'probability' => 'float',
        'description' => 'string',
        'includeInLeadReports' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
