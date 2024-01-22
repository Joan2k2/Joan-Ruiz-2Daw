import { Component,EventEmitter,Input,Output } from '@angular/core';
import { NgStyle,NgClass } from '@angular/common';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgStyle,NgClass],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() theTitle = "";
  @Input() theImage ="";
  @Input() theModal :boolean=false;

  @Output() closed=new EventEmitter<boolean>();


  public onClose(){

  this.closed.emit(false);
  this.theModal=false;
    
  }

}
