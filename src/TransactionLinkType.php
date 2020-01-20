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
 * TransactionLinkType
 */
class TransactionLinkType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _advancedCostAmortization = "_advancedCostAmortization";
	/**
	 * @var string
	 */
	const _advancedExpenseAmortization = "_advancedExpenseAmortization";
	/**
	 * @var string
	 */
	const _authorizationDeposit = "_authorizationDeposit";
	/**
	 * @var string
	 */
	const _blcgaJeFullfillment = "_blcgaJeFullfillment";
	/**
	 * @var string
	 */
	const _captureAuthorization = "_captureAuthorization";
	/**
	 * @var string
	 */
	const _closedPeriodFxVariance = "_closedPeriodFxVariance";
	/**
	 * @var string
	 */
	const _closeWorkOrder = "_closeWorkOrder";
	/**
	 * @var string
	 */
	const _cogsLink = "_cogsLink";
	/**
	 * @var string
	 */
	const _collectTegata = "_collectTegata";
	/**
	 * @var string
	 */
	const _commission = "_commission";
	/**
	 * @var string
	 */
	const _contractCostDeferral = "_contractCostDeferral";
	/**
	 * @var string
	 */
	const _contractCostDeferralReversal = "_contractCostDeferralReversal";
	/**
	 * @var string
	 */
	const _deferredRevenueReallocation = "_deferredRevenueReallocation";
	/**
	 * @var string
	 */
	const _depositApplication = "_depositApplication";
	/**
	 * @var string
	 */
	const _depositRefundCheck = "_depositRefundCheck";
	/**
	 * @var string
	 */
	const _discountTegata = "_discountTegata";
	/**
	 * @var string
	 */
	const _dropShipment = "_dropShipment";
	/**
	 * @var string
	 */
	const _endorseTegata = "_endorseTegata";
	/**
	 * @var string
	 */
	const _estimateInvoicing = "_estimateInvoicing";
	/**
	 * @var string
	 */
	const _fulfillmentRequestFulfillment = "_fulfillmentRequestFulfillment";
	/**
	 * @var string
	 */
	const _glImpactAdjustment = "_glImpactAdjustment";
	/**
	 * @var string
	 */
	const _intercompanyAdjustment = "_intercompanyAdjustment";
	/**
	 * @var string
	 */
	const _inTransitPayment = "_inTransitPayment";
	/**
	 * @var string
	 */
	const _inventoryCountAdjustment = "_inventoryCountAdjustment";
	/**
	 * @var string
	 */
	const _kitShipment = "_kitShipment";
	/**
	 * @var string
	 */
	const _landedCost = "_landedCost";
	/**
	 * @var string
	 */
	const _linkedReturnCost = "_linkedReturnCost";
	/**
	 * @var string
	 */
	const _opportunityClose = "_opportunityClose";
	/**
	 * @var string
	 */
	const _opportunityEstimate = "_opportunityEstimate";
	/**
	 * @var string
	 */
	const _orderBillInvoice = "_orderBillInvoice";
	/**
	 * @var string
	 */
	const _orderFulfillmentRequest = "_orderFulfillmentRequest";
	/**
	 * @var string
	 */
	const _orderPickingPacking = "_orderPickingPacking";
	/**
	 * @var string
	 */
	const _ownershipTransferItemReceipt = "_ownershipTransferItemReceipt";
	/**
	 * @var string
	 */
	const _payment = "_payment";
	/**
	 * @var string
	 */
	const _paymentRefund = "_paymentRefund";
	/**
	 * @var string
	 */
	const _payTegata = "_payTegata";
	/**
	 * @var string
	 */
	const _poToOwnershipTransfer = "_poToOwnershipTransfer";
	/**
	 * @var string
	 */
	const _prepaymentApplication = "_prepaymentApplication";
	/**
	 * @var string
	 */
	const _purchaseContractOrder = "_purchaseContractOrder";
	/**
	 * @var string
	 */
	const _purchaseOrderPrepayment = "_purchaseOrderPrepayment";
	/**
	 * @var string
	 */
	const _purchaseOrderRequisition = "_purchaseOrderRequisition";
	/**
	 * @var string
	 */
	const _purchaseOrderToBlanket = "_purchaseOrderToBlanket";
	/**
	 * @var string
	 */
	const _purchaseReturn = "_purchaseReturn";
	/**
	 * @var string
	 */
	const _receiptBill = "_receiptBill";
	/**
	 * @var string
	 */
	const _receiptFulfillment = "_receiptFulfillment";
	/**
	 * @var string
	 */
	const _reimbursement = "_reimbursement";
	/**
	 * @var string
	 */
	const _revalueWorkOrder = "_revalueWorkOrder";
	/**
	 * @var string
	 */
	const _revenueAmortizatonRecognition = "_revenueAmortizatonRecognition";
	/**
	 * @var string
	 */
	const _revenueArrangement = "_revenueArrangement";
	/**
	 * @var string
	 */
	const _revenueCommitted = "_revenueCommitted";
	/**
	 * @var string
	 */
	const _rfqToVendorRfq = "_rfqToVendorRfq";
	/**
	 * @var string
	 */
	const _saleReturn = "_saleReturn";
	/**
	 * @var string
	 */
	const _salesOrderAuthorization = "_salesOrderAuthorization";
	/**
	 * @var string
	 */
	const _salesOrderDegross = "_salesOrderDegross";
	/**
	 * @var string
	 */
	const _salesOrderDeposit = "_salesOrderDeposit";
	/**
	 * @var string
	 */
	const _salesOrderRevenueRevaluation = "_salesOrderRevenueRevaluation";
	/**
	 * @var string
	 */
	const _sourceOfRevenueContract = "_sourceOfRevenueContract";
	/**
	 * @var string
	 */
	const _specialOrder = "_specialOrder";
	/**
	 * @var string
	 */
	const _systemJournal = "_systemJournal";
	/**
	 * @var string
	 */
	const _transferOrderFulfillmentReceipt = "_transferOrderFulfillmentReceipt";
	/**
	 * @var string
	 */
	const _vendorBillVariance = "_vendorBillVariance";
	/**
	 * @var string
	 */
	const _vendorRfqToPurchaseContract = "_vendorRfqToPurchaseContract";
	/**
	 * @var string
	 */
	const _waveOrder = "_waveOrder";
	/**
	 * @var string
	 */
	const _waveShipment = "_waveShipment";
	/**
	 * @var string
	 */
	const _wipBuild = "_wipBuild";
	/**
	 * @var string
	 */
	const _workOrderBuild = "_workOrderBuild";
}
