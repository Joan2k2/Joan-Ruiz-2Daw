import { Component } from '@angular/core';
import { PruebaClaseService } from '../../services/prueba-clase.service';
import { HeaderComponent } from '../../components/header/header.component';
import { FooterComponent } from '../../components/footer/footer.component';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [HeaderComponent,FooterComponent],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
  public constructor(public service:PruebaClaseService){}


  public getResponse():void{

    this.service.getResponse().subscribe((response)=>{

      console.log(response);
    })
  }

  public ngOnInit(){

    this.getResponse(); 
  }

}
