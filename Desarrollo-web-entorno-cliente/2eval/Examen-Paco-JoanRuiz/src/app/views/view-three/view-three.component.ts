import { Component } from '@angular/core';
import { PhotosComponent } from '../../components/photos/photos.component';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-view-three',
  standalone: true,
  imports: [PhotosComponent,ModalComponent],
  templateUrl: './view-three.component.html',
  styleUrl: './view-three.component.css'
})
export class ViewThreeComponent {
  public select:number=1;
  public modal:string="modal";
  public name:string="";
  public photo:string="";
  public fruitsImages:string[] = [
    "https://s1.eestatic.com/2021/03/09/ciencia/nutricion/564704609_174935756_1706x960.jpg",
    "https://www.ocu.org/-/media/ocu/images/home/alimentacion/alimentos/naranjas_800x450.jpg?rev=b62ade22-d689-46b3-9aab-f52376e0c534&mw=660&hash=D52A46A597C765C56565652D0086F140",
    "https://cdn1.img.sputniknews.lat/img/07e6/0b/08/1132232783_0:257:2731:1793_1920x0_80_0_0_fdbda0e88e9a5ad09cdcc6a7a315c196.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWc2SqzTiwf1tQ44hZKyJAomr7zLFVz4Vl7Q&usqp=CAU",
    "https://as01.epimg.net/deporteyvida/imagenes/2018/07/14/portada/1531577760_565615_1531577889_noticia_normal.jpg"
];


public vegetablesImages:string[] = [
  'https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg',
  'https://estaticos-cdn.prensaiberica.es/clip/7d08691e-b082-4540-ad4f-51dc14f8d23b_16-9-aspect-ratio_default_0.jpg',
  'https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/10/02/morada-blanca-charlota-para-que-se-utiliza-cada-tipo-de-cebolla.jpeg',
  'https://static.eldiario.es/clip/73e21c3e-541d-4911-b3c4-ed2d64f3b164_16-9-aspect-ratio_default_0.jpg',
  'https://s1.eestatic.com/2019/10/04/ciencia/nutricion/verduras-frutas-nutricion_434216860_134609502_1706x960.jpg'
];

public clikVegetables(){
  this.select=1;

}
public clikfruits(){

  this.select=2;
}

public openModal(data:{name: string, photo: string,modal:string}){
this.modal=data.modal;
this.photo=data.photo;
this.name=data.name;

}
public closeModal(data:string){
  this.modal=data;

}

}
