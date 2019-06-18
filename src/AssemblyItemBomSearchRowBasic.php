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
 * AssemblyItemBomSearchRowBasic.
 */
class AssemblyItemBomSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $assembly;
    /**
     * @var SearchColumnSelectField[]
     */
    public $billOfMaterials;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $default;
    /**
     * @var SearchColumnSelectField[]
     */
    public $locations;

    public static $paramtypesmap = array(
        'assembly' => 'SearchColumnSelectField[]',
        'billOfMaterials' => 'SearchColumnSelectField[]',
        'default' => 'SearchColumnBooleanField[]',
        'locations' => 'SearchColumnSelectField[]',
    );
}
