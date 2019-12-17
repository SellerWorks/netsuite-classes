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
 * AssemblyItemHierarchyVersions.
 */
class AssemblyItemHierarchyVersions
{
    /**
     * @var bool
     */
    public $isIncluded;
    /**
     * @var RecordRef
     */
    public $hierarchyVersion;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var RecordRef
     */
    public $hierarchyNode;

    public static $paramtypesmap = [
        'isIncluded' => 'boolean',
        'hierarchyVersion' => 'RecordRef',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'hierarchyNode' => 'RecordRef',
    ];
}
