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
 * ServiceItemTaskTemplates.
 */
class ServiceItemTaskTemplates
{
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var int
     */
    public $taskStartOffset;
    /**
     * @var Duration
     */
    public $taskDuration;

    public static $paramtypesmap = array(
        'taskName' => 'string',
        'taskStartOffset' => 'integer',
        'taskDuration' => 'Duration',
    );
}
