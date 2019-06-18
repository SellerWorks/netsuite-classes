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
 * SearchStringCustomField.
 */
class SearchStringCustomField extends SearchCustomField
{
    /**
     * @var string
     */
    public $searchValue;
    /**
     * @var SearchStringFieldOperator
     */
    public $operator;

    public static $paramtypesmap = [
        'searchValue' => 'string',
        'operator' => 'SearchStringFieldOperator',
    ];
}