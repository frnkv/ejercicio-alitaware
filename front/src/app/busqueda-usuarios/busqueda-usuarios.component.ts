import { Component, OnInit } from '@angular/core';
import { FormControl } from '@angular/forms';
import { Observable } from 'rxjs';
import { debounceTime, distinctUntilChanged, map, startWith, switchMap } from 'rxjs/operators';
import { Direccion } from '../shared/models/direccion.model';
import { Usuario } from '../shared/models/usuario.model';
import { UsuariosService } from '../shared/services/usuarios.service';

declare var ol: any;

@Component({
  selector: 'app-busqueda-usuarios',
  templateUrl: './busqueda-usuarios.component.html',
  styleUrls: ['./busqueda-usuarios.component.scss']
})
export class BusquedaUsuariosComponent implements OnInit {

  inputControl = new FormControl();

  filteredOptions: Observable<Usuario[]>;

  direccion: Direccion | undefined;

  map: any | undefined;


  constructor(
    private usuariosService: UsuariosService
  ) {
    this.filteredOptions = this.inputControl.valueChanges
      .pipe(
        startWith(null),
        debounceTime(400),
        distinctUntilChanged(),
        switchMap(val => {
          return this.filter(val || null)
        })
      );
  }

  ngOnInit(): void {
  }

  filter(val: string): Observable<Usuario[]> {
    return this.usuariosService.getAll(val).pipe(
      map((response: any) => {
        const usuarios: Usuario[] = [];

        response.data.forEach((element: any) => {
          usuarios.push(element as Usuario);
        });


        return usuarios;
      })
    );
  }

  public selectedOption($event: any) {
    const user = $event.option.value as Usuario;

    this.usuariosService.getOne(user.id).subscribe((response: any) => {
      this.direccion = response.direccion as Direccion;

      this.map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([this.direccion.ubicacion.lon, this.direccion.ubicacion.lat]),
          zoom: 8
        })
      });

    });
  }

  optionToDisplay(option: Usuario) {

    if (option === null) {
      return '';
    } else {
      return option.name + ' ' + option.surname;
    }
  }

}
