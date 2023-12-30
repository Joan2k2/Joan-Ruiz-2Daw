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
  
  images1!: NodeListOf<HTMLImageElement>;
  images2!: NodeListOf<HTMLImageElement>;
  captionSpan1!: HTMLSpanElement;
  captionSpan2!: HTMLSpanElement;
  clicked: boolean = false;
  clikeds: number = 0;
  imgVisibility: boolean = false;
  showVisibility: boolean = false;
  memoryTypes: boolean = false;
  imgCliked: number=999;
  showVisibilityIn: boolean = false;

  public imageClicked(indexIma: number): void {
    this.showVisibilityIn=true;
    this.imgCliked=indexIma;
    this.clikeds++;
    this.clicked = true;
    this.memoryTypes=true;
    this.images1.forEach((image, index) => {
      if (index === indexIma) {
        image.style.display = 'block';
      } else {
        image.style.display = 'none';
      }
    });
    switch (this.imgCliked) {
      case 0:
        this.captionSpan1.textContent="Memoria corto plazo";
        this.captionSpan2.textContent="Memoria corto plazo";
        break;
      case 1:
        this.captionSpan1.textContent="Memoria largo plazo";
        this.captionSpan2.textContent="Memoria largo plazo";
        break;
      case 2:
        this.captionSpan1.textContent="Memoria declarativa";
        this.captionSpan2.textContent="Memoria declarativa";
        break;
      case 3:
        this.captionSpan1.textContent="Memoria procedimental";
        this.captionSpan2.textContent="Memoria procedimental";
        break;
      case 4:
        this.captionSpan1.textContent="Memoria sensorial";
        this.captionSpan2.textContent="Memoria sensorial";
        break;
      case 5:
        this.captionSpan1.textContent="Memoria verbal";
        this.captionSpan2.textContent="Memoria verbal";
        break;
    }
    
    if (this.clikeds === 2) {
      this.imgCliked=999;
      this.showVisibility=true;
      this.imgVisibility = true;
      this.memoryTypes=false;
      this.images2.forEach((image, index) => {
        if (index === indexIma) {
          image.style.display = '';
        } else {
          image.style.display = 'none';
        }
      });
    } else if (this.clikeds > 2) {
      this.showVisibilityIn=false;
      this.showVisibility=false;
      this.memoryTypes=false;
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

    this.captionSpan1=imageContainer1.querySelector(".caption");
    this.captionSpan2=imageContainer2.querySelector(".caption");
  }
}
