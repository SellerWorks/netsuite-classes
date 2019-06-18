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
 * CustomerGroupPricing.
 */
class CustomerGroupPricing
{
    /**
     * @var RecordRef
     */
    public $group;
    /**
     * @var RecordRef
     */
    public $level;

    public static $paramtypesmap = array(
        'group' => 'RecordRef',
        'level' => 'RecordRef',
    );
}
