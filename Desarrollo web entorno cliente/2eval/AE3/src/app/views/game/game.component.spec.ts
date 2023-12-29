import { ComponentFixture, TestBed } from '@angular/core/testing';

import { JuegoComponent } from './game.component';

describe('JuegoComponent', () => {
  let component: JuegoComponent;
  let fixture: ComponentFixture<JuegoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [JuegoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(JuegoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
