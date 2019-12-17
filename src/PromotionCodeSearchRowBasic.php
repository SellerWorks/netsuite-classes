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
 * PromotionCodeSearchRowBasic
 */
class PromotionCodeSearchRowBasic extends SearchRowBasic
{
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $code;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $discount;
    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;
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
     * @var SearchColumnBooleanField[]
     */
    public $isPublic;
    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "description" => "SearchColumnStringField[]",
        "discount" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
