import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ActivatedRouteSnapshot } from '@angular/router';
import { Payment } from '../shared/models/payment.model';

@Component({
  selector: 'app-listado-equipos',
  templateUrl: './listado-equipos.component.html',
  styleUrls: ['./listado-equipos.component.scss']
})
export class ListadoEquiposComponent implements OnInit {

  public payments: Payment[] = [];

  constructor(
    private activatedRoute: ActivatedRoute
  ) {

  }

  ngOnInit(): void {
    this.payments = this.activatedRoute.snapshot.data.payments;

    console.log(this.payments);
  }

  public obtenerUsuariosAsociados(p: Payment): string {
    const usuarios: string[] = [];

    p.subscriptions.forEach((s) => {
      usuarios.push(s.user.name + ' ' + s.user.surname);
    })

    return usuarios.join(', ');
  }

  public obtenerNombreServicio(p: Payment): string {
    return p.subscriptions[0].service.name;
  }

}
