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
 * RevRecTemplateSearchRowBasic.
 */
class RevRecTemplateSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $amorMethod;
    /**
     * @var SearchColumnStringField[]
     */
    public $amorPeriod;
    /**
     * @var SearchColumnStringField[]
     */
    public $amorStartOffset;
    /**
     * @var SearchColumnStringField[]
     */
    public $amorTermSrc;
    /**
     * @var SearchColumnStringField[]
     */
    public $amorType;
    /**
     * @var SearchColumnStringField[]
     */
    public $contraAccount;
    /**
     * @var SearchColumnStringField[]
     */
    public $deferralAccount;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $periodOffset;
    /**
     * @var SearchColumnStringField[]
     */
    public $targetAccount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $useForeignAmounts;

    public static $paramtypesmap = array(
        'amorMethod' => 'SearchColumnStringField[]',
        'amorPeriod' => 'SearchColumnStringField[]',
        'amorStartOffset' => 'SearchColumnStringField[]',
        'amorTermSrc' => 'SearchColumnStringField[]',
        'amorType' => 'SearchColumnStringField[]',
        'contraAccount' => 'SearchColumnStringField[]',
        'deferralAccount' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'periodOffset' => 'SearchColumnStringField[]',
        'targetAccount' => 'SearchColumnStringField[]',
        'useForeignAmounts' => 'SearchColumnBooleanField[]',
    );
}
