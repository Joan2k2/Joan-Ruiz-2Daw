import { Component } from '@angular/core';

@Component({
  selector: 'app-article',
  standalone: true,
  imports: [],
  templateUrl: './article.component.html',
  styleUrl: './article.component.css'
})
export class ArticleComponent {

     miImagen:HTMLImageElement = document.getElementsByTagName('img')[0] as HTMLImageElement;
   public imageHover(event:MouseEvent): void {
    console.log(event);
    const ima: HTMLImageElement = <HTMLImageElement>event.target;
    
      ima.src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.R-UBgBsvLf38Dk1SA6SQrAHaFE%26pid%3DApi&f=1&ipt=4705062951287dd9d4a073000259ae872abfa86e9e2da2034cd0b05c75e28a04&ipo=images";
      ima.addEventListener('mouseout', () => {
        ima.src="https://www.cesvalenciatour.com/wp-content/uploads/2020/12/100419E0-DFF6-48AA-926F-0B0C044BA08B.jpeg";

      });
    }
    public imageHoverOut(event:MouseEvent): void {
      console.log(event);
      const ima: HTMLImageElement = <HTMLImageElement>event.target;
      
     
          ima.src="https://www.cesvalenciatour.com/wp-content/uploads/2020/12/100419E0-DFF6-48AA-926F-0B0C044BA08B.jpeg";
  
      
      }

}
