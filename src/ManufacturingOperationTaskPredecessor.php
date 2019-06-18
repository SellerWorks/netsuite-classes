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
 * ManufacturingOperationTaskPredecessor.
 */
class ManufacturingOperationTaskPredecessor
{
    /**
     * @var RecordRef
     */
    public $task;
    /**
     * @var ManufacturingOperationTaskPredecessorPredecessorType
     */
    public $type;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;
    /**
     * @var ManufacturingLagType
     */
    public $lagType;
    /**
     * @var int
     */
    public $lagAmount;
    /**
     * @var string
     */
    public $lagUnits;

    public static $paramtypesmap = array(
        'task' => 'RecordRef',
        'type' => 'ManufacturingOperationTaskPredecessorPredecessorType',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
        'lagType' => 'ManufacturingLagType',
        'lagAmount' => 'integer',
        'lagUnits' => 'string',
    );
}
