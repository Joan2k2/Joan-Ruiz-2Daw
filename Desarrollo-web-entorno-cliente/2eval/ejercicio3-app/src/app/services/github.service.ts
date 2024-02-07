import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { GitHubItems } from '../interfaces/response.interface';
import { Welcome } from '../interfaces/response.interface';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class GithubService {


  //creas un constructor con la variable http que es un httpclient, creas la funcion getResponse que gastaras en los ts de las vistas el response espera un user->
  // paraautocompletar la ruta, por si lo haces así luego pones lo ddel observable y entre <> pones la interfaz a gastar, normalmente la general luego filtraras ->
  // luego retornas con el http creaado obteniendo los items de la interfaz segun la url
  constructor(public http : HttpClient) { }
  public getResponse(users : string):Observable<GitHubItems>{
    return this.http.get<GitHubItems>('https://api.github.com/search/users?q='+users)
  }

  public getResponseMemeigo():Observable<Welcome>{
    return this.http.get<Welcome>('https://api.imgflip.com/get_memes')
  }
}
