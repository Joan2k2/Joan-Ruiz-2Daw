import { Component } from '@angular/core';
import { NgClass } from '@angular/common';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [NgClass],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})
export class HeaderComponent {
  public title: string = 'La Ciudad de las Artes y las Ciencias';
  public test:boolean=false;
  public headerHover(): void {
    
    this.test=!this.test;

    }
    public changeText(): void {
    

      this.title="Toma mango!!"
  
      } 

}
