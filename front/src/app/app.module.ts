import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PantallaInicioComponent } from './pantalla-inicio/pantalla-inicio.component';
import { BusquedaUsuariosComponent } from './busqueda-usuarios/busqueda-usuarios.component';
import { ListadoEquiposComponent } from './listado-equipos/listado-equipos.component';
import { EquiposResolver } from './shared/resolvers/equipos.resolver';
import { EquiposService } from './shared/services/equipos.service';
import { HttpClientModule } from '@angular/common/http';
import { UsuariosService } from './shared/services/usuarios.service';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatSelectModule } from '@angular/material/select';
import { MatInputModule } from '@angular/material/input';
import { MatAutocompleteModule } from '@angular/material/autocomplete';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

@NgModule({
  declarations: [
    AppComponent,
    PantallaInicioComponent,
    BusquedaUsuariosComponent,
    ListadoEquiposComponent
  ],
  imports: [
    BrowserAnimationsModule,
    AppRoutingModule,
    HttpClientModule,
    MatFormFieldModule,
    FormsModule,
    MatInputModule,
    ReactiveFormsModule,
    MatSelectModule,
    MatAutocompleteModule
  ],
  providers: [
    EquiposResolver,
    EquiposService,
    UsuariosService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
