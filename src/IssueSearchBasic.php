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
 * IssueSearchBasic.
 */
class IssueSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchLongField
     */
    public $ageInMonths;
    /**
     * @var SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var SearchMultiSelectField
     */
    public $buildBroken;
    /**
     * @var SearchStringField
     */
    public $buildBrokenName;
    /**
     * @var SearchMultiSelectField
     */
    public $buildFixed;
    /**
     * @var SearchStringField
     */
    public $buildFixedName;
    /**
     * @var SearchMultiSelectField
     */
    public $buildTarget;
    /**
     * @var SearchStringField
     */
    public $buildTargetName;
    /**
     * @var SearchLongField
     */
    public $caseCount;
    /**
     * @var SearchStringField
     */
    public $caseNumber;
    /**
     * @var SearchDateField
     */
    public $closedDate;
    /**
     * @var SearchDateField
     */
    public $createdDate;
    /**
     * @var SearchDateField
     */
    public $dateReleased;
    /**
     * @var SearchStringField
     */
    public $details;
    /**
     * @var SearchMultiSelectField
     */
    public $duplicateOf;
    /**
     * @var SearchBooleanField
     */
    public $eFix;
    /**
     * @var SearchMultiSelectField
     */
    public $employeeOrTeam;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $eventStatus;
    /**
     * @var SearchStringField
     */
    public $externalAbstract;
    /**
     * @var SearchStringField
     */
    public $externalDetails;
    /**
     * @var SearchMultiSelectField
     */
    public $externalFixedIn;
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
    public $externalStatus;
    /**
     * @var SearchDateField
     */
    public $fixed;
    /**
     * @var SearchMultiSelectField
     */
    public $fixedBy;
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
    public $isOwner;
    /**
     * @var SearchBooleanField
     */
    public $isReviewed;
    /**
     * @var SearchBooleanField
     */
    public $isShowStopper;
    /**
     * @var SearchStringField
     */
    public $issueAbstract;
    /**
     * @var SearchStringField
     */
    public $issueNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var SearchMultiSelectField
     */
    public $module;
    /**
     * @var SearchLongField
     */
    public $number;
    /**
     * @var SearchStringField
     */
    public $originalFixedIn;
    /**
     * @var SearchMultiSelectField
     */
    public $priority;
    /**
     * @var SearchMultiSelectField
     */
    public $product;
    /**
     * @var SearchMultiSelectField
     */
    public $productTeam;
    /**
     * @var SearchMultiSelectField
     */
    public $relatedIssue;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $relationship;
    /**
     * @var SearchStringField
     */
    public $relationshipComment;
    /**
     * @var SearchMultiSelectField
     */
    public $reportedBy;
    /**
     * @var SearchMultiSelectField
     */
    public $reproduce;
    /**
     * @var SearchDateField
     */
    public $resolved;
    /**
     * @var SearchMultiSelectField
     */
    public $resolvedBy;
    /**
     * @var SearchMultiSelectField
     */
    public $reviewer;
    /**
     * @var SearchMultiSelectField
     */
    public $severity;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $source;
    /**
     * @var SearchMultiSelectField
     */
    public $status;
    /**
     * @var SearchMultiSelectField
     */
    public $tags;
    /**
     * @var SearchBooleanField
     */
    public $tracking;
    /**
     * @var SearchMultiSelectField
     */
    public $type;
    /**
     * @var SearchMultiSelectField
     */
    public $userType;
    /**
     * @var SearchMultiSelectField
     */
    public $versionBroken;
    /**
     * @var SearchMultiSelectField
     */
    public $versionFixed;
    /**
     * @var SearchMultiSelectField
     */
    public $versionTarget;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'ageInMonths' => 'SearchLongField',
        'assigned' => 'SearchMultiSelectField',
        'buildBroken' => 'SearchMultiSelectField',
        'buildBrokenName' => 'SearchStringField',
        'buildFixed' => 'SearchMultiSelectField',
        'buildFixedName' => 'SearchStringField',
        'buildTarget' => 'SearchMultiSelectField',
        'buildTargetName' => 'SearchStringField',
        'caseCount' => 'SearchLongField',
        'caseNumber' => 'SearchStringField',
        'closedDate' => 'SearchDateField',
        'createdDate' => 'SearchDateField',
        'dateReleased' => 'SearchDateField',
        'details' => 'SearchStringField',
        'duplicateOf' => 'SearchMultiSelectField',
        'eFix' => 'SearchBooleanField',
        'employeeOrTeam' => 'SearchMultiSelectField',
        'eventStatus' => 'SearchEnumMultiSelectField',
        'externalAbstract' => 'SearchStringField',
        'externalDetails' => 'SearchStringField',
        'externalFixedIn' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'externalStatus' => 'SearchMultiSelectField',
        'fixed' => 'SearchDateField',
        'fixedBy' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isOwner' => 'SearchBooleanField',
        'isReviewed' => 'SearchBooleanField',
        'isShowStopper' => 'SearchBooleanField',
        'issueAbstract' => 'SearchStringField',
        'issueNumber' => 'SearchStringField',
        'item' => 'SearchMultiSelectField',
        'lastModifiedDate' => 'SearchDateField',
        'module' => 'SearchMultiSelectField',
        'number' => 'SearchLongField',
        'originalFixedIn' => 'SearchStringField',
        'priority' => 'SearchMultiSelectField',
        'product' => 'SearchMultiSelectField',
        'productTeam' => 'SearchMultiSelectField',
        'relatedIssue' => 'SearchMultiSelectField',
        'relationship' => 'SearchEnumMultiSelectField',
        'relationshipComment' => 'SearchStringField',
        'reportedBy' => 'SearchMultiSelectField',
        'reproduce' => 'SearchMultiSelectField',
        'resolved' => 'SearchDateField',
        'resolvedBy' => 'SearchMultiSelectField',
        'reviewer' => 'SearchMultiSelectField',
        'severity' => 'SearchMultiSelectField',
        'source' => 'SearchEnumMultiSelectField',
        'status' => 'SearchMultiSelectField',
        'tags' => 'SearchMultiSelectField',
        'tracking' => 'SearchBooleanField',
        'type' => 'SearchMultiSelectField',
        'userType' => 'SearchMultiSelectField',
        'versionBroken' => 'SearchMultiSelectField',
        'versionFixed' => 'SearchMultiSelectField',
        'versionTarget' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
