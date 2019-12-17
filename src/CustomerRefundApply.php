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
 * CustomerRefundApply
 */
class CustomerRefundApply
{
    /**
     * @access public
     * @var boolean
     */
    public $apply;
    /**
     * @access public
     * @var integer
     */
    public $doc;
    /**
     * @access public
     * @var integer
     */
    public $line;
    /**
     * @access public
     * @var dateTime
     */
    public $applyDate;
    /**
     * @access public
     * @var string
     */
    public $type;
    /**
     * @access public
     * @var string
     */
    public $refNum;
    /**
     * @access public
     * @var float
     */
    public $total;
    /**
     * @access public
     * @var float
     */
    public $due;
    /**
     * @access public
     * @var string
     */
    public $currency;
    /**
     * @access public
     * @var float
     */
    public $amount;

    public static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "applyDate" => "dateTime",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "amount" => "float",
    );
}
