import { Component, ElementRef, ViewChild, AfterViewInit } from '@angular/core';
import { NgStyle, NgClass } from '@angular/common';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [NgStyle, NgClass],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css',
})
export class HomeComponent implements AfterViewInit {
  @ViewChild('firstset') firstset!: ElementRef;
  @ViewChild('secondset') secondset!: ElementRef;
  @ViewChild('allsecondset') allsecondset!: ElementRef;
  images1!: NodeListOf<HTMLImageElement>;
  images2!: NodeListOf<HTMLImageElement>;
  clicked: boolean = false;
  clikeds: number = 0;
  imgVisibility: boolean = false;
  public imageClicked(indexIma: number): void {
    this.clikeds++;
    console.log('he clikeado la imagen');
    console.log(this.clikeds);
    this.clicked = true;
    this.images1.forEach((image, index) => {
      if (index === indexIma) {
        image.style.display = 'block';
      } else {
        image.style.display = 'none';
      }
    });
    if (this.clikeds === 2) {
      console.log(this.clicked);
      this.imgVisibility = true;
      this.images2.forEach((image, index) => {
        if (index === indexIma) {
          image.style.display = '';
        } else {
          image.style.display = 'none';
        }
      });
    } else if (this.clikeds > 2) {
      this.clicked = false;
      this.imgVisibility = false;
      this.images1.forEach((image, index) => {
        image.style.display = '';
      });
      this.clikeds = 0;
    }
  }

  ngAfterViewInit() {
    // Accede a las imágenes después de que la vista se ha inicializado
    const imageContainer1 = this.firstset.nativeElement;
    const imageContainer2 = this.secondset.nativeElement;

    // Accede a las imágenes individualmente
    this.images1 = imageContainer1.querySelectorAll(
      'img'
    ) as NodeListOf<HTMLImageElement>;
    this.images2 = imageContainer2.querySelectorAll(
      'img'
    ) as NodeListOf<HTMLImageElement>;
  }
}
