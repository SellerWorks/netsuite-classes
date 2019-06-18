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
 * ItemOptionCustomFieldFilter.
 */
class ItemOptionCustomFieldFilter
{
    /**
     * @var RecordRef
     */
    public $fldFilter;
    /**
     * @var bool
     */
    public $fldFilterChecked;
    /**
     * @var CustomizationFilterCompareType
     */
    public $fldFilterCompareType;
    /**
     * @var string
     */
    public $fldFilterVal;
    /**
     * @var FldFilterSelList
     */
    public $fldFilterSelList;
    /**
     * @var bool
     */
    public $fldFilterNotNull;

    public static $paramtypesmap = array(
        'fldFilter' => 'RecordRef',
        'fldFilterChecked' => 'boolean',
        'fldFilterCompareType' => 'CustomizationFilterCompareType',
        'fldFilterVal' => 'string',
        'fldFilterSelList' => 'FldFilterSelList',
        'fldFilterNotNull' => 'boolean',
    );
}
