import { Component, EventEmitter, Input, Output } from '@angular/core';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-card',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './card.component.html',
  styleUrl: './card.component.css'
})
export class CardComponent {




  @Input() meme:string="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.dopl3r.com%2Fmedia%2Fmemes_files%2Fpov-vas-al-hormiguero-y-pablo-motos-tiene-que-medirte-las-tetas-para-entrar-dlsmD.jpg&f=1&nofb=1&ipt=6aac070302a9fb7f77d79c08c23f5b075ff5e2f3e51631b80a115cbc89b7fafe&ipo=images";
  @Input() titleMeme:string="Pablo motos te mide las tetas";

  @Output() open = new EventEmitter<string>();


  public openModal():void {
    this.open.emit("modal show-modal");
    }

}
