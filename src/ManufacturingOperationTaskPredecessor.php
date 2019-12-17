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
 * ManufacturingOperationTaskPredecessor
 */
class ManufacturingOperationTaskPredecessor
{
    /**
     * @access public
     * @var RecordRef
     */
    public $task;
    /**
     * @access public
     * @var ManufacturingOperationTaskPredecessorPredecessorType
     */
    public $type;
    /**
     * @access public
     * @var dateTime
     */
    public $startDate;
    /**
     * @access public
     * @var dateTime
     */
    public $endDate;
    /**
     * @access public
     * @var ManufacturingLagType
     */
    public $lagType;
    /**
     * @access public
     * @var integer
     */
    public $lagAmount;
    /**
     * @access public
     * @var string
     */
    public $lagUnits;

    public static $paramtypesmap = array(
        "task" => "RecordRef",
        "type" => "ManufacturingOperationTaskPredecessorPredecessorType",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "lagType" => "ManufacturingLagType",
        "lagAmount" => "integer",
        "lagUnits" => "string",
    );
}
