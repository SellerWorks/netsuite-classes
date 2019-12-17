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
 * AttachContactReference.
 */
class AttachContactReference extends AttachReference
{
    /**
     * @var RecordRef
     */
    public $contact;
    /**
     * @var RecordRef
     */
    public $contactRole;

    public static $paramtypesmap = [
        'contact' => 'RecordRef',
        'contactRole' => 'RecordRef',
    ];
}
