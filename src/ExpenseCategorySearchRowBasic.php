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
 * ExpenseCategorySearchRowBasic
 */
class ExpenseCategorySearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $account;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;
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
     * @var SearchColumnBooleanField[]
     */
    public $rateRequired;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "rateRequired" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
