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
 * BomSearchRowBasic.
 */
class BomSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableForAllAssemblies;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $availableForAllLocations;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnSelectField[]
     */
    public $legacyBomForAssembly;
    /**
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $restrictToAssemblies;
    /**
     * @var SearchColumnSelectField[]
     */
    public $restrictToLocations;
    /**
     * @var SearchColumnStringField[]
     */
    public $revisionName;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useComponentYield;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $usedOnAssembly;

    public static $paramtypesmap = array(
        'availableForAllAssemblies' => 'SearchColumnBooleanField[]',
        'availableForAllLocations' => 'SearchColumnBooleanField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'includeChildren' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'legacyBomForAssembly' => 'SearchColumnSelectField[]',
        'memo' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'restrictToAssemblies' => 'SearchColumnSelectField[]',
        'restrictToLocations' => 'SearchColumnSelectField[]',
        'revisionName' => 'SearchColumnStringField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'subsidiaryNoHierarchy' => 'SearchColumnSelectField[]',
        'useComponentYield' => 'SearchColumnBooleanField[]',
        'usedOnAssembly' => 'SearchColumnBooleanField[]',
    );
}
