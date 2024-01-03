import { Routes } from '@angular/router';
import { HomeComponent } from './views/home/home.component';
import { CortoplazoComponent } from './views/cortoplazo/cortoplazo.component';
import { LargoplazoComponent } from './views/largoplazo/largoplazo.component';
import { GameComponent } from './views/game/game.component';

export const routes: Routes = [

    { path: '', redirectTo: 'home', pathMatch: 'full' },
    { path: 'home', component: HomeComponent },
    { path: 'cortoPlazo', component: CortoplazoComponent },
    { path: 'largoPlazo', component: LargoplazoComponent },
    { path: 'game', component: GameComponent },
];
