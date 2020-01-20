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
 * IssueRelatedIssuesList
 */
class IssueRelatedIssuesList {
	/**
	 * @access public
	 * @var IssueRelatedIssues[]
	 */
	public $issueRelatedIssues;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"issueRelatedIssues" => "IssueRelatedIssues[]",
		"replaceAll" => "boolean",
	);
}
