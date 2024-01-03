import { Component } from '@angular/core';
import { NgClass,NgStyle } from '@angular/common';

@Component({
  selector: 'app-cortoplazo',
  standalone: true,
  imports: [NgClass,NgStyle ],
  templateUrl: './cortoplazo.component.html',
  styleUrl: './cortoplazo.component.css'
})
export class CortoplazoComponent {

  theSwitch: number=0;
  imgMoved:boolean=false;
  index: number=0;
  cliks: number=0;
  firstImgs=[
    "https://www.olympiabenefits.com/hubfs/Vega/Blog%20Pages/Psychology/What%20is%20memory.png",
    "https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/1369847707_4085_memory-1.jpg?itok=aZRKeJXR",
    "https://mindworks.org/app/uploads/2023/06/Does-Meditation-Improve-memory.jpg",
  ]

  secondImgs=[
    "https://images.ctfassets.net/cnu0m8re1exe/uTkqQAbjpnnpceaY9UzLE/2d49aaee28ca31631c33a02ff89b437c/brainresearch.jpg?fm=jpg&fl=progressive&w=660&h=433&fit=fill",
    "https://media.npr.org/assets/img/2023/08/07/gettyimages-1440469647-db0c65c135844b757df227afebfa240fd400630c.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERe-RZMXEfeALxm-QfjABDm_b2ggQEBJdng&usqp=CAU",
  ]

  thirdImgs=[
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ95HvxEmQ-GQBMSL48P-DpN445HLKgqG2EmJu57Fr8Ix4rw0mkf01iMh3Hew2gS3I9JI&usqp=CAU",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF8a2YKUyrUrEEkYxECnP4zI3LXpfEhhEZhg&usqp=CAU",
    "https://images.theconversation.com/files/171522/original/file-20170530-23699-itx0un.jpg?ixlib=rb-1.1.0&rect=0%2C181%2C2987%2C2163&q=45&auto=format&w=926&fit=clip",
  ]

  titles=[
    "Memoria Corto Plazo",
    "La memoria a corto plazo es la capacidad para almacenar, mantener y recuperar cierta cantidad de información durante un corto periodo de tiempo.",
    "Cuando la información pasa a estar disponible por un tiempo indefinido, es cuando hablamos de memoria a largo plazo",
  ]

  public next() {
    this.cliks++;
    if(this.cliks===6){
      this.cliks=0;
      this.imgMoved=false;
    }
    switch (this.cliks) {
      case 0:
        this.index=0;
        this.imgMoved=false;
        break;
      case 1:
        console.log("Caso 1");
        this.imgMoved=true;
        this.index=1;
        break;
      case 2:
        console.log("Caso 2");
        this.imgMoved=false;
        break;
      case 3:
        console.log("Caso 3");
        this.imgMoved=true;
        this.index=2;
        break;
      case 4:
        console.log("Caso 4");
        this.imgMoved=false;
        break;
      case 5:
        console.log("Caso 5");
        this.imgMoved=true;
        this.index=0;
        break;
      default:
        console.log("Número fuera de rango");
    }
    
    
  }
  public previous() {
    if(this.cliks===0){
      this.index=0;
      this.imgMoved=false;
    }else{
      this.cliks--;
      switch (this.cliks) {
        case 0:
          this.index=0;
          this.imgMoved=false;
          break;
        case 1:
          console.log("Caso 1");
          this.imgMoved=true;
          this.index=1;
          break;
        case 2:
          console.log("Caso 2");
          this.imgMoved=false;
          this.index=1;
          break;
        case 3:
          console.log("Caso 3");
          this.imgMoved=true;
          this.index=2;
          break;
        case 4:
          console.log("Caso 4");
          this.imgMoved=false;
          this.index=2;
          break;
        case 5:
          console.log("Caso 5");
          this.imgMoved=true;
          this.index=0;
          break;
        default:
          console.log("Número fuera de rango");
      }
    }
    
  }

}
