import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';
import { GithubService } from '../../services/github.service';
import { Meme } from '../../interfaces/response.interface';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-memigo3',
  standalone: true,
  imports: [CardComponent,ModalComponent],
  templateUrl: './memigo3.component.html',
  styleUrl: './memigo3.component.css'
})
export class Memigo3Component {



  public constructor(public service:GithubService){}
  public arrayMemes:Meme[]=[];
public meme:string="";
public titlememe:string="";
public count:number=0;
public modal:string="modal";

public nextmeme() {
  if(this.count===100){
    this.count=0;
  }else{
    this.count++;
  }
  this.meme=this.arrayMemes[this.count].url;
  this.titlememe=this.arrayMemes[this.count].name;
  
  
  }
  
  public memeback() {
    if(this.count===0){
      this.count=100;
    }else{
      this.count--;
    }
    this.meme=this.arrayMemes[this.count].url;
    this.titlememe=this.arrayMemes[this.count].name;
  
  }
  
  
  public ngOnInit(){
    this.service.getResponseMemeigo().subscribe((response)=>{
  
      this.arrayMemes=response.data.memes;
      console.log(this.arrayMemes);
      this.meme=this.arrayMemes[this.count].url;
      this.titlememe=this.arrayMemes[this.count].name;
  
    })
    
  
   }

   openModal(data: string) {
    this.modal=data;
    }

    onClose(data:string){
      this.modal=data;
  
  
  
    }

}
