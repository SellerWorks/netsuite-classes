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
 * LandedCostSummary.
 */
class LandedCostSummary
{
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var LandedCostSource
     */
    public $source;
    /**
     * @var RecordRef
     */
    public $transaction;

    public static $paramtypesmap = array(
        'category' => 'RecordRef',
        'amount' => 'float',
        'source' => 'LandedCostSource',
        'transaction' => 'RecordRef',
    );
}
