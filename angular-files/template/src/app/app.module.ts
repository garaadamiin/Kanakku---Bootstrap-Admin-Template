import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { HttpClientModule } from '@angular/common/http';
import { HttpClientInMemoryWebApiModule } from 'angular-in-memory-web-api';
import { DataService } from './data.service';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { InMemoryWebApiModule } from 'angular-in-memory-web-api'
import { NgSelect2Module } from 'ng-select2';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { FormsModule } from '@angular/forms';
import { SidemenuComponent } from './sidemenu/sidemenu.component';
import { AuthenticationGuard } from './core/auth/authentication.guard';
import { AllModulesService } from './all-modules.service';
import { AllModulesData } from 'src/assets/all-modules-data/all-modules-data';
import { ToastrModule } from 'ngx-toastr';

@NgModule({
  declarations: [AppComponent, SidemenuComponent],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    InMemoryWebApiModule.forRoot(AllModulesData),
    ToastrModule.forRoot(
      {
        timeOut: 1500,
        positionClass: 'toast-bottom-right',
        preventDuplicates: true,
      }
    ),
    BrowserAnimationsModule,
    FormsModule,
    NgbModule,
    NgSelect2Module
  ],
  providers: [
    AllModulesService,
    AuthenticationGuard
  ],
  bootstrap: [AppComponent],
})
export class AppModule {}
