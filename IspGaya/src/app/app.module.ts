import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {PasswordModule} from 'primeng/password';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { InlogSchermComponent } from './inlog-scherm/inlog-scherm.component';
import { MainMenuComponent } from './main-menu/main-menu.component';

@NgModule({
  declarations: [
    AppComponent,
    InlogSchermComponent,
    MainMenuComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    PasswordModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
