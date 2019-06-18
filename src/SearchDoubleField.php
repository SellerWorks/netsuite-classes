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
 * SearchDoubleField.
 */
class SearchDoubleField
{
    /**
     * @var float
     */
    public $searchValue;
    /**
     * @var float
     */
    public $searchValue2;
    /**
     * @var SearchDoubleFieldOperator
     */
    public $operator;

    public static $paramtypesmap = array(
        'searchValue' => 'float',
        'searchValue2' => 'float',
        'operator' => 'SearchDoubleFieldOperator',
    );
}
