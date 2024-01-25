import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Memigo1Component } from './memigo1.component';

describe('Memigo1Component', () => {
  let component: Memigo1Component;
  let fixture: ComponentFixture<Memigo1Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Memigo1Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Memigo1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
