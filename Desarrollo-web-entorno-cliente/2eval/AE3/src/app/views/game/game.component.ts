import { Component, OnInit } from '@angular/core';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-game',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './game.component.html',
  styleUrl: './game.component.css'
})
export class GameComponent {
  // Variables para el juego
  gameStarted: boolean = false;
  tiempoCambio: number = 100; // 0.1 segundos
  tiempoEsperaAntesDeIniciar: number = 3000; // 3 segundos
  tiempoEsperaDespuesDeIniciar: number = 2000; // 2 segundos
  firstNumber: number=999;
  secondNumber: number=999;
  games: number=1;
  firstLvl = ["red","yellow", "green", "purple"];
  secondLvl = ["red", "yellow", "green", "purple", "blue", "violet", "orange", "grey", "black"];
  thirdLvl = ["red", "yellow", "green", "purple", "blue", "violet", "orange", "grey", "black","silver", "fuchsia", "lime", "navy", "aqua", "chartreuse", "cornflowerblue"];
  arrayGod=[""];
  startGame() {
    this.firstgame();
    
  }
  firstgame(){
    this.shuffle(this.firstLvl);
    this.gameStarted = true;

    this.randomColor(this.firstLvl);
      // Esperar 2 segundos antes de que el usuario pueda intentar recordar
      setTimeout(() => {
        // Reiniciar el tablero
        this.randomColor(this.firstLvl);
      }, 5000);

  }

randomColor(array:string[]): void {
  const intervalo = setInterval(() => {
    this.shuffle(array);
  }, this.tiempoCambio);

  // Detener el intervalo después de 3 segundos
  setTimeout(() => {
    clearInterval(intervalo);
    // this.arrayGod=[];
    this.arrayGod=array;
  }, 3000);
}
changeColors(index: number){


  if(this.firstNumber===999){
    this.firstNumber=index;
    console.log(this.firstNumber + "El primero");

  }else if(this.secondNumber===999){
    this.secondNumber=index;
    console.log(this.secondNumber + "El segundo");

    switch (this.games) {
      case 1:

    const tempValue = this.firstLvl[this.firstNumber];

    this.firstLvl[this.firstNumber] = this.firstLvl[this.secondNumber];
    this.firstLvl[this.secondNumber] = tempValue;

    // Reiniciar los números
    this.firstNumber = 999;
    this.secondNumber = 999;
    break;
      case 2:
        console.log("Caso 1");
        break;
      case 3:
        console.log("Caso 2");
        break;

    }

  }
  console.log(this.firstNumber);
  console.log(this.secondNumber);

}



shuffle(array:string[]){

  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}




}
