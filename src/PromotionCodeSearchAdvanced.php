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
 * PromotionCodeSearchAdvanced.
 */
class PromotionCodeSearchAdvanced extends SearchRecord
{
    /**
     * @var PromotionCodeSearch
     */
    public $criteria;
    /**
     * @var PromotionCodeSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchScriptId;
    /**
     * @var string
     */
    public $savedSearchId;

    public static $paramtypesmap = array(
        'criteria' => 'PromotionCodeSearch',
        'columns' => 'PromotionCodeSearchRow',
        'savedSearchScriptId' => 'string',
        'savedSearchId' => 'string',
    );
}
