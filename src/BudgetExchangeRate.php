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
 * BudgetExchangeRate
 */
class BudgetExchangeRate
{
    /**
     * @access public
     * @var RecordRef
     */
    public $period;
    /**
     * @access public
     * @var RecordRef
     */
    public $fromSubsidiary;
    /**
     * @access public
     * @var RecordRef
     */
    public $toSubsidiary;
    /**
     * @access public
     * @var float
     */
    public $currentRate;
    /**
     * @access public
     * @var float
     */
    public $averageRate;
    /**
     * @access public
     * @var float
     */
    public $historicalRate;

    public static $paramtypesmap = array(
        "period" => "RecordRef",
        "fromSubsidiary" => "RecordRef",
        "toSubsidiary" => "RecordRef",
        "currentRate" => "float",
        "averageRate" => "float",
        "historicalRate" => "float",
    );
}
