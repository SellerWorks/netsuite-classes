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
 * Term.
 */
class Term extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $dateDriven;
    /**
     * @var int
     */
    public $daysUntilNetDue;
    /**
     * @var float
     */
    public $discountPercent;
    /**
     * @var int
     */
    public $daysUntilExpiry;
    /**
     * @var int
     */
    public $dayOfMonthNetDue;
    /**
     * @var int
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @var float
     */
    public $discountPercentDateDriven;
    /**
     * @var int
     */
    public $dayDiscountExpires;
    /**
     * @var bool
     */
    public $preferred;
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
        'dateDriven' => 'boolean',
        'daysUntilNetDue' => 'integer',
        'discountPercent' => 'float',
        'daysUntilExpiry' => 'integer',
        'dayOfMonthNetDue' => 'integer',
        'dueNextMonthIfWithinDays' => 'integer',
        'discountPercentDateDriven' => 'float',
        'dayDiscountExpires' => 'integer',
        'preferred' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
