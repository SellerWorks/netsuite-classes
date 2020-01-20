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
 * IssueRelatedIssues
 */
class IssueRelatedIssues {
	/**
	 * @access public
	 * @var IssueRelationship
	 */
	public $relationship;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $relationshipComment;

	static $paramtypesmap = array(
		"relationship" => "IssueRelationship",
		"issueNumber" => "RecordRef",
		"relationshipComment" => "string",
	);
}
