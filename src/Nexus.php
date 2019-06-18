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
 * Nexus.
 */
class Nexus extends Record
{
    /**
     * @var Country
     */
    public $country;
    /**
     * @var RecordRef
     */
    public $state;
    /**
     * @var RecordRef
     */
    public $taxAgency;
    /**
     * @var RecordRef
     */
    public $taxAgencyPst;
    /**
     * @var RecordRef
     */
    public $taxCode;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $parentNexus;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var bool
     */
    public $taxDateFromFulfillment;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'country' => 'Country',
        'state' => 'RecordRef',
        'taxAgency' => 'RecordRef',
        'taxAgencyPst' => 'RecordRef',
        'taxCode' => 'RecordRef',
        'description' => 'string',
        'parentNexus' => 'RecordRef',
        'isInactive' => 'boolean',
        'taxDateFromFulfillment' => 'boolean',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
