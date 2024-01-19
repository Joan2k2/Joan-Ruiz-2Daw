import { Component,Output, EventEmitter } from '@angular/core';
import { ArticlesComponent } from '../../components/articles/articles.component';

@Component({
  selector: 'app-vegetables',
  standalone: true,
  imports: [ArticlesComponent],
  templateUrl: './vegetables.component.html',
  styleUrl: './vegetables.component.css'
})
export class VegetablesComponent {
  
   products = [
    {
      title: "Lechuga",
      ima: "https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg",
      sentence: "Lechugas frescas del día"
    },
    {
      title: "Tomate",
      ima: "https://thefoodtech.com/wp-content/uploads/2020/06/Componentes-de-calidad-en-el-tomate-828x548.jpg",
      sentence: "Tomates del Perelló"
    },
    {
      title: "Berenjena",
      ima: "https://estaticos-cdn.prensaiberica.es/clip/7d08691e-b082-4540-ad4f-51dc14f8d23b_16-9-aspect-ratio_default_0.jpg",
      sentence: "Berenjenas de Almagro"
    },
    {
      title: "Cebolla",
      ima: "https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/10/02/morada-blanca-charlota-para-que-se-utiliza-cada-tipo-de-cebolla.jpeg",
      sentence: "Cebolla dulce"
    }
  ];

  

}
