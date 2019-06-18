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
 * PriceLevel.
 */
class PriceLevel extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var float
     */
    public $discountpct;
    /**
     * @var bool
     */
    public $updateExistingPrices;
    /**
     * @var bool
     */
    public $isOnline;
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
        'discountpct' => 'float',
        'updateExistingPrices' => 'boolean',
        'isOnline' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
