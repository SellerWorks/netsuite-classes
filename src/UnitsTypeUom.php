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
 * UnitsTypeUom.
 */
class UnitsTypeUom
{
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $unitName;
    /**
     * @var string
     */
    public $pluralName;
    /**
     * @var string
     */
    public $abbreviation;
    /**
     * @var string
     */
    public $pluralAbbreviation;
    /**
     * @var float
     */
    public $conversionRate;
    /**
     * @var bool
     */
    public $baseUnit;

    public static $paramtypesmap = [
        'internalId' => 'string',
        'unitName' => 'string',
        'pluralName' => 'string',
        'abbreviation' => 'string',
        'pluralAbbreviation' => 'string',
        'conversionRate' => 'float',
        'baseUnit' => 'boolean',
    ];
}
