import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable()
export class UsuariosService {
  constructor(
    private http: HttpClient
  ) {

  }

  public getAll(fullname: string) {
    return this.http.get('http://127.0.0.1:8000/api/users', {
      headers: new HttpHeaders({
        'Content-Type': 'application/json'
      }),
      params: new HttpParams({
        fromObject: {
          'filters[fullname]': fullname
        }
      })
    });
  }

  public getOne(id: number) {
    return this.http.get('http://127.0.0.1:8000/api/users/' + id, {
      headers: new HttpHeaders({
        'Content-Type': 'application/json'
      })
    });
  }
}
