import { Component } from '@angular/core';
import { ModalComponent } from '../../components/modal/modal.component';
import { CardComponent } from '../../components/card/card.component';
import { AllServicesService } from '../../services/all-services.service';
import { Datum, stats } from '../../interfaces/response.interface';

@Component({
  selector: 'app-view-two',
  standalone: true,
  imports: [ModalComponent,CardComponent],
  templateUrl: './view-two.component.html',
  styleUrl: './view-two.component.css'
})
export class ViewTwoComponent {
  public nextpage:number=1;
  public backpage:number=1;
  public page:number=0;
  public photo:string="https://graffica.info/wp-content/uploads/2017/08/NBA-logo-png-download-free-1200x675.png";
  public modal:string="modal";
  public name:string="Joan";
  public lastName:string="Joan";
  public constructor(public service:AllServicesService){}
  public arrayNba:Datum[]=[];
  public nbaName:string="Joan";
  public nbaId:number=149;
  public stats:stats[]=[];


  public closeModal(data:string){
    this.modal=data;
  
  }

  public ngOnInit(){
    this.service.getResponseNba(this.page).subscribe((response)=>{
      this.nextpage=response.meta.next_page;
      this.arrayNba=response.data;
      // this.nbaName=this.arrayNba.first_name;
      // this.titlememe=this.arrayNba[this.count].name;
      
      
  
    })
    
  
   }
   public openModal(data:{name: string, photo: string,modal:string,id:number}){
    this.modal=data.modal;
    this.photo=data.photo;
    this.name=data.name;
    this.nbaId=data.id;
    this.service.getResponseStatsNba(this.nbaId).subscribe((response)=>{
      // this.stats=response;
     
     
      // this.nbaName=this.arrayNba.first_name;
      // this.titlememe=this.arrayNba[this.count].name;
    
    })
    
    }
    public next(){
      this.page=this.nextpage;
      this.service.getResponseNba(this.page).subscribe((response)=>{
        this.nextpage=response.meta.next_page;
        this.arrayNba=response.data;
        console.log(response);
        // this.nbaName=this.arrayNba.first_name;
        // this.titlememe=this.arrayNba[this.count].name;
    
      })

    }
    public back(){
      if(this.page!=0){
        this.page--;
        this.service.getResponseNba(this.page).subscribe((response)=>{
          this.nextpage=response.meta.next_page;
          this.arrayNba=response.data;
          console.log(response);
          // this.nbaName=this.arrayNba.first_name;
          // this.titlememe=this.arrayNba[this.count].name;
      
        })
      }

    }
}
