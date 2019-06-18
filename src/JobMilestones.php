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
 * JobMilestones.
 */
class JobMilestones
{
    /**
     * @var string
     */
    public $milestoneName;
    /**
     * @var string
     */
    public $milestoneOrder;
    /**
     * @var dateTime
     */
    public $milestoneEstComplete;
    /**
     * @var bool
     */
    public $milestoneCompleted;
    /**
     * @var string
     */
    public $milestoneComments;

    public static $paramtypesmap = array(
        'milestoneName' => 'string',
        'milestoneOrder' => 'string',
        'milestoneEstComplete' => 'dateTime',
        'milestoneCompleted' => 'boolean',
        'milestoneComments' => 'string',
    );
}
