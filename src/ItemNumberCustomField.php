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
 * ItemNumberCustomField.
 */
class ItemNumberCustomField extends CustomFieldType
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $selectRecordType;
    /**
     * @var bool
     */
    public $storeValue;
    /**
     * @var bool
     */
    public $showInList;
    /**
     * @var RecordRef
     */
    public $insertBefore;
    /**
     * @var CustomizationDisplayType
     */
    public $displayType;
    /**
     * @var int
     */
    public $displayWidth;
    /**
     * @var int
     */
    public $displayHeight;
    /**
     * @var string
     */
    public $help;
    /**
     * @var string
     */
    public $linkText;
    /**
     * @var bool
     */
    public $isMandatory;
    /**
     * @var bool
     */
    public $checkSpelling;
    /**
     * @var int
     */
    public $maxLength;
    /**
     * @var float
     */
    public $minValue;
    /**
     * @var float
     */
    public $maxValue;
    /**
     * @var bool
     */
    public $defaultChecked;
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var bool
     */
    public $isFormula;
    /**
     * @var RecordRef
     */
    public $defaultSelection;
    /**
     * @var CustomizationDynamicDefault
     */
    public $dynamicDefault;
    /**
     * @var RecordRef
     */
    public $searchDefault;
    /**
     * @var RecordRef
     */
    public $searchCompareField;
    /**
     * @var RecordRef
     */
    public $sourceList;
    /**
     * @var RecordRef
     */
    public $sourceFrom;
    /**
     * @var RecordRef
     */
    public $sourceFilterBy;
    /**
     * @var CustomizationAccessLevel
     */
    public $accessLevel;
    /**
     * @var CustomizationSearchLevel
     */
    public $searchLevel;
    /**
     * @var ItemNumberCustomFieldFilterList
     */
    public $filterList;
    /**
     * @var CustomFieldRoleAccessList
     */
    public $roleAccessList;
    /**
     * @var CustomFieldDepartmentAccessList
     */
    public $deptAccessList;
    /**
     * @var bool
     */
    public $appliesToAllItems;
    /**
     * @var bool
     */
    public $appliesToSerialized;
    /**
     * @var bool
     */
    public $appliesToLots;
    /**
     * @var bool
     */
    public $appliesToGiftCerts;
    /**
     * @var RecordRefList
     */
    public $itemsList;
    /**
     * @var CustomFieldTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'label' => 'string',
        'owner' => 'RecordRef',
        'description' => 'string',
        'selectRecordType' => 'RecordRef',
        'storeValue' => 'boolean',
        'showInList' => 'boolean',
        'insertBefore' => 'RecordRef',
        'displayType' => 'CustomizationDisplayType',
        'displayWidth' => 'integer',
        'displayHeight' => 'integer',
        'help' => 'string',
        'linkText' => 'string',
        'isMandatory' => 'boolean',
        'checkSpelling' => 'boolean',
        'maxLength' => 'integer',
        'minValue' => 'float',
        'maxValue' => 'float',
        'defaultChecked' => 'boolean',
        'defaultValue' => 'string',
        'isFormula' => 'boolean',
        'defaultSelection' => 'RecordRef',
        'dynamicDefault' => 'CustomizationDynamicDefault',
        'searchDefault' => 'RecordRef',
        'searchCompareField' => 'RecordRef',
        'sourceList' => 'RecordRef',
        'sourceFrom' => 'RecordRef',
        'sourceFilterBy' => 'RecordRef',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
        'filterList' => 'ItemNumberCustomFieldFilterList',
        'roleAccessList' => 'CustomFieldRoleAccessList',
        'deptAccessList' => 'CustomFieldDepartmentAccessList',
        'appliesToAllItems' => 'boolean',
        'appliesToSerialized' => 'boolean',
        'appliesToLots' => 'boolean',
        'appliesToGiftCerts' => 'boolean',
        'itemsList' => 'RecordRefList',
        'translationsList' => 'CustomFieldTranslationsList',
        'internalId' => 'string',
    );
}
