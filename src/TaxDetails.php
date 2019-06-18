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
 * TaxDetails.
 */
class TaxDetails
{
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var string
     */
    public $lineType;
    /**
     * @var string
     */
    public $lineName;
    /**
     * @var float
     */
    public $netAmount;
    /**
     * @var float
     */
    public $grossAmount;
    /**
     * @var RecordRef
     */
    public $taxType;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxBasis;
    /**
     * @var float
     */
    public $taxRate;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $calcDetail;

    public static $paramtypesmap = array(
        'taxDetailsReference' => 'string',
        'lineType' => 'string',
        'lineName' => 'string',
        'netAmount' => 'float',
        'grossAmount' => 'float',
        'taxType' => 'RecordRef',
        'taxCode' => 'RecordRef',
        'taxBasis' => 'float',
        'taxRate' => 'float',
        'taxAmount' => 'float',
        'calcDetail' => 'string',
    );
}
