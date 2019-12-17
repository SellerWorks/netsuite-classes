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
 * VendorCategorySearchRowBasic
 */
class VendorCategorySearchRowBasic extends SearchRowBasic
{
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
    public $isTaxAgency;
    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    public static $paramtypesmap = array(
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isTaxAgency" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
    );
}
