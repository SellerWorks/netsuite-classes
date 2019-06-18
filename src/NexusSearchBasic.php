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
 * NexusSearchBasic.
 */
class NexusSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $isInactive;
    /**
     * @var SearchMultiSelectField
     */
    public $parentNexus;
    /**
     * @var SearchMultiSelectField
     */
    public $state;
    /**
     * @var SearchMultiSelectField
     */
    public $taxAgency;
    /**
     * @var SearchBooleanField
     */
    public $taxDateFromFulfillment;

    public static $paramtypesmap = array(
        'country' => 'SearchEnumMultiSelectField',
        'description' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'parentNexus' => 'SearchMultiSelectField',
        'state' => 'SearchMultiSelectField',
        'taxAgency' => 'SearchMultiSelectField',
        'taxDateFromFulfillment' => 'SearchBooleanField',
    );
}
