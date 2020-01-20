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
 * GiftCertificateSearchAdvanced
 */
class GiftCertificateSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var GiftCertificateSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var GiftCertificateSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "GiftCertificateSearch",
		"columns" => "GiftCertificateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
