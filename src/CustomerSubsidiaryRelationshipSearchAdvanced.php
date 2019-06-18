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
 * CustomerSubsidiaryRelationshipSearchAdvanced.
 */
class CustomerSubsidiaryRelationshipSearchAdvanced extends SearchRecord
{
    /**
     * @var CustomerSubsidiaryRelationshipSearch
     */
    public $criteria;
    /**
     * @var CustomerSubsidiaryRelationshipSearchRow
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
        'criteria' => 'CustomerSubsidiaryRelationshipSearch',
        'columns' => 'CustomerSubsidiaryRelationshipSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
