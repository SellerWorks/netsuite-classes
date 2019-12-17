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
 * CustomRecordTypeChildren.
 */
class CustomRecordTypeChildren
{
    /**
     * @var string
     */
    public $childDescr;
    /**
     * @var RecordRef
     */
    public $childTab;

    public static $paramtypesmap = [
        'childDescr' => 'string',
        'childTab' => 'RecordRef',
    ];
}
