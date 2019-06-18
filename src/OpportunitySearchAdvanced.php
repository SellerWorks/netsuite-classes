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
 * OpportunitySearchAdvanced.
 */
class OpportunitySearchAdvanced extends SearchRecord
{
    /**
     * @var OpportunitySearch
     */
    public $criteria;
    /**
     * @var OpportunitySearchRow
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
        'criteria' => 'OpportunitySearch',
        'columns' => 'OpportunitySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
