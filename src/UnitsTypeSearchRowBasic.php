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
 * UnitsTypeSearchRowBasic.
 */
class UnitsTypeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $abbreviation;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $baseUnit;
    /**
     * @var SearchColumnStringField[]
     */
    public $conversionRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInActive;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $pluralAbbreviation;
    /**
     * @var SearchColumnStringField[]
     */
    public $pluralName;
    /**
     * @var SearchColumnStringField[]
     */
    public $unitName;

    public static $paramtypesmap = [
        'abbreviation' => 'SearchColumnStringField[]',
        'baseUnit' => 'SearchColumnBooleanField[]',
        'conversionRate' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInActive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'pluralAbbreviation' => 'SearchColumnStringField[]',
        'pluralName' => 'SearchColumnStringField[]',
        'unitName' => 'SearchColumnStringField[]',
    ];
}
