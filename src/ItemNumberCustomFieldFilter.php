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
 * ItemNumberCustomFieldFilter.
 */
class ItemNumberCustomFieldFilter
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
     * @var bool
     */
    public $fldFilterNotNull;
    /**
     * @var bool
     */
    public $fldfilterNull;
    /**
     * @var RecordRef
     */
    public $fldCompareField;

    public static $paramtypesmap = array(
        'fldFilter' => 'RecordRef',
        'fldFilterChecked' => 'boolean',
        'fldFilterCompareType' => 'CustomizationFilterCompareType',
        'fldFilterVal' => 'string',
        'fldFilterNotNull' => 'boolean',
        'fldfilterNull' => 'boolean',
        'fldCompareField' => 'RecordRef',
    );
}
