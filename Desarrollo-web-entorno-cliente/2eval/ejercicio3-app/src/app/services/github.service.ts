import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { GitHubItems } from '../interfaces/response.interface';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class GithubService {

  constructor(public http : HttpClient) { }
  public getResponse(users : string):Observable<GitHubItems>{
    return this.http.get<GitHubItems>('https://api.github.com/search/users?q='+users)
  }
}
