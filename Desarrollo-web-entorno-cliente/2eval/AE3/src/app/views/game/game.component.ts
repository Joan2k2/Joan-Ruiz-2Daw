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
  youWin: boolean = false;
  gameOver: boolean = false;
  firstNumber: number=999;
  secondNumber: number=999;
  games: number=1;
  fails: number=0;
  arrayGodSet: number=0;
  firstLvl = ["red","yellow", "green", "purple"];
  secondLvl = ["red", "yellow", "green", "purple", "blue", "violet", "orange", "grey", "black"];
  thirdLvl = ["red", "yellow", "green", "purple", "blue", "violet", "orange", "grey", "black","silver", "fuchsia", "lime", "navy", "aqua", "chartreuse", "cornflowerblue"];
  arrayGod=[""];
  startGame() {
    this.firstgame();
    this.gameOver=false;
    
  }
  firstgame(){
    this.shuffle(this.firstLvl);
    this.gameStarted = true;
    this.games=1;
    this.randomColor(this.firstLvl);
      // Esperar 2 segundos antes de que el usuario pueda intentar recordar
      setTimeout(() => {
        // Reiniciar el tablero
        this.randomColor(this.firstLvl);
      }, 5000);

  }
  secondgame(){
    this.shuffle(this.secondLvl);
    this.gameStarted = true;
    this.games=2;
    this.randomColor(this.secondLvl);
      // Esperar 2 segundos antes de que el usuario pueda intentar recordar
      setTimeout(() => {
        // Reiniciar el tablero
        this.randomColor(this.secondLvl);
      }, 5000);

  }
  thirdgame(){
    this.shuffle(this.thirdLvl);
    this.gameStarted = true;
    this.games=3;
    this.randomColor(this.thirdLvl);
      // Esperar 2 segundos antes de que el usuario pueda intentar recordar
      setTimeout(() => {
        // Reiniciar el tablero
        this.randomColor(this.thirdLvl);
      }, 5000);

  }

randomColor(array:string[]): void {
  console.log("el arraygodset es "+this.arrayGodSet);
  const intervalo = setInterval(() => {
    this.shuffle(array);
  }, 100);

  // Detener el intervalo después de 3 segundos
  setTimeout(() => {
    
    clearInterval(intervalo);
    // this.arrayGod=[];
    if(this.arrayGodSet===1){
      this.arrayGodSet=0;
    }else{
      this.arrayGod=[...array];
      this.arrayGodSet++;
      console.log("se seteo el arraygod");
    }
    
    

    console.log("el arroy god ahora es " + this.arrayGod);
  }, 3000);
}
changeColors(index: number){


  if(this.firstNumber===999){
    this.firstNumber=index;

  }else if(this.secondNumber===999){
    this.secondNumber=index;

    switch (this.games) {
      case 1:

    const tempValue1 = this.firstLvl[this.firstNumber];

    this.firstLvl[this.firstNumber] = this.firstLvl[this.secondNumber];
    this.firstLvl[this.secondNumber] = tempValue1;

    // Reiniciar los números
    this.firstNumber = 999;
    this.secondNumber = 999;
    break;
      case 2:

        
        const tempValue2 = this.secondLvl[this.firstNumber];

        this.secondLvl[this.firstNumber] = this.secondLvl[this.secondNumber];
        this.secondLvl[this.secondNumber] = tempValue2;
    
        // Reiniciar los números
        this.firstNumber = 999;
        this.secondNumber = 999;
        break;
      case 3:

        
        const tempValue3 = this.thirdLvl[this.firstNumber];

        this.thirdLvl[this.firstNumber] = this.thirdLvl[this.secondNumber];
        this.thirdLvl[this.secondNumber] = tempValue3;
    
        // Reiniciar los números
        this.firstNumber = 999;
        this.secondNumber = 999;
        break;

    }

  }


}
checkResults(){

  let won=0;
  switch (this.games) {
    case 1:
      
      for (let i = 0; i < this.firstLvl.length; i++) {
        if (this.firstLvl[i] === this.arrayGod[i]) {
         won++;
        }else{
          this.fails++;
          if(this.fails != 3){
          alert("Has fallado, solo te quedan " + (3-this.fails) + " intentos");
          break;
          }

        }

        if(this.fails===3){
          this.gameOver=true;
          this.gameStarted=false;
          this.games=0;
          break;
        }

        if(won===this.firstLvl.length){
          this.games=2;
          won=0;
          this.secondgame();
        }
      }
      break;
    case 2:
      for (let i = 0; i < this.secondLvl.length; i++) {
        if (this.secondLvl[i] === this.arrayGod[i]) {
          won++;
        }else{
          this.fails++;
          if(this.fails != 3){
          alert("Has fallado, solo te quedan " + (3-this.fails) + " intentos");
          break;
          }
        }

        if(this.fails===3){
          this.gameOver=true;
          this.gameStarted=false;
          this.games=0;
          break;
        }

        if(won===this.secondLvl.length){
          this.games=3;
          won=0;
          this.thirdgame();
        }
      }
      break;
    case 3:
      for (let i = 0; i < this.thirdLvl.length; i++) {
        if (this.thirdLvl[i] === this.arrayGod[i]) {
          won++;
        }else{
          this.fails++;
          if(this.fails != 3){
          alert("Has fallado, solo te quedan " + (3-this.fails) + " intentos");
          break;
          }
        }

        if(this.fails===3){
          this.gameOver=true;
          this.gameStarted=false;
          this.games=0;
          break;
        }

        if(won===this.thirdLvl.length){
          won=0;
          console.log("you won");
          this.youWin=true;
          this.gameStarted=false;
          this.games=0;
        }
      }
      break;

  }

}

shuffle(array:string[]){

  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}


}


