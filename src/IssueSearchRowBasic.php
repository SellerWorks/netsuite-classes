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
 * IssueSearchRowBasic.
 */
class IssueSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnLongField[]
     */
    public $ageInMonths;
    /**
     * @var SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var SearchColumnSelectField[]
     */
    public $buildBroken;
    /**
     * @var SearchColumnSelectField[]
     */
    public $buildFixed;
    /**
     * @var SearchColumnSelectField[]
     */
    public $buildTarget;
    /**
     * @var SearchColumnLongField[]
     */
    public $caseCount;
    /**
     * @var SearchColumnStringField[]
     */
    public $caseNumber;
    /**
     * @var SearchColumnDateField[]
     */
    public $closedDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $dateReleased;
    /**
     * @var SearchColumnSelectField[]
     */
    public $duplicateOf;
    /**
     * @var SearchColumnSelectField[]
     */
    public $employeeOrTeam;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $eventStatus;
    /**
     * @var SearchColumnStringField[]
     */
    public $externalAbstract;
    /**
     * @var SearchColumnStringField[]
     */
    public $externalDetails;
    /**
     * @var SearchColumnStringField[]
     */
    public $externalFixedIn;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalStatus;
    /**
     * @var SearchColumnDateField[]
     */
    public $fixed;
    /**
     * @var SearchColumnSelectField[]
     */
    public $fixedBy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isOwner;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isReviewed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isShowStopper;
    /**
     * @var SearchColumnStringField[]
     */
    public $issueAbstract;
    /**
     * @var SearchColumnSelectField[]
     */
    public $issueStatus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $module;
    /**
     * @var SearchColumnStringField[]
     */
    public $number;
    /**
     * @var SearchColumnStringField[]
     */
    public $originalFixedIn;
    /**
     * @var SearchColumnSelectField[]
     */
    public $priority;
    /**
     * @var SearchColumnSelectField[]
     */
    public $product;
    /**
     * @var SearchColumnSelectField[]
     */
    public $productTeam;
    /**
     * @var SearchColumnSelectField[]
     */
    public $relatedIssue;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $relationship;
    /**
     * @var SearchColumnStringField[]
     */
    public $relationshipComment;
    /**
     * @var SearchColumnSelectField[]
     */
    public $reportedBy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $reproduce;
    /**
     * @var SearchColumnDateField[]
     */
    public $resolved;
    /**
     * @var SearchColumnSelectField[]
     */
    public $resolvedBy;
    /**
     * @var SearchColumnSelectField[]
     */
    public $reviewer;
    /**
     * @var SearchColumnSelectField[]
     */
    public $severity;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $source;
    /**
     * @var SearchColumnSelectField[]
     */
    public $tags;
    /**
     * @var SearchColumnStringField[]
     */
    public $type;
    /**
     * @var SearchColumnSelectField[]
     */
    public $userType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $versionBroken;
    /**
     * @var SearchColumnSelectField[]
     */
    public $versionFixed;
    /**
     * @var SearchColumnSelectField[]
     */
    public $versionTarget;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'ageInMonths' => 'SearchColumnLongField[]',
        'assigned' => 'SearchColumnSelectField[]',
        'buildBroken' => 'SearchColumnSelectField[]',
        'buildFixed' => 'SearchColumnSelectField[]',
        'buildTarget' => 'SearchColumnSelectField[]',
        'caseCount' => 'SearchColumnLongField[]',
        'caseNumber' => 'SearchColumnStringField[]',
        'closedDate' => 'SearchColumnDateField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'dateReleased' => 'SearchColumnDateField[]',
        'duplicateOf' => 'SearchColumnSelectField[]',
        'employeeOrTeam' => 'SearchColumnSelectField[]',
        'eventStatus' => 'SearchColumnEnumSelectField[]',
        'externalAbstract' => 'SearchColumnStringField[]',
        'externalDetails' => 'SearchColumnStringField[]',
        'externalFixedIn' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'externalStatus' => 'SearchColumnSelectField[]',
        'fixed' => 'SearchColumnDateField[]',
        'fixedBy' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isOwner' => 'SearchColumnBooleanField[]',
        'isReviewed' => 'SearchColumnBooleanField[]',
        'isShowStopper' => 'SearchColumnBooleanField[]',
        'issueAbstract' => 'SearchColumnStringField[]',
        'issueStatus' => 'SearchColumnSelectField[]',
        'item' => 'SearchColumnSelectField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'module' => 'SearchColumnStringField[]',
        'number' => 'SearchColumnStringField[]',
        'originalFixedIn' => 'SearchColumnStringField[]',
        'priority' => 'SearchColumnSelectField[]',
        'product' => 'SearchColumnSelectField[]',
        'productTeam' => 'SearchColumnSelectField[]',
        'relatedIssue' => 'SearchColumnSelectField[]',
        'relationship' => 'SearchColumnEnumSelectField[]',
        'relationshipComment' => 'SearchColumnStringField[]',
        'reportedBy' => 'SearchColumnSelectField[]',
        'reproduce' => 'SearchColumnSelectField[]',
        'resolved' => 'SearchColumnDateField[]',
        'resolvedBy' => 'SearchColumnSelectField[]',
        'reviewer' => 'SearchColumnSelectField[]',
        'severity' => 'SearchColumnSelectField[]',
        'source' => 'SearchColumnEnumSelectField[]',
        'tags' => 'SearchColumnSelectField[]',
        'type' => 'SearchColumnStringField[]',
        'userType' => 'SearchColumnSelectField[]',
        'versionBroken' => 'SearchColumnSelectField[]',
        'versionFixed' => 'SearchColumnSelectField[]',
        'versionTarget' => 'SearchColumnSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
