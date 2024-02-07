import { Component } from '@angular/core';
import { GithubUserInfo } from '../../interfaces/response.interface';
import { GithubService } from '../../services/github.service';

@Component({
  selector: 'app-github1',
  standalone: true,
  imports: [],
  templateUrl: './github1.component.html',
  styleUrl: './github1.component.css'
})
export class Github1Component {
  public constructor(public service:GithubService){}
  public usersarray:GithubUserInfo[]=[];

  
//creas la funcion onclick que quieres que cuando clickes haga la llamada a la api, importas el array de githubuserInfo porque en la función get response ya devulve el objeto
//y solo quieres ahora lo de dentro y importas el service para poder gastar la funcion y luego le pasas los items al array
  onClick(){
    this.service.getResponse("Developer").subscribe((response)=>{

      this.usersarray=response.items;
      console.log(this.usersarray);
      

    })



  }

}
