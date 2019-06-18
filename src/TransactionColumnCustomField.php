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
 * TransactionColumnCustomField.
 */
class TransactionColumnCustomField extends CustomFieldType
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
     * @var bool
     */
    public $availableToSso;
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
     * @var RecordRef
     */
    public $customSegment;
    /**
     * @var bool
     */
    public $colExpense;
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
    public $colJournal;
    /**
     * @var bool
     */
    public $colBuild;
    /**
     * @var bool
     */
    public $colExpenseReport;
    /**
     * @var bool
     */
    public $colTime;
    /**
     * @var bool
     */
    public $colTransferOrder;
    /**
     * @var bool
     */
    public $colTimeGroup;
    /**
     * @var bool
     */
    public $colItemReceipt;
    /**
     * @var bool
     */
    public $colItemReceiptOrder;
    /**
     * @var bool
     */
    public $colItemFulfillment;
    /**
     * @var bool
     */
    public $colItemFulfillmentOrder;
    /**
     * @var bool
     */
    public $colPrintFlag;
    /**
     * @var bool
     */
    public $colPickingTicket;
    /**
     * @var bool
     */
    public $colPackingSlip;
    /**
     * @var bool
     */
    public $colReturnForm;
    /**
     * @var bool
     */
    public $colStoreWithGroups;
    /**
     * @var bool
     */
    public $colGroupOnInvoices;
    /**
     * @var bool
     */
    public $colKitItem;
    /**
     * @var TransactionColumnCustomFieldFilterList
     */
    public $filterList;
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

    public static $paramtypesmap = array(
        'label' => 'string',
        'owner' => 'RecordRef',
        'description' => 'string',
        'selectRecordType' => 'RecordRef',
        'storeValue' => 'boolean',
        'insertBefore' => 'RecordRef',
        'availableToSso' => 'boolean',
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
        'sourceList' => 'RecordRef',
        'sourceFrom' => 'RecordRef',
        'sourceFilterBy' => 'RecordRef',
        'customSegment' => 'RecordRef',
        'colExpense' => 'boolean',
        'colPurchase' => 'boolean',
        'colSale' => 'boolean',
        'colOpportunity' => 'boolean',
        'colStore' => 'boolean',
        'colStoreHidden' => 'boolean',
        'colJournal' => 'boolean',
        'colBuild' => 'boolean',
        'colExpenseReport' => 'boolean',
        'colTime' => 'boolean',
        'colTransferOrder' => 'boolean',
        'colTimeGroup' => 'boolean',
        'colItemReceipt' => 'boolean',
        'colItemReceiptOrder' => 'boolean',
        'colItemFulfillment' => 'boolean',
        'colItemFulfillmentOrder' => 'boolean',
        'colPrintFlag' => 'boolean',
        'colPickingTicket' => 'boolean',
        'colPackingSlip' => 'boolean',
        'colReturnForm' => 'boolean',
        'colStoreWithGroups' => 'boolean',
        'colGroupOnInvoices' => 'boolean',
        'colKitItem' => 'boolean',
        'filterList' => 'TransactionColumnCustomFieldFilterList',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
        'roleAccessList' => 'CustomFieldRoleAccessList',
        'deptAccessList' => 'CustomFieldDepartmentAccessList',
        'subAccessList' => 'CustomFieldSubAccessList',
        'translationsList' => 'CustomFieldTranslationsList',
        'internalId' => 'string',
    );
}
