Ejercicio técnico.



El front se realizó en Angular utilizando la librería de bootstrap y angular material. Para la visualización del mapa se utilizó OpenStreetMaps con OpenLayout.


Decisiones de modelo de datos:


Se creo una tabla intermedia llamada Subscripciones y una tabla de pagos. Con la tabla de pagos doy lugar a definir los diferentes "equipos" ya que el pago se comparte para todas las subscripcinoes del mismo servicio para los usuarios que hubiera decidido el contratista. Si bien, esto en la practica real no estaria bien, para el caso de uso dado, no abria problema.


La api no tiene autenticacion (utiliza el middleware guest), debido a que no se pidio. Esto, nuevamente, en la practica real no estaria bien.


Se construyerons los endpoint segun REST, orientado a recursos.


Para verificar el codigo:

Basta con bajarse el repo, moverse a las respectivas carpetas back y front, instalar las dependencias de laravel (composer install) y angular (npm install) y navegar a localhost:4200.
