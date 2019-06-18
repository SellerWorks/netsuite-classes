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
 * TaxGroupTaxItem.
 */
class TaxGroupTaxItem
{
    /**
     * @var RecordRef
     */
    public $taxName;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var float
     */
    public $basis;
    /**
     * @var string
     */
    public $taxType;

    public static $paramtypesmap = array(
        'taxName' => 'RecordRef',
        'rate' => 'float',
        'basis' => 'float',
        'taxType' => 'string',
    );
}
