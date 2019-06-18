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
 * EmployeeHcmPosition.
 */
class EmployeeHcmPosition
{
    /**
     * @var RecordRef
     */
    public $position;
    /**
     * @var bool
     */
    public $primaryPosition;
    /**
     * @var string
     */
    public $positionId;
    /**
     * @var float
     */
    public $positionAllocation;
    /**
     * @var float
     */
    public $fullTimeEquivalent;
    /**
     * @var RecordRef
     */
    public $employmentCategory;
    /**
     * @var RecordRef
     */
    public $reportsTo;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $location;

    public static $paramtypesmap = array(
        'position' => 'RecordRef',
        'primaryPosition' => 'boolean',
        'positionId' => 'string',
        'positionAllocation' => 'float',
        'fullTimeEquivalent' => 'float',
        'employmentCategory' => 'RecordRef',
        'reportsTo' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'location' => 'RecordRef',
    );
}
