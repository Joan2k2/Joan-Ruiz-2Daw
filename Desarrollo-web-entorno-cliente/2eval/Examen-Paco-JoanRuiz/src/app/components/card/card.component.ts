import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-card',
  standalone: true,
  imports: [],
  templateUrl: './card.component.html',
  styleUrl: './card.component.css'
})
export class CardComponent {
  @Input() nameNbaP:string="";
  @Input() lastNameNbaP:string="";
  @Input() photoNbaP:string="https://graffica.info/wp-content/uploads/2017/08/NBA-logo-png-download-free-1200x675.png";
  @Input() numberNbaP:number=0;
  public allName:string="";
  @Output() modal = new EventEmitter<{name: string, photo: string,modal:string,id:number}>();


  public openModal() :void{
    this.allName=this.nameNbaP +" "+ this.lastNameNbaP;
    this.modal.emit({name:this.allName,photo:this.photoNbaP,modal:"modal show-modal",id:this.numberNbaP});
    
  }

}
