import { Component } from '@angular/core';

@Component({
  selector: 'app-banner',
  standalone: true,
  imports: [],
  templateUrl: './banner.component.html',
  styleUrl: './banner.component.css'
})
export class BannerComponent {
    public hovered: boolean = true;
    public banerHover(event:MouseEvent): void {
    
      this.hovered=false;
      }
      public banerHoverOut(event:MouseEvent): void {
        this.hovered=true;
        }
    
}
