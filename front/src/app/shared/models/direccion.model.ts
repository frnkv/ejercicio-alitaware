export interface Direccion {
  parametros: {
    lat: number,
    long: number
  };

  ubicacion: {
    departamento: {
      id: string,
      nombre: string
    },
    lat: number,
    lon: number,
    municipio: {
      id: string,
      nombre: string
    },
    provincia: {
      id: string,
      nombre: string
    }
  };
}
