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
 * TermSearchRowBasic
 */
class TermSearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $dateDriven;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dayDiscountExpires;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dayOfMonthNetDue;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysUntilExpiry;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysUntilNetDue;
    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountPercent;
    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountPercentDateDriven;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $installment;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $preferred;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $recurrenceCount;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $recurrenceFrequency;
    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $repeatEvery;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $splitEvenly;

    public static $paramtypesmap = array(
        "dateDriven" => "SearchColumnBooleanField[]",
        "dayDiscountExpires" => "SearchColumnLongField[]",
        "dayOfMonthNetDue" => "SearchColumnLongField[]",
        "daysUntilExpiry" => "SearchColumnLongField[]",
        "daysUntilNetDue" => "SearchColumnLongField[]",
        "discountPercent" => "SearchColumnDoubleField[]",
        "discountPercentDateDriven" => "SearchColumnDoubleField[]",
        "dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "installment" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "preferred" => "SearchColumnBooleanField[]",
        "recurrenceCount" => "SearchColumnLongField[]",
        "recurrenceFrequency" => "SearchColumnStringField[]",
        "repeatEvery" => "SearchColumnLongField[]",
        "splitEvenly" => "SearchColumnBooleanField[]",
    );
}
