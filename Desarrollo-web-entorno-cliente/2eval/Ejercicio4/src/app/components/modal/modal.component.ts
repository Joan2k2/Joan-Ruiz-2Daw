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
  @Input() modal :string="modal";

  @Output() closed =new EventEmitter<string>();

  


  public onClosed(){

  
  this.closed.emit("modal");
    
  }

}
