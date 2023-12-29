import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CortoplazoComponent } from './cortoplazo.component';

describe('CortoplazoComponent', () => {
  let component: CortoplazoComponent;
  let fixture: ComponentFixture<CortoplazoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CortoplazoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CortoplazoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
