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
 * SubsidiaryTaxRegistration.
 */
class SubsidiaryTaxRegistration
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var Country
     */
    public $nexusCountry;
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $taxAgency;
    /**
     * @var string
     */
    public $taxRegistrationNumber;
    /**
     * @var RecordRef
     */
    public $taxEngine;
    /**
     * @var dateTime
     */
    public $effectiveFrom;
    /**
     * @var dateTime
     */
    public $validUntil;

    public static $paramtypesmap = [
        'id' => 'integer',
        'nexusCountry' => 'Country',
        'nexus' => 'RecordRef',
        'taxAgency' => 'RecordRef',
        'taxRegistrationNumber' => 'string',
        'taxEngine' => 'RecordRef',
        'effectiveFrom' => 'dateTime',
        'validUntil' => 'dateTime',
    ];
}
