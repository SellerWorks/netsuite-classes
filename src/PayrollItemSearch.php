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
 * PayrollItemSearch.
 */
class PayrollItemSearch extends SearchRecord
{
    /**
     * @var PayrollItemSearchBasic
     */
    public $basic;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'PayrollItemSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
