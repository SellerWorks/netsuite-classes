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
 * Bin.
 */
class Bin extends Record
{
    /**
     * @var string
     */
    public $binNumber;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        'binNumber' => 'string',
        'location' => 'RecordRef',
        'memo' => 'string',
        'isInactive' => 'boolean',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
