import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Github2Component } from './github2.component';

describe('Github2Component', () => {
  let component: Github2Component;
  let fixture: ComponentFixture<Github2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Github2Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Github2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
