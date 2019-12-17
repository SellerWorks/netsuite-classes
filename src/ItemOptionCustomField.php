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
 * ItemOptionCustomField.
 */
class ItemOptionCustomField extends CustomFieldType
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
     * @var bool
     */
    public $colPurchase;
    /**
     * @var bool
     */
    public $colSale;
    /**
     * @var bool
     */
    public $colOpportunity;
    /**
     * @var bool
     */
    public $colStore;
    /**
     * @var bool
     */
    public $colStoreHidden;
    /**
     * @var bool
     */
    public $colTransferOrder;
    /**
     * @var bool
     */
    public $colAllItems;
    /**
     * @var ItemsList
     */
    public $itemsList;
    /**
     * @var bool
     */
    public $colKitItem;
    /**
     * @var ItemOptionCustomFieldFilterList
     */
    public $filterList;
    /**
     * @var string
     */
    public $colOptionLabel;
    /**
     * @var CustomizationAccessLevel
     */
    public $accessLevel;
    /**
     * @var CustomizationSearchLevel
     */
    public $searchLevel;
    /**
     * @var CustomFieldRoleAccessList
     */
    public $roleAccessList;
    /**
     * @var CustomFieldDepartmentAccessList
     */
    public $deptAccessList;
    /**
     * @var CustomFieldSubAccessList
     */
    public $subAccessList;
    /**
     * @var CustomFieldTranslationsList
     */
    public $translationsList;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = [
        'label' => 'string',
        'owner' => 'RecordRef',
        'description' => 'string',
        'selectRecordType' => 'RecordRef',
        'storeValue' => 'boolean',
        'insertBefore' => 'RecordRef',
        'displayType' => 'CustomizationDisplayType',
        'displayWidth' => 'integer',
        'displayHeight' => 'integer',
        'help' => 'string',
        'linkText' => 'string',
        'isMandatory' => 'boolean',
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
        'colPurchase' => 'boolean',
        'colSale' => 'boolean',
        'colOpportunity' => 'boolean',
        'colStore' => 'boolean',
        'colStoreHidden' => 'boolean',
        'colTransferOrder' => 'boolean',
        'colAllItems' => 'boolean',
        'itemsList' => 'ItemsList',
        'colKitItem' => 'boolean',
        'filterList' => 'ItemOptionCustomFieldFilterList',
        'colOptionLabel' => 'string',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
        'roleAccessList' => 'CustomFieldRoleAccessList',
        'deptAccessList' => 'CustomFieldDepartmentAccessList',
        'subAccessList' => 'CustomFieldSubAccessList',
        'translationsList' => 'CustomFieldTranslationsList',
        'internalId' => 'string',
    ];
}
