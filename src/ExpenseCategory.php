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
 * ExpenseCategory.
 */
class ExpenseCategory extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $expenseAcct;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $rateRequired;
    /**
     * @var RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var float
     */
    public $defaultRate;
    /**
     * @var ExpenseCategoryRatesList
     */
    public $ratesList;
    /**
     * @var TranslationList
     */
    public $translationsList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'name' => 'string',
        'description' => 'string',
        'expenseAcct' => 'RecordRef',
        'isInactive' => 'boolean',
        'rateRequired' => 'boolean',
        'subsidiaryList' => 'RecordRefList',
        'defaultRate' => 'float',
        'ratesList' => 'ExpenseCategoryRatesList',
        'translationsList' => 'TranslationList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
