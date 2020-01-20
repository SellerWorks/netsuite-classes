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
 * OpportunityCompetitorsList
 */
class OpportunityCompetitorsList {
	/**
	 * @access public
	 * @var OpportunityCompetitors[]
	 */
	public $competitors;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"competitors" => "OpportunityCompetitors[]",
		"replaceAll" => "boolean",
	);
}
