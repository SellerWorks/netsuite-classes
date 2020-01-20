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
 * TransactionPaymentEventHoldReason
 */
class TransactionPaymentEventHoldReason {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _amountExceedsMaximumAllowedAmount = "_amountExceedsMaximumAllowedAmount";
	/**
	 * @var string
	 */
	const _authorizationDecline = "_authorizationDecline";
	/**
	 * @var string
	 */
	const _cardExpired = "_cardExpired";
	/**
	 * @var string
	 */
	const _cardInvalid = "_cardInvalid";
	/**
	 * @var string
	 */
	const _confirmationOfTheOperationIsPending = "_confirmationOfTheOperationIsPending";
	/**
	 * @var string
	 */
	const _externalFraudRejection = "_externalFraudRejection";
	/**
	 * @var string
	 */
	const _externalFraudReview = "_externalFraudReview";
	/**
	 * @var string
	 */
	const _failedToPrimeDevice = "_failedToPrimeDevice";
	/**
	 * @var string
	 */
	const _fatalError = "_fatalError";
	/**
	 * @var string
	 */
	const _forwardedToPayerAuthentication = "_forwardedToPayerAuthentication";
	/**
	 * @var string
	 */
	const _forwardRequested = "_forwardRequested";
	/**
	 * @var string
	 */
	const _gatewayAsynchronousNotification = "_gatewayAsynchronousNotification";
	/**
	 * @var string
	 */
	const _gatewayError = "_gatewayError";
	/**
	 * @var string
	 */
	const _generalHold = "_generalHold";
	/**
	 * @var string
	 */
	const _generalReject = "_generalReject";
	/**
	 * @var string
	 */
	const _operationWasSuccessful = "_operationWasSuccessful";
	/**
	 * @var string
	 */
	const _operationWasTerminated = "_operationWasTerminated";
	/**
	 * @var string
	 */
	const _overridenBy = "_overridenBy";
	/**
	 * @var string
	 */
	const _partnerDecline = "_partnerDecline";
	/**
	 * @var string
	 */
	const _paymentDeviceWasPrimed = "_paymentDeviceWasPrimed";
	/**
	 * @var string
	 */
	const _paymentOperationWasCanceled = "_paymentOperationWasCanceled";
	/**
	 * @var string
	 */
	const _systemError = "_systemError";
	/**
	 * @var string
	 */
	const _verbalAuthorizationRequested = "_verbalAuthorizationRequested";
	/**
	 * @var string
	 */
	const _verificationRejection = "_verificationRejection";
	/**
	 * @var string
	 */
	const _verificationRequired = "_verificationRequired";
}
