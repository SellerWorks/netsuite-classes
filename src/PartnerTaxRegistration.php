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
 * PartnerTaxRegistration
 */
class PartnerTaxRegistration
{
    /**
     * @access public
     * @var Country
     */
    public $nexusCountry;
    /**
     * @access public
     * @var RecordRef
     */
    public $nexus;
    /**
     * @access public
     * @var RecordRef
     */
    public $address;
    /**
     * @access public
     * @var string
     */
    public $taxRegistrationNumber;
    /**
     * @access public
     * @var integer
     */
    public $id;

    public static $paramtypesmap = array(
        "nexusCountry" => "Country",
        "nexus" => "RecordRef",
        "address" => "RecordRef",
        "taxRegistrationNumber" => "string",
        "id" => "integer",
    );
}
