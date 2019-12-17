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
 * MerchandiseHierarchyNodeSearchRowBasic.
 */
class MerchandiseHierarchyNodeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $hierarchyLevel;
    /**
     * @var SearchColumnSelectField[]
     */
    public $hierarchyVersion;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $parentNode;

    public static $paramtypesmap = [
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'hierarchyLevel' => 'SearchColumnSelectField[]',
        'hierarchyVersion' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'name' => 'SearchColumnStringField[]',
        'parentNode' => 'SearchColumnSelectField[]',
    ];
}
