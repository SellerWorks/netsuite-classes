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
 * AssemblyItemBomSearchBasic.
 */
class AssemblyItemBomSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $assembly;
    /**
     * @var SearchMultiSelectField
     */
    public $billOfMaterials;
    /**
     * @var SearchBooleanField
     */
    public $default;
    /**
     * @var SearchMultiSelectField
     */
    public $locations;

    public static $paramtypesmap = [
        'assembly' => 'SearchMultiSelectField',
        'billOfMaterials' => 'SearchMultiSelectField',
        'default' => 'SearchBooleanField',
        'locations' => 'SearchMultiSelectField',
    ];
}
