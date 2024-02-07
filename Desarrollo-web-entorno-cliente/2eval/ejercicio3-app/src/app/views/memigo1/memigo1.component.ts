import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';
import { GithubService } from '../../services/github.service';
import { Meme } from '../../interfaces/response.interface';

@Component({
  selector: 'app-memigo1',
  standalone: true,
  imports: [CardComponent],
  templateUrl: './memigo1.component.html',
  styleUrl: './memigo1.component.css'
})
export class Memigo1Component {
  public constructor(public service:GithubService){}
  public arrayMemes:Meme[]=[];
  public meme:string="";
  public titlememe:string="";



 public ngOnInit(){
  this.service.getResponseMemeigo().subscribe((response)=>{

    this.arrayMemes=response.data.memes;
    console.log(this.arrayMemes);


  })
  

 }

}
