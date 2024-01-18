import { TestBed } from '@angular/core/testing';

import { PruebaClaseService } from './prueba-clase.service';

describe('PruebaClaseService', () => {
  let service: PruebaClaseService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(PruebaClaseService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
