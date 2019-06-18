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
 * CustomerSalesTeam_relationships.
 */
class CustomerSalesTeam_relationships
{
    /**
     * @var RecordRef
     */
    public $employee;
    /**
     * @var RecordRef
     */
    public $salesRole;
    /**
     * @var bool
     */
    public $isPrimary;
    /**
     * @var float
     */
    public $contribution;

    public static $paramtypesmap = array(
        'employee' => 'RecordRef',
        'salesRole' => 'RecordRef',
        'isPrimary' => 'boolean',
        'contribution' => 'float',
    );
}
