import { Component } from '@angular/core';
import { NgClass } from '@angular/common';

@Component({
  selector: 'app-menu',
  standalone: true,
  imports: [NgClass],
  templateUrl: './menu.component.html',
  styleUrl: './menu.component.css'
})
export class MenuComponent {
  
  public test:boolean=false;

  public showMenu(): void {
    
    this.test=!this.test;

    }

}
