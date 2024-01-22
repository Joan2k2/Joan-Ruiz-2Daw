import { Component,Input,Output,EventEmitter } from '@angular/core';
import { NgStyle } from '@angular/common';


@Component({
  selector: 'app-articles',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './articles.component.html',
  styleUrl: './articles.component.css'
})
export class ArticlesComponent {
  @Input() ima="Hello";
  @Input() title="World";
  @Input() sentence="si";

  @Output() theData = new EventEmitter<{ theTitle: string, theImage: string,theModal:boolean }>();
 

  public clicked(){
    
  this.theData.emit({
    theTitle: this.title,
    theImage: this.ima,
    theModal: true
    
  });
  console.log(this.ima);
  console.log(this.title);
  console.log(this.sentence);
  console.log(this.theData);
  }
  
}
