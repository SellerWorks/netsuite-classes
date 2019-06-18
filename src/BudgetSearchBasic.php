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
 * BudgetSearchBasic.
 */
class BudgetSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var SearchDoubleField
     */
    public $amount;
    /**
     * @var SearchMultiSelectField
     */
    public $category;
    /**
     * @var SearchMultiSelectField
     */
    public $class;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchMultiSelectField
     */
    public $department;
    /**
     * @var SearchBooleanField
     */
    public $global;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchMultiSelectField
     */
    public $location;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $year;
    /**
     * @var SearchMultiSelectField
     */
    public $year2;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'account' => 'SearchMultiSelectField',
        'accountingBook' => 'SearchMultiSelectField',
        'amount' => 'SearchDoubleField',
        'category' => 'SearchMultiSelectField',
        'class' => 'SearchMultiSelectField',
        'currency' => 'SearchMultiSelectField',
        'customer' => 'SearchMultiSelectField',
        'department' => 'SearchMultiSelectField',
        'global' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'location' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'year' => 'SearchMultiSelectField',
        'year2' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
