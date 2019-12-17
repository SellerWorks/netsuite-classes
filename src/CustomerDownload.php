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
 * CustomerDownload
 */
class CustomerDownload {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $file;
	/**
	 * @access public
	 * @var string
	 */
	public $licenseCode;
	/**
	 * @access public
	 * @var integer
	 */
	public $remainingDownloads;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expiration;

	static $paramtypesmap = array(
		"file" => "RecordRef",
		"licenseCode" => "string",
		"remainingDownloads" => "integer",
		"expiration" => "dateTime",
	);
}
