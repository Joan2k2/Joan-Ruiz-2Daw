import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Github1Component } from './github1.component';

describe('Github1Component', () => {
  let component: Github1Component;
  let fixture: ComponentFixture<Github1Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Github1Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Github1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
