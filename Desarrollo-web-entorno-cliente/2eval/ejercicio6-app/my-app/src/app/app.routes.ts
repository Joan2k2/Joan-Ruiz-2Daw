import { Routes } from '@angular/router';
import { Ejercicio1Component } from './views/ejercicio1/ejercicio1.component';
import { Ejercicio2Component } from './views/ejercicio2/ejercicio2.component';
import { EnunciadoComponent } from './views/enunciado/enunciado.component';

export const routes: Routes = [


    { path: '', pathMatch: 'full', redirectTo: 'enunciado' },
    { path: 'ejercicio1', component: Ejercicio1Component },
    { path: 'ejercicio2', component: Ejercicio2Component },
    { path: 'enunciado', component: EnunciadoComponent },
    

];
