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
 * AttachReference.
 */
class AttachReference
{
    /**
     * @var BaseRef
     */
    public $attachTo;

    public static $paramtypesmap = [
        'attachTo' => 'BaseRef',
    ];
}