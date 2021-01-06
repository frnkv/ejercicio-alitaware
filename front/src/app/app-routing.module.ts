import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BusquedaUsuariosComponent } from './busqueda-usuarios/busqueda-usuarios.component';
import { ListadoEquiposComponent } from './listado-equipos/listado-equipos.component';
import { PantallaInicioComponent } from './pantalla-inicio/pantalla-inicio.component';
import { EquiposResolver } from './shared/resolvers/equipos.resolver';

const routes: Routes = [
  {
    path: '',
    pathMatch: 'full',
    component: PantallaInicioComponent
  },
  {
    path: 'usuarios',
    pathMatch: 'full',
    component: BusquedaUsuariosComponent
  },
  {
    path: 'equipos',
    pathMatch: 'full',
    component: ListadoEquiposComponent,
    resolve: {
      payments: EquiposResolver
    }
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
