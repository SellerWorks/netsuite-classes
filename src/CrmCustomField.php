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
 * CrmCustomField.
 */
class CrmCustomField extends CustomFieldType
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
     * @var bool
     */
    public $globalSearch;
    /**
     * @var bool
     */
    public $isParent;
    /**
     * @var RecordRef
     */
    public $insertBefore;
    /**
     * @var RecordRef
     */
    public $subtab;
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
     * @var RecordRef
     */
    public $parentSubtab;
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
     * @var RecordRef
     */
    public $customSegment;
    /**
     * @var bool
     */
    public $appliesToTask;
    /**
     * @var bool
     */
    public $appliesToMfgProjectTask;
    /**
     * @var bool
     */
    public $appliesToProjectTask;
    /**
     * @var bool
     */
    public $appliesToPhoneCall;
    /**
     * @var bool
     */
    public $appliesToEvent;
    /**
     * @var bool
     */
    public $appliesToCase;
    /**
     * @var bool
     */
    public $appliesToCampaign;
    /**
     * @var bool
     */
    public $appliesPerKeyword;
    /**
     * @var bool
     */
    public $appliesToSolution;
    /**
     * @var bool
     */
    public $appliesToIssue;
    /**
     * @var bool
     */
    public $availableExternally;
    /**
     * @var bool
     */
    public $availableToSso;
    /**
     * @var bool
     */
    public $showIssueChanges;
    /**
     * @var CrmCustomFieldFilterList
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

    public static $paramtypesmap = [
        'label' => 'string',
        'owner' => 'RecordRef',
        'description' => 'string',
        'selectRecordType' => 'RecordRef',
        'storeValue' => 'boolean',
        'showInList' => 'boolean',
        'globalSearch' => 'boolean',
        'isParent' => 'boolean',
        'insertBefore' => 'RecordRef',
        'subtab' => 'RecordRef',
        'displayType' => 'CustomizationDisplayType',
        'displayWidth' => 'integer',
        'displayHeight' => 'integer',
        'help' => 'string',
        'parentSubtab' => 'RecordRef',
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
        'customSegment' => 'RecordRef',
        'appliesToTask' => 'boolean',
        'appliesToMfgProjectTask' => 'boolean',
        'appliesToProjectTask' => 'boolean',
        'appliesToPhoneCall' => 'boolean',
        'appliesToEvent' => 'boolean',
        'appliesToCase' => 'boolean',
        'appliesToCampaign' => 'boolean',
        'appliesPerKeyword' => 'boolean',
        'appliesToSolution' => 'boolean',
        'appliesToIssue' => 'boolean',
        'availableExternally' => 'boolean',
        'availableToSso' => 'boolean',
        'showIssueChanges' => 'boolean',
        'filterList' => 'CrmCustomFieldFilterList',
        'accessLevel' => 'CustomizationAccessLevel',
        'searchLevel' => 'CustomizationSearchLevel',
        'roleAccessList' => 'CustomFieldRoleAccessList',
        'deptAccessList' => 'CustomFieldDepartmentAccessList',
        'subAccessList' => 'CustomFieldSubAccessList',
        'translationsList' => 'CustomFieldTranslationsList',
        'internalId' => 'string',
    ];
}
