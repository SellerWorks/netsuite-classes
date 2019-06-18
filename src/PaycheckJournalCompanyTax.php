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
 * PaycheckJournalCompanyTax.
 */
class PaycheckJournalCompanyTax
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var RecordRef
     */
    public $payrollItem;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var RecordRef
     */
    public $department;
    /**
     * @var RecordRef
     */
    public $class;
    /**
     * @var RecordRef
     */
    public $location;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'id' => 'integer',
        'payrollItem' => 'RecordRef',
        'amount' => 'float',
        'department' => 'RecordRef',
        'class' => 'RecordRef',
        'location' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
    );
}
