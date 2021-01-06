import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable()
export class EquiposService {
  constructor(
    private http: HttpClient
  ) {

  }

  public getAll() {
    return this.http.get('http://127.0.0.1:8000/api/payments', {
      headers: new HttpHeaders({
        'Content-Type': 'application/json'
      }),
      params: new HttpParams({
        fromObject: {
          with: 'userWhoPaid,subscriptions,subscriptions.subscriber,subscriptions.service'
        }
      })
    });
  }
}
