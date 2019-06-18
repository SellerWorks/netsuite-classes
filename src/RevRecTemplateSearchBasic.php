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
 * RevRecTemplateSearchBasic.
 */
class RevRecTemplateSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchEnumMultiSelectField
     */
    public $amorMethod;
    /**
     * @var SearchLongField
     */
    public $amorPeriod;
    /**
     * @var SearchLongField
     */
    public $amorStartOffset;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $amorTermSrc;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $amorType;
    /**
     * @var SearchMultiSelectField
     */
    public $contraAccount;
    /**
     * @var SearchMultiSelectField
     */
    public $deferralAccount;
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
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchLongField
     */
    public $periodOffset;
    /**
     * @var SearchMultiSelectField
     */
    public $targetAccount;
    /**
     * @var SearchBooleanField
     */
    public $useForeignAmounts;

    public static $paramtypesmap = array(
        'amorMethod' => 'SearchEnumMultiSelectField',
        'amorPeriod' => 'SearchLongField',
        'amorStartOffset' => 'SearchLongField',
        'amorTermSrc' => 'SearchEnumMultiSelectField',
        'amorType' => 'SearchEnumMultiSelectField',
        'contraAccount' => 'SearchMultiSelectField',
        'deferralAccount' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'periodOffset' => 'SearchLongField',
        'targetAccount' => 'SearchMultiSelectField',
        'useForeignAmounts' => 'SearchBooleanField',
    );
}
