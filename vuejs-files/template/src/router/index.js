import {createRouter, createWebHistory} from 'vue-router';
import AddCustomer from '../views/customer/addcustomer/AddCustomer'
import AddEstimate from '../views/estimate/addestimate/AddEstimate'
import AddExpense from '../views/expense/addexpense/AddExpense'
import AddInvoice from '../views/invoices/addinvoice/AddInvoice'
import AddPayment from '../views/payment/addpayment/AddPayment'
import BlankPage from '../views/pages/BlankPage'
import Calendar from '../views/application/calendar/Calendar'
import ChangePassword from '../views/settings/changepassword/ChangePassword'
import Chat from '../views/application/chat/Chat'
import Component from '../views/uiinterface/components/Component'
import Customer from '../views/customer/customer/Customer'
import DataTable from '../views/uiinterface/table/datatable/DataTable'
import DeleteAccount from '../views/settings/deleteaccount/DeleteAccount'
import EditCustomer from '../views/customer/editcustomer/EditCustomer'
import EditEstimate from '../views/estimate/editestimate/EditEstimate'
import EditExpense from '../views/expense/editexpense/EditExpense'
import Editinvoice from '../views/invoices/editinvoice/EditInvoice'
import Error404 from '../views/pages/error/error404/Error404'
import Error500 from '../views/pages/error/error500/Error500'
import Estimate from '../views/estimate/estimates/Estimate'
import ExpenseCategory from '../views/settings/expensecategory/ExpenseCategory'
import Expense from '../views/expense/expense/Expense'
import ExpenseReport from '../views/report/expensereport/ExpenseReport'
import ForgotPassword from '../views/pages/ForgotPassword'
import LockScreen from '../views/pages/LockScreen'
import Login from '../views/pages/Login'
import Register from '../views/pages/Register'
import FormBasic from '../views/uiinterface/form/formbasic/FormBasic'
import FormHorizontal from '../views/uiinterface/form/formhorizontal/FormHorizontal'
import InputGroup from '../views/uiinterface/form/inputgroup/InputGroup'
import FormMask from '../views/uiinterface/form/formmask/FormMask'
import FormValidation from '../views/uiinterface/form/formvalidation/FormValidation'
import FormVertical from '../views/uiinterface/form/formvertical/FormVertical'
import Inbox from '../views/application/email/inbox/Inbox'
import Dashboard from '../views/dashboard/index/Index'
import invoices from '../views/invoices/invoicelist/invoices'
import Notification from '../views/settings/notification/Notification'
import Payment from '../views/payment/payment/Payment'
import Preference from '../views/settings/preferences/Preference'
import Profile from '../views/pages/profile/Profile'
import ProfitLossReport from '../views/report/profitlossreport/ProfitLoss'
import SalesReport from '../views/report/salesreport/SalesReport'
import Setting from '../views/settings/settings/Setting'
import TableBasic from '../views/uiinterface/table/tablebasic/TableBasic'
import TaxReport from '../views/report/taxreport/TaxReport'
import TaxType from '../views/settings/taxtype/TaxType'
import User from '../views/pages/user/User'
import ViewEstimate from '../views/estimate/viewestimate/ViewEstimate'
import ViewInvoice from '../views/invoices/viewinvoice/ViewInvoice'
import banksetting from '../views/invoices/invoicesetting/banksetting'
import invoicegrid from '../views/invoices/invoicegrid/invoicegrid'
import invoicecancelled from '../views/invoices/invoicelist/invoicecancelled'
import invoicedraft from '../views/invoices/invoicelist/invoicedraft'
import invoiceoverdue from '../views/invoices/invoicelist/invoiceoverdue'
import taxsetting from '../views/invoices/invoicesetting/taxsetting'
import invoicessetting from '../views/invoices/invoicesetting/invoicessetting'
import invoicepaid from '../views/invoices/invoicelist/invoicepaid'
import invoicerecurring from '../views/invoices/invoicelist/invoicerecurring'
import indexthree from '../views/dashboard/indexthree/indexthree'
import indextwo from '../views/dashboard/indextwo/indextwo'
import indexfive from '../views/dashboard/indexfive/indexfive'
import indexfour from '../views/dashboard/indexfour/indexfour'
const routes = [
  {
    path: '/',
    name: 'login',
    component: () => import('../views/pages/Login'),
    meta: {
    requiresAuth: true
  }
  },
  {
    path: '/index',
    name: 'index',
    component: () => import('../views/dashboard/index/Index'),
    meta: {
    requiresAuth: true
  }
  },
    {
      path: '/add-customer',
      name: 'add-customer',
      component: () => import('../views/customer/addcustomer/AddCustomer'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/add-estimate',
      name: 'add-estimate',
      component: () => import('../views/estimate/addestimate/AddEstimate'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/add-expenses',
      name: 'add-expenses',
      component: () => import('../views/expense/addexpense/AddExpense'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/add-invoice',
      name: 'add-invoice',
      component: () => import('../views/invoices/addinvoice/AddInvoice'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/add-payments',
      name: 'add-payments',
      component: () => import('../views/payment/addpayment/AddPayment'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/blank-page',
      name: 'blank-page',
      component: () => import('../views/pages/BlankPage'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/calendar',
      name: 'calendar',
      component: () => import('../views/application/calendar/Calendar'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/change-password',
      name: 'change-password',
      component: () => import('../views/settings/changepassword/ChangePassword'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/chat',
      name: 'chat',
      component: () => import('../views/application/chat/Chat'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/components',
      name: 'components',
      component: () => import('../views/uiinterface/components/Component'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/customers',
      name: 'customers',
      component: () => import('../views/customer/customer/Customer'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/data-tables',
      name: 'data-tables',
      component: () => import('../views/uiinterface/table/datatable/DataTable'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/delete-account',
      name: 'delete-account',
      component: () => import('../views/settings/deleteaccount/DeleteAccount'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/edit-customer',
      name: 'edit-customer',
      component: () => import('../views/customer/editcustomer/EditCustomer'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/edit-estimate',
      name: 'edit-estimate',
      component: () => import('../views/estimate/editestimate/EditEstimate'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/edit-expenses',
      name: 'edit-expenses',
      component: () => import('../views/expense/editexpense/EditExpense'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/edit-invoice',
      name: 'edit-invoice',
      component: () => import('../views/invoices/editinvoice/EditInvoice'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/error-404',
      name: 'error-404',
      component: () => import('../views/pages/error/error404/Error404'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/error-500',
      name: 'error-500',
      component: () => import('../views/pages/error/error500/Error500'),
      meta: {
      requiresAuth: true
    }
    },
     {
      path: '/estimates',
      name: 'estimates',
      component: () => import('../views/estimate/estimates/Estimate'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/expense-category',
      name: 'expense-category',
      component: () => import('../views/settings/expensecategory/ExpenseCategory'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/expenses',
      name: 'expenses',
      component: () => import('../views/expense/expense/Expense'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/expenses-report',
      name: 'expenses-report',
      component: () => import('../views/report/expensereport/ExpenseReport'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/forgot-password',
      name: 'forgot-password',
      component: () => import('../views/pages/ForgotPassword'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-basic-inputs',
      name: 'form-basic-inputs',
      component: () => import('../views/uiinterface/form/formbasic/FormBasic'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-horizontal',
      name: 'form-horizontal',
      component: () => import('../views/uiinterface/form/formhorizontal/FormHorizontal'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-input-groups',
      name: 'form-input-groups',
      component: () => import('../views/uiinterface/form/inputgroup/InputGroup'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-mask',
      name: 'form-mask',
      component: () => import('../views/uiinterface/form/formmask/FormMask'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-validation',
      name: 'form-validation',
      component: () => import('../views/uiinterface/form/formvalidation/FormValidation'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/form-vertical',
      name: 'form-vertical',
      component: () => import('../views/uiinterface/form/formvertical/FormVertical'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/inbox',
      name: 'inbox',
      component: () => import('../views/application/email/inbox/Inbox'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices',
      name: 'invoices',
      component: () => import('../views/invoices/invoicelist/invoices'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/lock-screen',
      name: 'lock-screen',
      component: () => import('../views/pages/LockScreen'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/notifications',
      name: 'notifications',
      component: () => import('../views/settings/notification/Notification'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/payments',
      name: 'payments',
      component: () => import('../views/payment/payment/Payment'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/preferences',
      name: 'preferences',
      component: () => import('../views/settings/preferences/Preference'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/profile',
      name: 'profile',
      component: () => import('../views/pages/profile/Profile'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/profit-loss-report',
      name: 'profit-loss-report',
      component: () => import('../views/report/profitlossreport/ProfitLoss'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/pages/Register'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/sales-report',
      name: 'sales-report',
      component: () => import('../views/report/salesreport/SalesReport'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/settings',
      name: 'settings',
      component: () => import('../views/settings/settings/Setting'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/tables-basic',
      name: 'tables-basic',
      component: () => import('../views/uiinterface/table/tablebasic/TableBasic'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/taxs-report',
      name: 'taxs-report',
      component: () => import('../views/report/taxreport/TaxReport'),
      meta: {
      requiresAuth: true
    }
    },
     {
      path: '/tax-types',
      name: 'tax-types',
      component: () => import('../views/settings/taxtype/TaxType'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/users',
      name: 'users',
      component: () => import('../views/pages/user/User'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/view-estimate',
      name: 'view-estimate',
      component: () => import('../views/estimate/viewestimate/ViewEstimate'),
      meta: {
      requiresAuth: true
    }
    },
     {
      path: '/view-invoice',
      name: 'view-invoice',
      component: () => import('../views/invoices/viewinvoice/ViewInvoice'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/bank-settings',
      name: 'bank-settings',
      component: () => import('../views/invoices/invoicesetting/banksetting'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoice-grid',
      name: 'invoice-grid',
      component: () => import('../views/invoices/invoicegrid/invoicegrid'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-cancelled',
      name: 'invoices-cancelled',
      component: () => import('../views/invoices/invoicelist/invoicecancelled'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-draft',
      name: 'invoices-draft',
      component: () => import('../views/invoices/invoicelist/invoicedraft'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-overdue',
      name: 'invoices-overdue',
      component: () => import('../views/invoices/invoicelist/invoiceoverdue'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/tax-settings',
      name: 'tax-settings',
      component: () => import('../views/invoices/invoicesetting/taxsetting'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-settings',
      name: 'invoices-settings',
      component: () => import('../views/invoices/invoicesetting/invoicessetting'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-paid',
      name: 'invoices-paid',
      component: () => import('../views/invoices/invoicelist/invoicepaid'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/invoices-recurring',
      name: 'invoices-recurring',
      component: () => import('../views/invoices/invoicelist/invoicerecurring'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/index-three',
      name: 'index-three',
      component: () => import('../views/dashboard/indexthree/indexthree'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/index-two',
      name: 'index-two',
      component: () => import('../views/dashboard/indextwo/indextwo'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/index-five',
      name: 'index-five',
      component: () => import('../views/dashboard/indexfive/indexfive'),
      meta: {
      requiresAuth: true
    }
    },
    {
      path: '/index-four',
      name: 'index-four',
      component: () => import('../views/dashboard/indexfour/indexfour'),
      meta: {
      requiresAuth: true
    }
    },
  ];
export const router = createRouter({
    history: createWebHistory('vuejs/template'),
    linkActiveClass: 'active',
    routes
});