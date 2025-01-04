import { createApp } from 'vue';
import { router } from './router';
import './assets/css/bootstrap.min.css'
import './assets/css/fontawesome/css/fontawesome.min.css'
import './assets/css/fontawesome/css/all.min.css'
import App from "./App.vue";
/*******Header menu ***********/
import Header from './views/layouts/Header'
import Mobilemenu from './components/mobilemenu.vue'
import Flag from './components/flag.vue'
import Headerlogo from './components/headerlogo.vue'
import Notification from './components/notification.vue'
import Search from './components/search.vue'
import Toggle from './components/toggle.vue'
import User from './components/user.vue'
/*******Sidebar menu ***********/
import SideBar from './views/layouts/Sidebar'
import SettingsSidebar from './views/settings/Sidebar'
import SlideUpDown from 'vue3-slide-up-down'
import invoicesettingsidebar from './views/invoices/invoicesettingsidebar'
import invoicegridheader from './views/invoices/invoicegridheader'
import invoicelistheader from './views/invoices/invoicelistheader'
import indexthreeheader from './views/dashboard/indexthree/indexthreeheader'
import indexthreesidebar from './views/dashboard/indexthree/indexthreesidebar'
import indextwoheader from './views/dashboard/indextwo/indextwoheader'
import indextwosidebar from './views/dashboard/indextwo/indextwosidebar'
import indexfiveheader from './views/dashboard/indexfive/indexfiveheader'
import indexfivesidebar from './views/dashboard/indexfive/indexfivesidebar'
import indexfourheader from './views/dashboard/indexfour/indexfourheader'
import indexfoursidebar from './views/dashboard/indexfour/indexfoursidebar'

/******Breadcrumb menu *********/
import AddCustomerHeader from './components/breadcrumb/AddCustomer'
import AddEstimateHeader from './components/breadcrumb/AddEstimate'
import AddExpenseHeader from './components/breadcrumb/AddExpense'
import AddInvoiceHeader from './components/breadcrumb/AddInvoice'
import AddPaymentHeader from './components/breadcrumb/AddPayment'
import BlankPage from './components/breadcrumb/BlankPage'
import Calendar from './components/breadcrumb/Calendar'
import ChangePassword from './components/breadcrumb/ChangePassword'
import Component from './components/breadcrumb/Component'
import Customer from './components/breadcrumb/Customer'
import DataTableHeader from './components/breadcrumb/Datatable'
import DeleteAccountHeader from './components/breadcrumb/DeleteAccount'
import EditCustomerHeader from './components/breadcrumb/EditCustomer'
import EditEstimateHeader from './components/breadcrumb/EditEstimate'
import EditExpensesHeader from './components/breadcrumb/EditExpenses'
import EditInvoiceHeader from './components/breadcrumb/EditInvoice'
import EstimateHeader from './components/breadcrumb/Estimate'
import ExpenseCategoryHeader from './components/breadcrumb/ExpenseCategory'
import ExpenseHeader from './components/breadcrumb/Expenses'
import ExpenseReportHeader from './components/breadcrumb/ExpenseReport'
import FormBasicHeader from './components/breadcrumb/FormBasic'
import FormHorizontalHeader from './components/breadcrumb/FormHorizontal'
import InputGroupHeader from './components/breadcrumb/InputGroup'
import FormMaskHeader from './components/breadcrumb/FormMask'
import FormValidationHeader from './components/breadcrumb/FormValidation'
import FormVerticalHeader from './components/breadcrumb/FormVertical'
import InboxHeader from './components/breadcrumb/Inbox'
import InvoiceHeader from './components/breadcrumb/Invoices'
import NotificationHeader from './components/breadcrumb/Notification'
import PaymentHeader from './components/breadcrumb/Payment'
import PreferenceHeader from './components/breadcrumb/Preference'
import ProfileHeader from './components/breadcrumb/ProfileHeader'
import ProfitHeader from './components/breadcrumb/Profit'
import SaleReport from './components/breadcrumb/SaleReport'
import SettingHeader from './components/breadcrumb/Setting'
import TableBasicHeader from './components/breadcrumb/TableBasic'
import TaxReportHeader from './components/breadcrumb/TaxReport'
import TaxTypeHeader from './components/breadcrumb/TaxType'
import UserHeader from './components/breadcrumb/User'
import Banksetting from './components/breadcrumb/Banksetting'
import invoicegrid from './components/breadcrumb/invoicegrid'
import invoicelist from './components/breadcrumb/invoicelist'
import invoicedraft from './components/breadcrumb/invoicedraft'
import invoiceoverdue from './components/breadcrumb/invoiceoverdue'
import Taxsetting from './components/breadcrumb/Taxsetting'
import Invoicesetting from './components/breadcrumb/Invoicesetting'
import Invoicepaid from './components/breadcrumb/Invoicepaid'
import Invoicerecurring from './components/breadcrumb/Invoicerecurring'
/********Common menu **********/
import Filter from './views/Filter'
import EstimateFilter from './views/estimate/estimates/EstimateFilter'
import ExpenseFilter from './views/expense/expense/ExpenseFilter'
import ExpenseReportFilter from './views/report/expensereport/ExpenseReportFilter'
import PaymentFilter from './views/payment/payment/PaymentFilter'
import ProfitFilter from './views/report/profitlossreport/ProfitFilter'
import SalesReportFilter from './views/report/salesreport/SalesReportFilter'
import TaxReportFilter from './views/report/taxreport/TaxReportFilter'
import CustomerFilter from './views/customer/customer/CustomerFilter'
/*************Form ************/
import FormAddCustomer from './views/customer/addcustomer/FormAddCustomer'
import FormAddEstimate from './views/estimate/addestimate/FormAddEstimate'
import FormAddExpense from './views/expense/addexpense/FormAddExpense'
import FormAddInvoice from './views/invoices/addinvoice/FormAddInvoice'
import FormAddPayment from './views/payment/addpayment/FormAddPayment'
import FormChangePassword from './views/settings/changepassword/FormChangePassword'
import FormDeleteAccount from './views/settings/deleteaccount/FormDeleteAccount'
import DataTableForm from './views/uiinterface/table/datatable/DataTableForm'
import FormEditShipping from './views/customer/editcustomer/FormEditShipping'
import FormEditBilling from './views/customer/editcustomer/FormEditBilling'
import FormEditBasicInfo from './views/customer/editcustomer/FormEditBasicInfo'
import FormEditEstimate from './views/estimate/editestimate/FormEditEstimate'
import FormEditEstimateTable from './views/estimate/editestimate/FormEditEstimateTable'
import FormEditEstimateTable1 from './views/estimate/editestimate/FormEditEstimateTable1'
import FormEditExpense from './views/expense/editexpense/FormEditExpense'
import FormEditInvoice from './views/invoices/editinvoice/FormEditInvoice'
import FormNotification from './views/settings/notification/FormNotification'
import PreferenceForm from './views/settings/preferences/PreferenceForm'
import SettingForm from './views/settings/settings/SettingForm'
/*************Add table *******/
import AddTableEstimate from './views/estimate/addestimate/addtableestimate.vue'
import AddTableEstimate1 from './views/estimate/addestimate/addtableestimate1.vue'
import AddTableInvoice from './views/invoices/addinvoice/addtableinvoice.vue'
import AddTableInvoice1 from './views/invoices/addinvoice/addtableinvoice1.vue'
import EditInvoiceTable from './views/invoices/editinvoice/editinvoicetable.vue'
import EditInvoiceTable1 from './views/invoices/editinvoice/editinvoicetable1.vue'
import EditInvoiceTable2 from './views/invoices/editinvoice/editinvoicetable2.vue'
import EditInvoiceTable3 from './views/invoices/editinvoice/editinvoicetable3.vue'
import EditInvoiceModal from './views/invoices/editinvoice/editinvoicemodal.vue'

import EstimateTable from './views/estimate/estimates/EstimateTable.vue'
import ExpenseCategoryTable from './views/settings/expensecategory/expensecategorytable.vue'
import ExpenseTable from './views/expense/expense/expensetable.vue'
import ExpenseReportTable from './views/report/expensereport/expensereporttable.vue'
import PaymentTable from './views/payment/payment/PaymentTable.vue'
import ProfitTable from './views/report/profitlossreport/ProfitTable.vue'
import SalesReportTable from './views/report/salesreport/SalesReportTable.vue'
import ResponsiveTable from './views/uiinterface/table/tablebasic/ResponsiveTable.vue'
import ContextTable from './views/uiinterface/table/tablebasic/ContextTable.vue'
import TableView from './views/uiinterface/table/tablebasic/TableView.vue'
import TableView1 from './views/uiinterface/table/tablebasic/TableView1.vue'
import TaxReportTable from './views/report/taxreport/TaxReportTable.vue'
import TaxTypeTable from './views/settings/taxtype/TaxTypeTable.vue'
import UserTable from './views/pages/user/UserTable.vue'
import Addinvoicemodal from './views/invoices/addinvoice/Addinvoicemodal'

/*************Modal ***********/
import CalendarModal from './views/application/calendar/calendarmodal.vue'
import CalendarDrag from './views/application/calendar/calendardrag.vue'
import ExpenseCategoryModal from './views/settings/expensecategory/expensecategorymodal.vue'
import TaxTypeModal from './views/settings/taxtype/TaxTypeModal.vue'
/*********** Chat page********/
import ChatLeft from './views/application/chat/chatleft.vue'
import ChatRight from './views/application/chat/chatright.vue'
/*********** Component page********/
import Alert from './views/uiinterface/components/alert.vue'
import Avatar from './views/uiinterface/components/avatar.vue'
import Round from './views/uiinterface/components/round.vue'
import Card from './views/uiinterface/components/card.vue'
import Progress from './views/uiinterface/components/progress.vue'
import Dropdown from './views/uiinterface/components/dropdown.vue'
import Pagination from './views/uiinterface/components/pagination.vue'
import Tab from './views/uiinterface/components/tab.vue'
import Typography from './views/uiinterface/components/typography.vue'
/*************Customer page ********/
import CustomerTable from './views/customer/customer/customertable.vue'
/*************Form page ************/
import CardInputSize from './views/uiinterface/form/formbasic/cardinputsize.vue'
import CardBasicInput from './views/uiinterface/form/formbasic/cardbasicinput.vue'
import BasicFormHorizontal from './views/uiinterface/form/formhorizontal/basicformhorizontal.vue'
import ThreeColumnHorizontal from './views/uiinterface/form/formhorizontal/threecolumnhorizontal.vue'
import TwoColumnHorizontal from './views/uiinterface/form/formhorizontal/twocolumnhorizontal.vue'
import InputGroupAddons from './views/uiinterface/form/inputgroup/inputgroupaddons.vue'
import InputGroupDropdown from './views/uiinterface/form/inputgroup/inputgroupdropdown.vue'
import InputGroupExample from './views/uiinterface/form/inputgroup/inputgroupexample.vue'
import InputGroupMultipleAddons from './views/uiinterface/form/inputgroup/inputgroupmultipleaddons.vue'
import InputGroupSizing from './views/uiinterface/form/inputgroup/inputgroupsizing.vue'
import ValidationTool from './views/uiinterface/form/formvalidation/validationtool.vue'
import SupportElement from './views/uiinterface/form/formvalidation/supportelement.vue'
import ServerValidation from './views/uiinterface/form/formvalidation/servervalidation.vue'
import Default from './views/uiinterface/form/formvalidation/default.vue'
import CustomValidation from './views/uiinterface/form/formvalidation/customvalidation.vue'
import TwoColumnVertical1 from './views/uiinterface/form/formvertical/twocolumnvertical1.vue'
import TwoColumnVertical from './views/uiinterface/form/formvertical/twocolumnvertical.vue'
import VerticalAddress from './views/uiinterface/form/formvertical/verticaladdress.vue'
import BasicVerticalForm from './views/uiinterface/form/formvertical/basicverticalform.vue'
/*************email page ***********/
import InboxLeft from './views/application/email/inbox/inboxleft.vue'
import InboxRight from './views/application/email/inbox/inboxright.vue'
/************dashboard page ********/
import EstimateTable1 from './views/dashboard/index/estimatetable1.vue'
import DashboardGraph from './views/dashboard/index/dashboardgraph.vue'
import InvoiceTable from './views/dashboard/index/invoicetable.vue'
import DashboardWidget from './views/dashboard/index/dashboardwidget.vue'
/************profile page *********/
import ProfileTable from './views/pages/profile/ProfileTable.vue'
import ProfileTable1 from './views/pages/profile/ProfileTable1.vue'
import ProfileContent from './views/pages/profile/ProfileContent.vue'
/************estimte page *********/
import ViewInvoiceItem from './views/estimate/viewestimate/ViewInvoiceItem.vue'
import ViewTable from './views/estimate/viewestimate/ViewTable.vue'
/**********Invoices page ********/
import invoicelistwidget from './views/invoices/invoicelistwidget'
import indextwowidget from './views/dashboard/indextwo/indextwowidget'
/**********dashboard page *******/
import indextwograph from './views/dashboard/indextwo/indextwograph'
import Indextwoinvoice from './views/dashboard/indextwo/Indextwoinvoice'
import indextwoestimate from './views/dashboard/indextwo/indextwoestimate'
import indexfiveflag from './views/dashboard/indexfive/indexfiveflag'

import VueSelect from 'vue3-select2-component'
import DatePicker from 'vue3-datepicker'
import 'moment'
import jquery from 'jquery'; 
window.$ = jquery
import './assets/css/select2/css/select2.min.css'
import './assets/css/bootstrap-datetimepicker.min.css'
import './assets/css/feather.css'
import './assets/css/style.css'
import './assets/css/bootstrap.bundle.min.js'
import './assets/css/feather.min.js'
import './assets/css/select2/js/select2.min.js'
import './assets/css/bootstrap-datetimepicker.min.js'
import './assets/css/bootstrap4.min.css'
import './assets/css/dataTables.bootstrap4.min.css'
import './assets/css/jquery.dataTables.min.js'
import './assets/css/dataTables.bootstrap4.min.js'
const app = createApp(App)
app.component('vue-select', VueSelect);
app.component('datepicker', DatePicker);
/** Layouts **/
app.component('layout-header', Header);
app.component('mobilemenu', Mobilemenu);
app.component('flag', Flag);
app.component('headerlogo', Headerlogo);
app.component('notification', Notification);
app.component('search', Search);
app.component('toggle', Toggle);
app.component('user', User);
app.component('layout-sidebar', SideBar);
app.component('settingsidebar', SettingsSidebar);
app.component('slide-up-down', SlideUpDown);
app.component('invoicesettingsidebar', invoicesettingsidebar);
app.component('invoicegridheader', invoicegridheader);
app.component('invoicelistheader', invoicelistheader);
app.component('indexthreeheader', indexthreeheader);
app.component('indexthreesidebar', indexthreesidebar);
app.component('indextwoheader', indextwoheader);
app.component('indextwosidebar', indextwosidebar);
app.component('indextwograph', indextwograph);
app.component('indextwoinvoice', Indextwoinvoice);
app.component('indextwoestimate', indextwoestimate);
app.component('indexfiveheader', indexfiveheader);
app.component('indexfivesidebar', indexfivesidebar);
app.component('indexfiveflag', indexfiveflag);
app.component('indexfourheader', indexfourheader);
app.component('indexfoursidebar', indexfoursidebar);

/*************breadrcrumb ************/
app.component('addcustomerheader', AddCustomerHeader);
app.component('addestimateheader', AddEstimateHeader);
app.component('addexpenseheader', AddExpenseHeader);
app.component('addinvoiceheader', AddInvoiceHeader);
app.component('addpaymentheader', AddPaymentHeader);
app.component('blankpage', BlankPage);
app.component('calendarheader', Calendar);
app.component('changepasswordheader', ChangePassword);
app.component('componentheader', Component);
app.component('customerheader', Customer);
app.component('datatableheader', DataTableHeader );
app.component('deleteaccountheader', DeleteAccountHeader);
app.component('editcustomerheader', EditCustomerHeader);
app.component('editestimateheader', EditEstimateHeader);
app.component('editexpensesheader', EditExpensesHeader);
app.component('editinvoiceheader', EditInvoiceHeader);
app.component('estimateheader', EstimateHeader);
app.component('expensecategoryheader', ExpenseCategoryHeader);
app.component('expenseheader', ExpenseHeader);
app.component('expensereportheader', ExpenseReportHeader);
app.component('formbasicheader', FormBasicHeader);
app.component('formhorizontalheader', FormHorizontalHeader);
app.component('inputgroupheader', InputGroupHeader);
app.component('formmaskheader', FormMaskHeader);
app.component('formvalidationheader', FormValidationHeader);
app.component('formverticalheader', FormVerticalHeader);
app.component('inboxheader', InboxHeader);
app.component('invoiceheader', InvoiceHeader);
app.component('notificationheader', NotificationHeader);
app.component('paymentheader', PaymentHeader);
app.component('preferenceheader', PreferenceHeader);
app.component('profileheader', ProfileHeader);
app.component('profitheader', ProfitHeader);
app.component('salereportheader', SaleReport);
app.component('settingheader', SettingHeader);
app.component('tablebasicheader', TableBasicHeader);
app.component('taxreportheader', TaxReportHeader);
app.component('taxtypeheader', TaxTypeHeader);
app.component('userheader', UserHeader);
app.component('banksetting', Banksetting);
app.component('invoicegrid', invoicegrid);
app.component('invoicelist', invoicelist);
app.component('invoicedraft', invoicedraft);
app.component('invoiceoverdue', invoiceoverdue);
app.component('taxsetting', Taxsetting);
app.component('addinvoicemodal', Addinvoicemodal);
app.component('invoicesetting', Invoicesetting);
app.component('invoicepaid', Invoicepaid);
app.component('invoicerecurring', Invoicerecurring);
app.component('indextwowidget', indextwowidget);

/************filter ******************/
app.component('filter', Filter);
app.component('estimatefilter', EstimateFilter);
app.component('expensefilter', ExpenseFilter);
app.component('expensereportfilter', ExpenseReportFilter);
app.component('paymentfilter', PaymentFilter);
app.component('profitfilter', ProfitFilter);
app.component('salereportfilter', SalesReportFilter);
app.component('taxreportfilter', TaxReportFilter);
app.component('customerfilter', CustomerFilter)
/************form ********************/
app.component('formaddcustomer', FormAddCustomer);
app.component('formaddestimate', FormAddEstimate);
app.component('formaddexpense', FormAddExpense);
app.component('formaddinvoice', FormAddInvoice);
app.component('formaddpayment', FormAddPayment);
app.component('formchangepassword', FormChangePassword);
app.component('formdeleteaccount', FormDeleteAccount);
app.component('formeditbilling', FormEditBilling);
app.component('formbasicinfo', FormEditBasicInfo);
app.component('formeditshipping', FormEditShipping);
app.component('formeditestimate', FormEditEstimate);
app.component('formeditestimatetable', FormEditEstimateTable);
app.component('formeditestimatetable1', FormEditEstimateTable1);
app.component('formeditexpense', FormEditExpense);
app.component('formeditinvoice', FormEditInvoice);
app.component('cardbasicinput', CardBasicInput);
app.component('cardinputsize', CardInputSize);
app.component('basicformhorizontal', BasicFormHorizontal);
app.component('twocolumnhorizontal', TwoColumnHorizontal);
app.component('threecolumnhorizontal', ThreeColumnHorizontal);
app.component('inputgroupexample', InputGroupExample);
app.component('inputgroupsizing', InputGroupSizing);
app.component('inputgroupaddons', InputGroupAddons);
app.component('inputgroupmultipleaddons', InputGroupMultipleAddons);
app.component('inputgroupdropdown', InputGroupDropdown);
app.component('validationtool', ValidationTool);
app.component('supportelement', SupportElement);
app.component('servervalidation', ServerValidation);
app.component('default', Default);
app.component('customvalidation', CustomValidation);
app.component('twocolumnvertical1', TwoColumnVertical1);
app.component('twocolumnvertical', TwoColumnVertical);
app.component('verticaladdress', VerticalAddress);
app.component('basicverticalform', BasicVerticalForm);
app.component('formnotification', FormNotification);
app.component('preferenceform', PreferenceForm);
app.component('settingform', SettingForm);

/*************table ******************/
app.component('addtableestimate', AddTableEstimate);
app.component('addtableestimate1', AddTableEstimate1);
app.component('addtableinvoice', AddTableInvoice);
app.component('addtableinvoice1', AddTableInvoice1);
app.component('editinvoicetable', EditInvoiceTable)
app.component('editinvoicetable1', EditInvoiceTable1);
app.component('editinvoicetable2', EditInvoiceTable2);
app.component('editinvoicetable3', EditInvoiceTable3);
app.component('editinvoicemodal', EditInvoiceModal);
app.component('estimatetable', EstimateTable);
app.component('expensecategorytable', ExpenseCategoryTable);
app.component('expensetable', ExpenseTable);
app.component('expensereporttable', ExpenseReportTable);
app.component('paymenttable', PaymentTable);
app.component('profittable', ProfitTable);
app.component('salereporttable', SalesReportTable);
app.component('tableview', TableView);
app.component('tableview1', TableView1);
app.component('contexttable', ContextTable);
app.component('responsivetable', ResponsiveTable);
app.component('taxreporttable', TaxReportTable);
app.component('taxtypetable', TaxTypeTable);
app.component('usertable', UserTable);

/*************modal *****************/
app.component('calendarmodal', CalendarModal);
app.component('calendardrag', CalendarDrag);
app.component('expensecategorymodal', ExpenseCategoryModal);
app.component('taxtypemodal', TaxTypeModal);
/*************chat *****************/
app.component('chatleft', ChatLeft);
app.component('chatright', ChatRight)
/*************component *****************/
app.component('avatar', Avatar);
app.component('alert', Alert);
app.component('round', Round);
app.component('card', Card);
app.component('dropdown', Dropdown);
app.component('pagination', Pagination);
app.component('progress', Progress);
app.component('tab', Tab);
app.component('typography', Typography);
/************customer ******************/
app.component('customertable', CustomerTable)
/************datatable ****************/
app.component('datatableform', DataTableForm)
/************email ****************/
app.component('inboxleft', InboxLeft);
app.component('inboxright', InboxRight);
/************dashboard ***********/
app.component('estimatetable1', EstimateTable1);
app.component('dashboardgraph', DashboardGraph);
app.component('invoicetable', InvoiceTable);
app.component('dashboardwidget', DashboardWidget);
/************profile ***********/
app.component('profiletable', ProfileTable);
app.component('profiletable1', ProfileTable1);
app.component('profilecontent', ProfileContent);
/************profit ***********/
app.component('profiletable', ProfileTable);
app.component('profiletable1', ProfileTable1);
app.component('profilecontent', ProfileContent);
/************estimate ***********/
app.component('viewinvoiceitem', ViewInvoiceItem);
app.component('viewtable', ViewTable);
/************Invoice ***********/
app.component('invoicelistwidget', invoicelistwidget);


app.use(router)
.mount('#app');