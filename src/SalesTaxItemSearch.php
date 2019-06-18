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
 * SalesTaxItemSearch.
 */
class SalesTaxItemSearch extends SearchRecord
{
    /**
     * @var SalesTaxItemSearchBasic
     */
    public $basic;
    /**
     * @var TaxTypeSearchBasic
     */
    public $taxTypeJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'SalesTaxItemSearchBasic',
        'taxTypeJoin' => 'TaxTypeSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
