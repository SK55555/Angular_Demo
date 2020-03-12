import { NgModule } from '@angular/core';

import { Routes, RouterModule } from '@angular/router';



import { IntroComponent } from './intro/intro.component';
import { GalleryComponent } from './gallery/gallery.component';
import { ContentComponent } from './content/content.component';
import { TestimonialComponent } from './testimonial/testimonial.component';

import { ClentsComponent } from './clents/clents.component';
import { PricingComponent } from './pricing/pricing.component';
import { HeaderComponent } from './header/header.component';
import { LoginComponent } from './login/login.component';
import { AddComponent } from './students/add/add.component';




const routes: Routes = [
  
  {path:'', redirectTo:'/Home', pathMatch :'full'},
  {path:'Home', component:HeaderComponent},
  {path:'About', component:IntroComponent},
  {path:'Services', component:ContentComponent},
  {path:'Testimonials', component:TestimonialComponent},
  {path:'Gallery', component:GalleryComponent},
  {path:'Clients', component:ClentsComponent},
  {path:'Pricing', component:PricingComponent},
  {path:'Login', component:LoginComponent},
  {path:'StudentReg', component:AddComponent},

];

@NgModule({

  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }





