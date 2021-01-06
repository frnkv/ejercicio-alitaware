import { Resolve, ActivatedRouteSnapshot, RouterStateSnapshot } from '@angular/router';

import { Injectable } from '@angular/core';
import { Payment } from '../models/payment.model';
import { EquiposService } from '../services/equipos.service';


@Injectable()
export class EquiposResolver implements Resolve<Promise<Payment[]>> {

    constructor(
        private equiposService: EquiposService
    ) {

    }

    resolve(route: ActivatedRouteSnapshot, state: RouterStateSnapshot): Promise<Payment[]> {
        return new Promise((resolve, reject) => {
          this.equiposService.getAll().subscribe((response: any) => {
            const payments: Payment[] = [];

            response.data.forEach((element: any) => {
              payments.push(element as Payment);
            });

            resolve(payments);
          });
        });
    }
}
