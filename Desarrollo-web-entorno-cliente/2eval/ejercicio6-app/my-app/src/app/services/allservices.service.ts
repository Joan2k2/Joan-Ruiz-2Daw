import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { allCharacters } from '../interfaces/interface';

@Injectable({
  providedIn: 'root'
})
export class AllservicesService {

  constructor(public http : HttpClient) { }


  public getCharacters(character:string):Observable<allCharacters>{
    return this.http.get<allCharacters>('https://rickandmortyapi.com/api/character/?name='+ character)
  }

  public getCaps(cap:string):Observable<allCharacters>{
    return this.http.get<allCharacters>('https://rickandmortyapi.com/api/episode/'+ cap)
  }

}
