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
 * UnitsTypeSearchBasic.
 */
class UnitsTypeSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchStringField
     */
    public $abbreviation;
    /**
     * @var SearchBooleanField
     */
    public $baseUnit;
    /**
     * @var SearchStringField
     */
    public $conversionRate;
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
    public $isInActive;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchStringField
     */
    public $pluralAbbreviation;
    /**
     * @var SearchStringField
     */
    public $pluralName;
    /**
     * @var SearchStringField
     */
    public $unitName;

    public static $paramtypesmap = array(
        'abbreviation' => 'SearchStringField',
        'baseUnit' => 'SearchBooleanField',
        'conversionRate' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInActive' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'pluralAbbreviation' => 'SearchStringField',
        'pluralName' => 'SearchStringField',
        'unitName' => 'SearchStringField',
    );
}
