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
 * BomSearchBasic.
 */
class BomSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $availableForAllAssemblies;
    /**
     * @var SearchBooleanField
     */
    public $availableForAllLocations;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $includeChildren;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchMultiSelectField
     */
    public $legacyBomForAssembly;
    /**
     * @var SearchStringField
     */
    public $memo;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $restrictToAssemblies;
    /**
     * @var SearchMultiSelectField
     */
    public $restrictToLocations;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchBooleanField
     */
    public $useComponentYield;
    /**
     * @var SearchBooleanField
     */
    public $usedOnAssembly;

    public static $paramtypesmap = [
        'availableForAllAssemblies' => 'SearchBooleanField',
        'availableForAllLocations' => 'SearchBooleanField',
        'createdDate' => 'SearchDateField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'includeChildren' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'legacyBomForAssembly' => 'SearchMultiSelectField',
        'memo' => 'SearchStringField',
        'name' => 'SearchStringField',
        'restrictToAssemblies' => 'SearchMultiSelectField',
        'restrictToLocations' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'useComponentYield' => 'SearchBooleanField',
        'usedOnAssembly' => 'SearchBooleanField',
    ];
}
