import { Component } from '@angular/core';
import { ReactiveFormsModule,FormControl, FormGroup } from '@angular/forms';
import { AllservicesService } from '../../services/allservices.service';
import { character,episode } from '../../interfaces/interface';


@Component({
  selector: 'app-ejercicio1',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './ejercicio1.component.html',
  styleUrl: './ejercicio1.component.css'
})
export class Ejercicio1Component {
  public constructor(public service:AllservicesService){}
  public arraycharacters:character[]=[];
  public episodes: episode[] = []
  public nameCharact:string="";
  reactiveForm = new FormGroup({
    name: new FormControl('',{ nonNullable: true }),
    cap: new FormControl('',{ nonNullable: true }),
    perso: new FormControl('',{ nonNullable: true }),
    });

    public onSubmit(): void {




      this.service.getCharacters(this.reactiveForm.getRawValue().name).subscribe((response)=>{
      this.arraycharacters=response.results;
      this.arraycharacters.map((item)=>{
        console.log(item.episode);


      })
      console.log(this.arraycharacters);
      // this.meme=this.arrayMemes[this.count].url;
      // this.titlememe=this.arrayMemes[this.count].name;



      })

      }


}
