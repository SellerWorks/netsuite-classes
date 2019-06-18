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
 * TaxGroupSearchAdvanced.
 */
class TaxGroupSearchAdvanced extends SearchRecord
{
    /**
     * @var TaxGroupSearch
     */
    public $criteria;
    /**
     * @var TaxGroupSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = array(
        'criteria' => 'TaxGroupSearch',
        'columns' => 'TaxGroupSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
