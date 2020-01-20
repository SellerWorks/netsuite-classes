<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * OpportunityCompetitors
 */
class OpportunityCompetitors {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $competitor;
	/**
	 * @access public
	 * @var string
	 */
	public $url;
	/**
	 * @access public
	 * @var string
	 */
	public $notes;
	/**
	 * @access public
	 * @var string
	 */
	public $strategy;
	/**
	 * @access public
	 * @var boolean
	 */
	public $winner;

	static $paramtypesmap = array(
		"competitor" => "RecordRef",
		"url" => "string",
		"notes" => "string",
		"strategy" => "string",
		"winner" => "boolean",
	);
}
