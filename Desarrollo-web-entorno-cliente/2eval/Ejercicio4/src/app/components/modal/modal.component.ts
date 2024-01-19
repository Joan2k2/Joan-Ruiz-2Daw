import { Component,Input } from '@angular/core';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() theTitle = "";
  @Input() theImage ="";
  @Input() theModal ="";
}
