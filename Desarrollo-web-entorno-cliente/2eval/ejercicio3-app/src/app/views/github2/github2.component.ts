import { Component } from '@angular/core';
import { GithubService } from '../../services/github.service';
import { GithubUserInfo } from '../../interfaces/response.interface';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-github2',
  standalone: true,
  imports: [ModalComponent],
  templateUrl: './github2.component.html',
  styleUrl: './github2.component.css'
})
export class Github2Component {

  public constructor(public service:GithubService){}
  public usersarray:GithubUserInfo[]=[];
  public ima: string="";
  public modal:string="modal";
  public username:string="";

  
//creas la funcion onclick que quieres que cuando clickes haga la llamada a la api, importas el array de githubuserInfo porque en la función get response ya devulve el objeto
//y solo quieres ahora lo de dentro y importas el service para poder gastar la funcion y luego le pasas los items al array
  onClick(){
    this.service.getResponse("angular").subscribe((response)=>{

      this.usersarray=response.items;
      console.log(this.usersarray);
      

    })



  }
  onClickIma(imag:string,user:string){
    console.log(imag);
    this.modal="modal show-modal";
    this.username=user;
    this.ima= imag;
  


  }

  onClose(data:string){
    this.modal=data;



  }

}
