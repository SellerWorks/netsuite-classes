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
 * TaxTypeSearchRowBasic
 */
class TaxTypeSearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $doesNotAddToTotal;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;
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
     * @var SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $payablesAccount;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $postToItemCost;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $receivablesAccount;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $reverseCharge;
    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $taxInNetAmount;

    public static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "doesNotAddToTotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "postToItemCost" => "SearchColumnBooleanField[]",
        "receivablesAccount" => "SearchColumnSelectField[]",
        "reverseCharge" => "SearchColumnBooleanField[]",
        "taxInNetAmount" => "SearchColumnBooleanField[]",
    );
}
