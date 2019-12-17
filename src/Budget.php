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
 * Budget.
 */
class Budget extends Record
{
    /**
     * @var RecordRef
     */
    public $year;
    /**
     * @var RecordRef
     */
    public $customer;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var RecordRef
     */
    public $account;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $category;
    /**
     * @var BudgetBudgetType
     */
    public $budgetType;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $periodAmount1;
    /**
     * @var float
     */
    public $periodAmount2;
    /**
     * @var float
     */
    public $periodAmount3;
    /**
     * @var float
     */
    public $periodAmount4;
    /**
     * @var float
     */
    public $periodAmount5;
    /**
     * @var float
     */
    public $periodAmount6;
    /**
     * @var float
     */
    public $periodAmount7;
    /**
     * @var float
     */
    public $periodAmount8;
    /**
     * @var float
     */
    public $periodAmount9;
    /**
     * @var float
     */
    public $periodAmount10;
    /**
     * @var float
     */
    public $periodAmount11;
    /**
     * @var float
     */
    public $periodAmount12;
    /**
     * @var float
     */
    public $periodAmount13;
    /**
     * @var float
     */
    public $periodAmount14;
    /**
     * @var float
     */
    public $periodAmount15;
    /**
     * @var float
     */
    public $periodAmount16;
    /**
     * @var float
     */
    public $periodAmount17;
    /**
     * @var float
     */
    public $periodAmount18;
    /**
     * @var float
     */
    public $periodAmount19;
    /**
     * @var float
     */
    public $periodAmount20;
    /**
     * @var float
     */
    public $periodAmount21;
    /**
     * @var float
     */
    public $periodAmount22;
    /**
     * @var float
     */
    public $periodAmount23;
    /**
     * @var float
     */
    public $periodAmount24;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'year' => 'RecordRef',
        'customer' => 'RecordRef',
        'item' => 'RecordRef',
        'class' => 'RecordRef',
        'department' => 'RecordRef',
        'location' => 'RecordRef',
        'account' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'category' => 'RecordRef',
        'budgetType' => 'BudgetBudgetType',
        'currency' => 'RecordRef',
        'periodAmount1' => 'float',
        'periodAmount2' => 'float',
        'periodAmount3' => 'float',
        'periodAmount4' => 'float',
        'periodAmount5' => 'float',
        'periodAmount6' => 'float',
        'periodAmount7' => 'float',
        'periodAmount8' => 'float',
        'periodAmount9' => 'float',
        'periodAmount10' => 'float',
        'periodAmount11' => 'float',
        'periodAmount12' => 'float',
        'periodAmount13' => 'float',
        'periodAmount14' => 'float',
        'periodAmount15' => 'float',
        'periodAmount16' => 'float',
        'periodAmount17' => 'float',
        'periodAmount18' => 'float',
        'periodAmount19' => 'float',
        'periodAmount20' => 'float',
        'periodAmount21' => 'float',
        'periodAmount22' => 'float',
        'periodAmount23' => 'float',
        'periodAmount24' => 'float',
        'amount' => 'float',
        'accountingBook' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
    ];
}
