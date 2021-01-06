import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-pantalla-inicio',
  templateUrl: './pantalla-inicio.component.html',
  styleUrls: ['./pantalla-inicio.component.scss']
})
export class PantallaInicioComponent implements OnInit {

  constructor(
    private router: Router
  ) {

  }

  ngOnInit(): void {

  }

  public onIrAEquipos(): void {
    this.router.navigate(['equipos']);
  }

  public onIrABusquedaUsuarios(): void {
    this.router.navigate(['usuarios']);
  }

}
