import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { InvoicesOverdueRoutingModule } from './invoices-overdue-routing.module';
import { InvoicesOverdueComponent } from './invoices-overdue.component';


@NgModule({
  declarations: [
    InvoicesOverdueComponent
  ],
  imports: [
    CommonModule,
    InvoicesOverdueRoutingModule
  ]
})
export class InvoicesOverdueModule { }
