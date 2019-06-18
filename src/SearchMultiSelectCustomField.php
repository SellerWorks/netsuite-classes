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
 * SearchMultiSelectCustomField.
 */
class SearchMultiSelectCustomField extends SearchCustomField
{
    /**
     * @var ListOrRecordRef[]
     */
    public $searchValue;
    /**
     * @var SearchMultiSelectFieldOperator
     */
    public $operator;

    public static $paramtypesmap = [
        'searchValue' => 'ListOrRecordRef[]',
        'operator' => 'SearchMultiSelectFieldOperator',
    ];
}
