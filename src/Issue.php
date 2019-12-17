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
 * Issue.
 */
class Issue extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $issueNumber;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var RecordRef
     */
    public $issueType;
    /**
     * @var RecordRef
     */
    public $product;
    /**
     * @var RecordRef
     */
    public $module;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $productTeam;
    /**
     * @var RecordRef
     */
    public $source;
    /**
     * @var RecordRef
     */
    public $reportedBy;
    /**
     * @var RecordRef
     */
    public $reproduce;
    /**
     * @var RecordRef
     */
    public $versionBroken;
    /**
     * @var RecordRef
     */
    public $buildBroken;
    /**
     * @var RecordRef
     */
    public $versionTarget;
    /**
     * @var RecordRef
     */
    public $buildTarget;
    /**
     * @var RecordRef
     */
    public $versionFixed;
    /**
     * @var RecordRef
     */
    public $buildFixed;
    /**
     * @var RecordRef
     */
    public $severity;
    /**
     * @var RecordRef
     */
    public $priority;
    /**
     * @var bool
     */
    public $isShowStopper;
    /**
     * @var RecordRef
     */
    public $assigned;
    /**
     * @var RecordRef
     */
    public $reviewer;
    /**
     * @var bool
     */
    public $isReviewed;
    /**
     * @var RecordRef
     */
    public $issueStatus;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRefList
     */
    public $issueTagsList;
    /**
     * @var string
     */
    public $issueAbstract;
    /**
     * @var string
     */
    public $newDetails;
    /**
     * @var bool
     */
    public $isOwner;
    /**
     * @var IssueTrackCode
     */
    public $trackCode;
    /**
     * @var bool
     */
    public $emailAssignee;
    /**
     * @var EmailEmployeesList
     */
    public $emailEmployeesList;
    /**
     * @var RecordRefList
     */
    public $emailCellsList;
    /**
     * @var string
     */
    public $externalAbstract;
    /**
     * @var string
     */
    public $externalDetails;
    /**
     * @var IssueVersionList
     */
    public $brokenInVersionList;
    /**
     * @var IssueVersionList
     */
    public $targetVersionList;
    /**
     * @var IssueVersionList
     */
    public $fixedInVersionList;
    /**
     * @var IssueRelatedIssuesList
     */
    public $relatedIssuesList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'customForm' => 'RecordRef',
        'issueNumber' => 'string',
        'createdDate' => 'dateTime',
        'issueType' => 'RecordRef',
        'product' => 'RecordRef',
        'module' => 'RecordRef',
        'item' => 'RecordRef',
        'productTeam' => 'RecordRef',
        'source' => 'RecordRef',
        'reportedBy' => 'RecordRef',
        'reproduce' => 'RecordRef',
        'versionBroken' => 'RecordRef',
        'buildBroken' => 'RecordRef',
        'versionTarget' => 'RecordRef',
        'buildTarget' => 'RecordRef',
        'versionFixed' => 'RecordRef',
        'buildFixed' => 'RecordRef',
        'severity' => 'RecordRef',
        'priority' => 'RecordRef',
        'isShowStopper' => 'boolean',
        'assigned' => 'RecordRef',
        'reviewer' => 'RecordRef',
        'isReviewed' => 'boolean',
        'issueStatus' => 'RecordRef',
        'lastModifiedDate' => 'dateTime',
        'issueTagsList' => 'RecordRefList',
        'issueAbstract' => 'string',
        'newDetails' => 'string',
        'isOwner' => 'boolean',
        'trackCode' => 'IssueTrackCode',
        'emailAssignee' => 'boolean',
        'emailEmployeesList' => 'EmailEmployeesList',
        'emailCellsList' => 'RecordRefList',
        'externalAbstract' => 'string',
        'externalDetails' => 'string',
        'brokenInVersionList' => 'IssueVersionList',
        'targetVersionList' => 'IssueVersionList',
        'fixedInVersionList' => 'IssueVersionList',
        'relatedIssuesList' => 'IssueRelatedIssuesList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
