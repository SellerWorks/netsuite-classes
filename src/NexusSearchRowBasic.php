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
 * NexusSearchRowBasic.
 */
class NexusSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
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
     * @var SearchColumnSelectField[]
     */
    public $parentNexus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $state;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxAgency;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $taxDateFromFulfillment;

    public static $paramtypesmap = array(
        'country' => 'SearchColumnEnumSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'parentNexus' => 'SearchColumnSelectField[]',
        'state' => 'SearchColumnSelectField[]',
        'taxAgency' => 'SearchColumnSelectField[]',
        'taxDateFromFulfillment' => 'SearchColumnBooleanField[]',
    );
}
