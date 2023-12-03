import { Component } from '@angular/core';

@Component({
  selector: 'app-menu',
  standalone: true,
  imports: [],
  templateUrl: './menu.component.html',
  styleUrl: './menu.component.css'
})
export class MenuComponent {
 
  public onClick(): void {
    
    isMenuVisible: boolean = true;

    toggleMenuClass(): void {
      this.isMenuVisible = !this.isMenuVisible;
    }


    }

}
