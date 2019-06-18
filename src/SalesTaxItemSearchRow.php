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
 * SalesTaxItemSearchRow.
 */
class SalesTaxItemSearchRow extends SearchRow
{
    /**
     * @var SalesTaxItemSearchRowBasic
     */
    public $basic;
    /**
     * @var TaxTypeSearchRowBasic
     */
    public $taxTypeJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'SalesTaxItemSearchRowBasic',
        'taxTypeJoin' => 'TaxTypeSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
