import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Memigo3Component } from './memigo3.component';

describe('Memigo3Component', () => {
  let component: Memigo3Component;
  let fixture: ComponentFixture<Memigo3Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Memigo3Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Memigo3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
