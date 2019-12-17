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
 * DeleteRequest.
 */
class DeleteRequest
{
    /**
     * @var BaseRef
     */
    public $baseRef;
    /**
     * @var DeletionReason
     */
    public $deletionReason;

    public static $paramtypesmap = [
        'baseRef' => 'BaseRef',
        'deletionReason' => 'DeletionReason',
    ];
}
