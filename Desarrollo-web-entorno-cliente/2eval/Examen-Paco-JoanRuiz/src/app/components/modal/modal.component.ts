import { Component, EventEmitter, Input,Output } from '@angular/core';
import { NgClass } from '@angular/common';
import { AllServicesService } from '../../services/all-services.service';
import { stats } from '../../interfaces/response.interface';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgClass],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() name:string="";
  @Input() photo:string="";
  @Input() modal:string="modal";
  public constructor(public service:AllServicesService){}
  @Input() id:number=149;
  public stats:number[]=[];
  @Output() close = new EventEmitter<string>();

  public closeModal(){
    console.log("hola");
    this.modal="modal";
    this.close.emit("modal");

  }

}
