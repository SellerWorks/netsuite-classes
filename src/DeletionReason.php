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
 * DeletionReason.
 */
class DeletionReason
{
    /**
     * @var RecordRef
     */
    public $deletionReasonCode;
    /**
     * @var string
     */
    public $deletionReasonMemo;

    public static $paramtypesmap = array(
        'deletionReasonCode' => 'RecordRef',
        'deletionReasonMemo' => 'string',
    );
}
