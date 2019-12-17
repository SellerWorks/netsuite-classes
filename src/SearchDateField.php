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
 * SearchDateField.
 */
class SearchDateField
{
    /**
     * @var SearchDate
     */
    public $predefinedSearchValue;
    /**
     * @var dateTime
     */
    public $searchValue;
    /**
     * @var dateTime
     */
    public $searchValue2;
    /**
     * @var SearchDateFieldOperator
     */
    public $operator;

    public static $paramtypesmap = [
        'predefinedSearchValue' => 'SearchDate',
        'searchValue' => 'dateTime',
        'searchValue2' => 'dateTime',
        'operator' => 'SearchDateFieldOperator',
    ];
}
