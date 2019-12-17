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
 * SerializedAssemblyItemBillOfMaterials.
 */
class SerializedAssemblyItemBillOfMaterials
{
    /**
     * @var RecordRef
     */
    public $billOfMaterials;
    /**
     * @var string
     */
    public $currentRevision;
    /**
     * @var bool
     */
    public $masterDefault;
    /**
     * @var RecordRefList
     */
    public $defaultForLocationList;
    /**
     * @var string
     */
    public $inactive;
    /**
     * @var string
     */
    public $memo;

    public static $paramtypesmap = [
        'billOfMaterials' => 'RecordRef',
        'currentRevision' => 'string',
        'masterDefault' => 'boolean',
        'defaultForLocationList' => 'RecordRefList',
        'inactive' => 'string',
        'memo' => 'string',
    ];
}
