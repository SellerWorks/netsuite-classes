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
 * TermSearchRowBasic.
 */
class TermSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnBooleanField[]
     */
    public $dateDriven;
    /**
     * @var SearchColumnLongField[]
     */
    public $dayDiscountExpires;
    /**
     * @var SearchColumnLongField[]
     */
    public $dayOfMonthNetDue;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysUntilExpiry;
    /**
     * @var SearchColumnLongField[]
     */
    public $daysUntilNetDue;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $discountPercent;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $discountPercentDateDriven;
    /**
     * @var SearchColumnLongField[]
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $preferred;

    public static $paramtypesmap = array(
        'dateDriven' => 'SearchColumnBooleanField[]',
        'dayDiscountExpires' => 'SearchColumnLongField[]',
        'dayOfMonthNetDue' => 'SearchColumnLongField[]',
        'daysUntilExpiry' => 'SearchColumnLongField[]',
        'daysUntilNetDue' => 'SearchColumnLongField[]',
        'discountPercent' => 'SearchColumnDoubleField[]',
        'discountPercentDateDriven' => 'SearchColumnDoubleField[]',
        'dueNextMonthIfWithinDays' => 'SearchColumnLongField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'preferred' => 'SearchColumnBooleanField[]',
    );
}
