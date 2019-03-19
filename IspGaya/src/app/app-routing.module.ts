import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MainMenuComponent } from './main-menu/main-menu.component';
import { BrowserModule } from '@angular/platform-browser';
import { InlogSchermComponent } from './inlog-scherm/inlog-scherm.component';

const routes: Routes = [];

@NgModule({
  imports:  [BrowserModule ,RouterModule.forRoot( [ 
    { path: "Login",component:InlogSchermComponent},  
    { path:"Home", component:MainMenuComponent}
    
  ])],
  exports: [RouterModule]
})
export class AppRoutingModule { }
