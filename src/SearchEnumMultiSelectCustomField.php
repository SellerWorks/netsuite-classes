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
 * SearchEnumMultiSelectCustomField.
 */
class SearchEnumMultiSelectCustomField extends SearchCustomField
{
    /**
     * @var string[]
     */
    public $searchValue;
    /**
     * @var SearchEnumMultiSelectFieldOperator
     */
    public $operator;

    public static $paramtypesmap = array(
        'searchValue' => 'string[]',
        'operator' => 'SearchEnumMultiSelectFieldOperator',
    );
}
