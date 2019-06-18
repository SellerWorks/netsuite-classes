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
 * ItemRevision.
 */
class ItemRevision extends Record
{
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $name;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var dateTime
     */
    public $obsoleteDate;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $inactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'item' => 'RecordRef',
        'name' => 'string',
        'effectiveDate' => 'dateTime',
        'obsoleteDate' => 'dateTime',
        'memo' => 'string',
        'inactive' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
