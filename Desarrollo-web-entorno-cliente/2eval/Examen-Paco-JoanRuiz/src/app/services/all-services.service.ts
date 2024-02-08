import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { allPlayers } from '../interfaces/response.interface';
import { stats } from '../interfaces/response.interface';

import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AllServicesService {

  constructor(public http : HttpClient) { }
  public getResponseNba(page:number):Observable<allPlayers>{
    return this.http.get<allPlayers>('https://www.balldontlie.io/api/v1/players/?page='+page+'/?per_page=100')
  }
  public getResponseStatsNba(id:number):Observable<allPlayers>{
    return this.http.get<allPlayers>('https://www.balldontlie.io/api/v1/stats/?player_ids[]='+id)
  }
}
