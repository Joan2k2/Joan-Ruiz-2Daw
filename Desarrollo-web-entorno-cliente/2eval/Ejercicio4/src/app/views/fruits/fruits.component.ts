import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';

@Component({
  selector: 'app-fruits',
  standalone: true,
  imports: [CardComponent],
  templateUrl: './fruits.component.html',
  styleUrl: './fruits.component.css'
})
export class FruitsComponent {

public title:string="platano";
public ima:string="'https://s1.eestatic.com/2021/03/09/ciencia/nutricion/564704609_174935756_1706x960.jpg'";



}
