import { Routes } from '@angular/router';
import { FruitsComponent } from './views/fruits/fruits.component';
import { VegetablesComponent } from './views/vegetables/vegetables.component';
import { FishesComponent } from './views/fishes/fishes.component';

export const routes: Routes = [


    { path: '', redirectTo: 'frutas', pathMatch: 'full' },
    { path: 'frutas', component: FruitsComponent },
    { path: 'verduras', component: VegetablesComponent },
    { path: 'pescados', component: FishesComponent },

];
