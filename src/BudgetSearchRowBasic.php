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
 * BudgetSearchRowBasic.
 */
class BudgetSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $account;
    /**
     * @var SearchColumnStringField[]
     */
    public $accountingBook;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var SearchColumnStringField[]
     */
    public $category;
    /**
     * @var SearchColumnStringField[]
     */
    public $class;
    /**
     * @var SearchColumnStringField[]
     */
    public $classnohierarchy;
    /**
     * @var SearchColumnStringField[]
     */
    public $currency;
    /**
     * @var SearchColumnStringField[]
     */
    public $customer;
    /**
     * @var SearchColumnStringField[]
     */
    public $department;
    /**
     * @var SearchColumnStringField[]
     */
    public $departmentnohierarchy;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $global;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $item;
    /**
     * @var SearchColumnStringField[]
     */
    public $location;
    /**
     * @var SearchColumnStringField[]
     */
    public $locationnohierarchy;
    /**
     * @var SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnStringField[]
     */
    public $subsidiarynohierarchy;
    /**
     * @var SearchColumnStringField[]
     */
    public $year;
    /**
     * @var SearchColumnStringField[]
     */
    public $year2;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'account' => 'SearchColumnStringField[]',
        'accountingBook' => 'SearchColumnStringField[]',
        'amount' => 'SearchColumnDoubleField[]',
        'category' => 'SearchColumnStringField[]',
        'class' => 'SearchColumnStringField[]',
        'classnohierarchy' => 'SearchColumnStringField[]',
        'currency' => 'SearchColumnStringField[]',
        'customer' => 'SearchColumnStringField[]',
        'department' => 'SearchColumnStringField[]',
        'departmentnohierarchy' => 'SearchColumnStringField[]',
        'global' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnStringField[]',
        'location' => 'SearchColumnStringField[]',
        'locationnohierarchy' => 'SearchColumnStringField[]',
        'subsidiary' => 'SearchColumnStringField[]',
        'subsidiarynohierarchy' => 'SearchColumnStringField[]',
        'year' => 'SearchColumnStringField[]',
        'year2' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
