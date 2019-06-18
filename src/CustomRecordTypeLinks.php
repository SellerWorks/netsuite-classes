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
 * CustomRecordTypeLinks.
 */
class CustomRecordTypeLinks
{
    /**
     * @var RecordRef
     */
    public $linkCenter;
    /**
     * @var RecordRef
     */
    public $linkSection;
    /**
     * @var string
     */
    public $linkLabel;

    public static $paramtypesmap = array(
        'linkCenter' => 'RecordRef',
        'linkSection' => 'RecordRef',
        'linkLabel' => 'string',
    );
}
