import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Memigo2Component } from './memigo2.component';

describe('Memigo2Component', () => {
  let component: Memigo2Component;
  let fixture: ComponentFixture<Memigo2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Memigo2Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Memigo2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
