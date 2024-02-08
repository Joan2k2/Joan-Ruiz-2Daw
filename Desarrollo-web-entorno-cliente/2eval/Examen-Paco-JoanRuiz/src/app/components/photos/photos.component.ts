import { Component, EventEmitter, Input,Output } from '@angular/core';

@Component({
  selector: 'app-photos',
  standalone: true,
  imports: [],
  templateUrl: './photos.component.html',
  styleUrl: './photos.component.css'
})
export class PhotosComponent {
  @Input() imagesArray:string[]=[];
  @Input() name:string="";
  @Input() type:number=0;

  public fruits:string[]=['platanos', 'naranjas', 'manzanas', 'peras','kiwis'];
  public vegetables:string[]=['lechuga', 'berenjena', 'cebolla', 'tomate','zanahorias'];

  @Output() modal = new EventEmitter<{name: string, photo: string,modal:string}>();
  public zoomed:number=0;
  
  public imageclicked:string="";

  public zoom(data:string,index:number){
    if(this.type===1){
      this.name=this.vegetables[index];
    }else{
      this.name=this.fruits[index];
    }

  this.zoomed=1;
  this.imageclicked=data;
  console.log(this.imageclicked);
  console.log(this.name);

  
  }

  public openModal() :void{
    
    this.modal.emit({name:this.name,photo:this.imageclicked,modal:"modal show-modal"});
    
  }

}
