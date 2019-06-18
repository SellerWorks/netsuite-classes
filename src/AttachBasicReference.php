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
 * AttachBasicReference.
 */
class AttachBasicReference extends AttachReference
{
    /**
     * @var BaseRef
     */
    public $attachedRecord;

    public static $paramtypesmap = array(
        'attachedRecord' => 'BaseRef',
    );
}
