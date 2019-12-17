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
 * InvoiceExpCostList
 */
class InvoiceExpCostList
{
    /**
     * @access public
     * @var InvoiceExpCost[]
     */
    public $expCost;
    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        "expCost" => "InvoiceExpCost[]",
        "replaceAll" => "boolean",
    );
}
