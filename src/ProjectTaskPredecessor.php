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
 * ProjectTaskPredecessor.
 */
class ProjectTaskPredecessor
{
    /**
     * @var RecordRef
     */
    public $task;
    /**
     * @var ProjectTaskPredecessorPredecessorType
     */
    public $type;
    /**
     * @var float
     */
    public $lagDays;
    /**
     * @var dateTime
     */
    public $startDate;
    /**
     * @var dateTime
     */
    public $endDate;

    public static $paramtypesmap = array(
        'task' => 'RecordRef',
        'type' => 'ProjectTaskPredecessorPredecessorType',
        'lagDays' => 'float',
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
    );
}
