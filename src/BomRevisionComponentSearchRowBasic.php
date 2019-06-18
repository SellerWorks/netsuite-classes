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
 * BomRevisionComponentSearchRowBasic.
 */
class BomRevisionComponentSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var SearchColumnSelectField[]
     */
    public $bomRevision;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $itemSource;
    /**
     * @var SearchColumnStringField[]
     */
    public $itemSubtype;
    /**
     * @var SearchColumnSelectField[]
     */
    public $itemType;
    /**
     * @var SearchColumnLongField[]
     */
    public $lineId;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var SearchColumnStringField[]
     */
    public $units;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $weight;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'bomQuantity' => 'SearchColumnDoubleField[]',
        'bomRevision' => 'SearchColumnSelectField[]',
        'componentYield' => 'SearchColumnDoubleField[]',
        'description' => 'SearchColumnStringField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'itemSource' => 'SearchColumnEnumSelectField[]',
        'itemSubtype' => 'SearchColumnStringField[]',
        'itemType' => 'SearchColumnSelectField[]',
        'lineId' => 'SearchColumnLongField[]',
        'quantity' => 'SearchColumnDoubleField[]',
        'units' => 'SearchColumnStringField[]',
        'weight' => 'SearchColumnDoubleField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
