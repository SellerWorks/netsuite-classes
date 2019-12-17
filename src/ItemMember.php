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
 * ItemMember.
 */
class ItemMember
{
    /**
     * @var string
     */
    public $memberDescr;
    /**
     * @var float
     */
    public $componentYield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var ItemSource
     */
    public $itemSource;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var RecordRef
     */
    public $memberUnit;
    /**
     * @var VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var bool
     */
    public $vsoeDelivered;
    /**
     * @var RecordRef
     */
    public $taxSchedule;
    /**
     * @var string
     */
    public $taxcode;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $taxrate;
    /**
     * @var dateTime
     */
    public $effectiveDate;
    /**
     * @var dateTime
     */
    public $obsoleteDate;
    /**
     * @var RecordRef
     */
    public $effectiveRevision;
    /**
     * @var RecordRef
     */
    public $obsoleteRevision;
    /**
     * @var int
     */
    public $lineNumber;
    /**
     * @var string
     */
    public $memberKey;

    public static $paramtypesmap = [
        'memberDescr' => 'string',
        'componentYield' => 'float',
        'bomQuantity' => 'float',
        'itemSource' => 'ItemSource',
        'quantity' => 'float',
        'memberUnit' => 'RecordRef',
        'vsoeDeferral' => 'VsoeDeferral',
        'vsoePermitDiscount' => 'VsoePermitDiscount',
        'vsoeDelivered' => 'boolean',
        'taxSchedule' => 'RecordRef',
        'taxcode' => 'string',
        'item' => 'RecordRef',
        'taxrate' => 'float',
        'effectiveDate' => 'dateTime',
        'obsoleteDate' => 'dateTime',
        'effectiveRevision' => 'RecordRef',
        'obsoleteRevision' => 'RecordRef',
        'lineNumber' => 'integer',
        'memberKey' => 'string',
    ];
}
