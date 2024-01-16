import { Component, OnInit, OnDestroy } from '@angular/core';
import { interval, Subscription } from 'rxjs';
@Component({
  selector: 'app-largoplazo',
  standalone: true,
  imports: [],
  templateUrl: './largoplazo.component.html',
  styleUrl: './largoplazo.component.css'
})
export class LargoplazoComponent implements OnInit, OnDestroy {

  images: string[] = ['https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/1369847707_4085_memory-1.jpg?itok=aZRKeJXR', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF8a2YKUyrUrEEkYxECnP4zI3LXpfEhhEZhg&usqp=CAU', 'https://easyscienceforkids.com/wp-content/uploads/2018/04/Memory-facts-18-4-1-758x635.jpg'];
  indiceActual: number = 0;
  intervaloCambio: Subscription = new Subscription();


  ngOnInit() {
    this.iniciarCarruselAutomatico();
  }

  ngOnDestroy() {
    this.detenerCarruselAutomatico();
  }

  iniciarCarruselAutomatico() {
    this.intervaloCambio = interval(5000).subscribe(() => {
      this.siguienteImagen();
    });
  }

  detenerCarruselAutomatico() {
    if (this.intervaloCambio) {
      this.intervaloCambio.unsubscribe();
    }
  }

  mostrarImagen() {
    console.log('Imagen actual:', this.images[this.indiceActual]);
  }

  siguienteImagen() {
    this.indiceActual = (this.indiceActual + 1) % this.images.length;
  }

  anteriorImagen() {
    this.indiceActual = (this.indiceActual - 1 + this.images.length) % this.images.length;
  }

}
