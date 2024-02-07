import { Component, EventEmitter, Input, Output } from '@angular/core';
import { NgClass,NgStyle } from '@angular/common';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgClass,NgStyle],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() ima :string ="url(https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg)";
  @Input() username :string ="";
  @Input() modal :string ="modal";
  @Output() outmodal = new EventEmitter<string>();


  public onClose(){
    console.log("top");
    this.modal="modal"
    this.outmodal.emit("modal")
  }
}
