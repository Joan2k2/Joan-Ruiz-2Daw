import { Routes } from '@angular/router';
import { Github1Component } from './views/github1/github1.component';
import { Github2Component } from './views/github2/github2.component';
import { Memigo1Component } from './views/memigo1/memigo1.component';
import { Memigo2Component } from './views/memigo2/memigo2.component';
import { Memigo3Component } from './views/memigo3/memigo3.component';

export const routes: Routes = [
    { path: '', pathMatch: 'full', redirectTo: 'github1' },
    { path: 'github1', component: Github1Component },
    { path: 'github2', component: Github2Component },
    { path: 'memigo1', component: Memigo1Component },
    { path: 'memigo2', component: Memigo2Component },
    { path: 'memigo3', component: Memigo3Component },
    




];
