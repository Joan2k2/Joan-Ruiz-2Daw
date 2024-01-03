import { Routes } from '@angular/router';
import { Ejer1Component } from './views/ejer1/ejer1.component';
import { Ejer2Component } from './views/ejer2/ejer2.component';
import { Ejer3Component } from './views/ejer3/ejer3.component';


export const routes: Routes = [


    { path: '', redirectTo: 'ejercicio1', pathMatch: 'full' },
    { path: 'ejercicio1', component: Ejer1Component },
    { path: 'ejercicio2', component: Ejer2Component },
    { path: 'ejercicio3', component: Ejer3Component },

];
