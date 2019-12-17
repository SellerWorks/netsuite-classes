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
 * SearchRecordType.
 */
class SearchRecordType
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const account = 'account';
    /**
     * @var string
     */
    const accountingPeriod = 'accountingPeriod';
    /**
     * @var string
     */
    const accountingTransaction = 'accountingTransaction';
    /**
     * @var string
     */
    const billingAccount = 'billingAccount';
    /**
     * @var string
     */
    const billingSchedule = 'billingSchedule';
    /**
     * @var string
     */
    const bin = 'bin';
    /**
     * @var string
     */
    const bom = 'bom';
    /**
     * @var string
     */
    const bomRevision = 'bomRevision';
    /**
     * @var string
     */
    const budget = 'budget';
    /**
     * @var string
     */
    const calendarEvent = 'calendarEvent';
    /**
     * @var string
     */
    const campaign = 'campaign';
    /**
     * @var string
     */
    const charge = 'charge';
    /**
     * @var string
     */
    const classification = 'classification';
    /**
     * @var string
     */
    const contact = 'contact';
    /**
     * @var string
     */
    const contactCategory = 'contactCategory';
    /**
     * @var string
     */
    const contactRole = 'contactRole';
    /**
     * @var string
     */
    const costCategory = 'costCategory';
    /**
     * @var string
     */
    const consolidatedExchangeRate = 'consolidatedExchangeRate';
    /**
     * @var string
     */
    const couponCode = 'couponCode';
    /**
     * @var string
     */
    const currencyRate = 'currencyRate';
    /**
     * @var string
     */
    const customer = 'customer';
    /**
     * @var string
     */
    const customerCategory = 'customerCategory';
    /**
     * @var string
     */
    const customerMessage = 'customerMessage';
    /**
     * @var string
     */
    const customerStatus = 'customerStatus';
    /**
     * @var string
     */
    const customerSubsidiaryRelationship = 'customerSubsidiaryRelationship';
    /**
     * @var string
     */
    const customList = 'customList';
    /**
     * @var string
     */
    const customRecord = 'customRecord';
    /**
     * @var string
     */
    const department = 'department';
    /**
     * @var string
     */
    const employee = 'employee';
    /**
     * @var string
     */
    const entityGroup = 'entityGroup';
    /**
     * @var string
     */
    const expenseCategory = 'expenseCategory';
    /**
     * @var string
     */
    const fairValuePrice = 'fairValuePrice';
    /**
     * @var string
     */
    const file = 'file';
    /**
     * @var string
     */
    const folder = 'folder';
    /**
     * @var string
     */
    const giftCertificate = 'giftCertificate';
    /**
     * @var string
     */
    const globalAccountMapping = 'globalAccountMapping';
    /**
     * @var string
     */
    const hcmJob = 'hcmJob';
    /**
     * @var string
     */
    const inboundShipment = 'inboundShipment';
    /**
     * @var string
     */
    const inventoryNumber = 'inventoryNumber';
    /**
     * @var string
     */
    const item = 'item';
    /**
     * @var string
     */
    const itemAccountMapping = 'itemAccountMapping';
    /**
     * @var string
     */
    const itemDemandPlan = 'itemDemandPlan';
    /**
     * @var string
     */
    const itemRevision = 'itemRevision';
    /**
     * @var string
     */
    const itemSupplyPlan = 'itemSupplyPlan';
    /**
     * @var string
     */
    const issue = 'issue';
    /**
     * @var string
     */
    const job = 'job';
    /**
     * @var string
     */
    const jobStatus = 'jobStatus';
    /**
     * @var string
     */
    const jobType = 'jobType';
    /**
     * @var string
     */
    const location = 'location';
    /**
     * @var string
     */
    const manufacturingCostTemplate = 'manufacturingCostTemplate';
    /**
     * @var string
     */
    const manufacturingOperationTask = 'manufacturingOperationTask';
    /**
     * @var string
     */
    const manufacturingRouting = 'manufacturingRouting';
    /**
     * @var string
     */
    const merchandiseHierarchyNode = 'merchandiseHierarchyNode';
    /**
     * @var string
     */
    const message = 'message';
    /**
     * @var string
     */
    const nexus = 'nexus';
    /**
     * @var string
     */
    const note = 'note';
    /**
     * @var string
     */
    const noteType = 'noteType';
    /**
     * @var string
     */
    const opportunity = 'opportunity';
    /**
     * @var string
     */
    const otherNameCategory = 'otherNameCategory';
    /**
     * @var string
     */
    const partner = 'partner';
    /**
     * @var string
     */
    const partnerCategory = 'partnerCategory';
    /**
     * @var string
     */
    const paycheck = 'paycheck';
    /**
     * @var string
     */
    const paymentMethod = 'paymentMethod';
    /**
     * @var string
     */
    const payrollItem = 'payrollItem';
    /**
     * @var string
     */
    const phoneCall = 'phoneCall';
    /**
     * @var string
     */
    const priceLevel = 'priceLevel';
    /**
     * @var string
     */
    const pricingGroup = 'pricingGroup';
    /**
     * @var string
     */
    const projectTask = 'projectTask';
    /**
     * @var string
     */
    const promotionCode = 'promotionCode';
    /**
     * @var string
     */
    const resourceAllocation = 'resourceAllocation';
    /**
     * @var string
     */
    const revRecSchedule = 'revRecSchedule';
    /**
     * @var string
     */
    const revRecTemplate = 'revRecTemplate';
    /**
     * @var string
     */
    const salesRole = 'salesRole';
    /**
     * @var string
     */
    const salesTaxItem = 'salesTaxItem';
    /**
     * @var string
     */
    const solution = 'solution';
    /**
     * @var string
     */
    const siteCategory = 'siteCategory';
    /**
     * @var string
     */
    const subsidiary = 'subsidiary';
    /**
     * @var string
     */
    const supportCase = 'supportCase';
    /**
     * @var string
     */
    const task = 'task';
    /**
     * @var string
     */
    const taxGroup = 'taxGroup';
    /**
     * @var string
     */
    const taxType = 'taxType';
    /**
     * @var string
     */
    const term = 'term';
    /**
     * @var string
     */
    const timeBill = 'timeBill';
    /**
     * @var string
     */
    const timeSheet = 'timeSheet';
    /**
     * @var string
     */
    const topic = 'topic';
    /**
     * @var string
     */
    const transaction = 'transaction';
    /**
     * @var string
     */
    const unitsType = 'unitsType';
    /**
     * @var string
     */
    const usage = 'usage';
    /**
     * @var string
     */
    const vendor = 'vendor';
    /**
     * @var string
     */
    const vendorCategory = 'vendorCategory';
    /**
     * @var string
     */
    const vendorSubsidiaryRelationship = 'vendorSubsidiaryRelationship';
    /**
     * @var string
     */
    const winLossReason = 'winLossReason';
}
