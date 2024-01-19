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
  @Output() theTitle = new EventEmitter<string>();
  @Output() theImage = new EventEmitter<string>();

  public clicked(){
    this.theTitle.emit(this.title);
    this.theImage.emit(this.ima);
    
  }
  
}
