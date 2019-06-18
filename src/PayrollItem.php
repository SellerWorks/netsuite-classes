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
 * PayrollItem.
 */
class PayrollItem extends Record
{
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $itemType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var RecordRef
     */
    public $vendor;
    /**
     * @var RecordRef
     */
    public $expenseAccount;
    /**
     * @var RecordRef
     */
    public $liabilityAccount;
    /**
     * @var bool
     */
    public $employeePaid;
    /**
     * @var PayrollItemAccountCategory
     */
    public $accountCategory;
    /**
     * @var bool
     */
    public $inactive;
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

    public static $paramtypesmap = array(
        'subsidiary' => 'RecordRef',
        'itemType' => 'RecordRef',
        'name' => 'string',
        'vendor' => 'RecordRef',
        'expenseAccount' => 'RecordRef',
        'liabilityAccount' => 'RecordRef',
        'employeePaid' => 'boolean',
        'accountCategory' => 'PayrollItemAccountCategory',
        'inactive' => 'boolean',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
