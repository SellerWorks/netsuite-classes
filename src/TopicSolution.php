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
 * TopicSolution.
 */
class TopicSolution
{
    /**
     * @var RecordRef
     */
    public $solution;
    /**
     * @var string
     */
    public $message;

    public static $paramtypesmap = [
        'solution' => 'RecordRef',
        'message' => 'string',
    ];
}
