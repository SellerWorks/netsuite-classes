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
 * AsyncStatusResult.
 */
class AsyncStatusResult
{
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var AsyncStatusType
     */
    public $status;
    /**
     * @var float
     */
    public $percentCompleted;
    /**
     * @var float
     */
    public $estRemainingDuration;

    public static $paramtypesmap = array(
        'jobId' => 'string',
        'status' => 'AsyncStatusType',
        'percentCompleted' => 'float',
        'estRemainingDuration' => 'float',
    );
}
