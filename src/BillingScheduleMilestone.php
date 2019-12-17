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
 * BillingScheduleMilestone.
 */
class BillingScheduleMilestone
{
    /**
     * @var int
     */
    public $milestoneId;
    /**
     * @var float
     */
    public $milestoneAmount;
    /**
     * @var RecordRef
     */
    public $milestoneTerms;
    /**
     * @var RecordRef
     */
    public $projectTask;
    /**
     * @var dateTime
     */
    public $milestoneDate;
    /**
     * @var bool
     */
    public $milestoneCompleted;
    /**
     * @var dateTime
     */
    public $milestoneActualCompletionDate;
    /**
     * @var string
     */
    public $comments;

    public static $paramtypesmap = [
        'milestoneId' => 'integer',
        'milestoneAmount' => 'float',
        'milestoneTerms' => 'RecordRef',
        'projectTask' => 'RecordRef',
        'milestoneDate' => 'dateTime',
        'milestoneCompleted' => 'boolean',
        'milestoneActualCompletionDate' => 'dateTime',
        'comments' => 'string',
    ];
}
