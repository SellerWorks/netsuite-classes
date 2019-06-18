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
 * Bom.
 */
class Bom extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $usedOnAssembly;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $useComponentYield;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $legacyBomForAssembly;
    /**
     * @var bool
     */
    public $availableForAllAssemblies;
    /**
     * @var RecordRefList
     */
    public $restrictToAssembliesList;
    /**
     * @var bool
     */
    public $availableForAllLocations;
    /**
     * @var RecordRefList
     */
    public $restrictToLocationsList;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var bool
     */
    public $includeChildren;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'name' => 'string',
        'usedOnAssembly' => 'boolean',
        'createdDate' => 'dateTime',
        'isInactive' => 'boolean',
        'useComponentYield' => 'boolean',
        'memo' => 'string',
        'legacyBomForAssembly' => 'RecordRef',
        'availableForAllAssemblies' => 'boolean',
        'restrictToAssembliesList' => 'RecordRefList',
        'availableForAllLocations' => 'boolean',
        'restrictToLocationsList' => 'RecordRefList',
        'subsidiaryList' => 'RecordRefList',
        'includeChildren' => 'boolean',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
