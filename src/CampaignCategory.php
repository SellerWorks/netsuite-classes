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
 * CampaignCategory
 */
class CampaignCategory extends Record
{
    /**
     * @access public
     * @var string
     */
    public $name;
    /**
     * @access public
     * @var RecordRef
     */
    public $parent;
    /**
     * @access public
     * @var RecordRef
     */
    public $leadSource;
    /**
     * @access public
     * @var string
     */
    public $description;
    /**
     * @access public
     * @var boolean
     */
    public $isexternal;
    /**
     * @access public
     * @var boolean
     */
    public $isInactive;
    /**
     * @access public
     * @var string
     */
    public $internalId;
    /**
     * @access public
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = array(
        "name" => "string",
        "parent" => "RecordRef",
        "leadSource" => "RecordRef",
        "description" => "string",
        "isexternal" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
