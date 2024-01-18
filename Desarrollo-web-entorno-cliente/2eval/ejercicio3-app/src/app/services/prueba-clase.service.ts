import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Response } from '../interfaces/response.interface';
@Injectable({
  providedIn: 'root'
})
export class PruebaClaseService {

  constructor(public http:HttpClient) { }

  public getResponse():Observable<Response>{
  return this.http.get<Response>("https://api.thecatapi.com/v1/images/search?size=full");

  }
  
}
