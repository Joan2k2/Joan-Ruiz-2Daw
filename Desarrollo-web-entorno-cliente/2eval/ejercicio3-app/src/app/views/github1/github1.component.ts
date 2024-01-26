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

  

  onClick(){
    this.service.getResponse("Developer").subscribe((response)=>{

      this.usersarray=response.items;
      console.log(this.usersarray);
      

    })



  }

}
