import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';
import { GithubService } from '../../services/github.service';
import { Meme } from '../../interfaces/response.interface';
@Component({
  selector: 'app-memigo2',
  standalone: true,
  imports: [CardComponent],
  templateUrl: './memigo2.component.html',
  styleUrl: './memigo2.component.css'
})
export class Memigo2Component {
  public constructor(public service:GithubService){}
  public arrayMemes:Meme[]=[];
public meme:string="";
public titlememe:string="";
public count:number=0;


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

}
