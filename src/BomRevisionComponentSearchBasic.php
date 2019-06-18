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
 * BomRevisionComponentSearchBasic.
 */
class BomRevisionComponentSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var SearchMultiSelectField
     */
    public $bomRevision;
    /**
     * @var SearchDoubleField
     */
    public $componentYield;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $itemSource;
    /**
     * @var SearchStringField
     */
    public $itemSubtype;
    /**
     * @var SearchMultiSelectField
     */
    public $itemType;
    /**
     * @var SearchLongField
     */
    public $lineId;
    /**
     * @var SearchDoubleField
     */
    public $quantity;
    /**
     * @var SearchStringField
     */
    public $units;
    /**
     * @var SearchDoubleField
     */
    public $weight;

    public static $paramtypesmap = array(
        'bomQuantity' => 'SearchDoubleField',
        'bomRevision' => 'SearchMultiSelectField',
        'componentYield' => 'SearchDoubleField',
        'description' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'itemSource' => 'SearchEnumMultiSelectField',
        'itemSubtype' => 'SearchStringField',
        'itemType' => 'SearchMultiSelectField',
        'lineId' => 'SearchLongField',
        'quantity' => 'SearchDoubleField',
        'units' => 'SearchStringField',
        'weight' => 'SearchDoubleField',
    );
}
