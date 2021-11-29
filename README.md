# dwes_2021-BertaVR
 - Las respuestas están en examen.txt
 - La carpeta con la que he hecho pruebas (por si la quieres ver) es la de pruebas
 - Para ver el 6 http://bverges.ddns.net/examen/
 - http://bverges.ddns.net/Pruebas_teoria/ para mis pruebas de teoría, pero poco se puede ver ahí 

 Ejercicio 3:
El mayor entero representable en PHP depende de los bits que tenga el sistema operativo.
Para SO de 32 bits usualmente es 2147483647. Para SO de 64 bits es 9223372036854775807. Yo personalmente 
lo he probado haciendo echo PHP_INT_MAX; y me ha dado 9223372036854775807 . Es congruente 
con la información que he encontrado ya que mi SO es de 64.


Ejercicio 4:
La propiedad añadida se añade a la instancia de la clase (el objeto), no a la clase.

Justificación:

$prueba = new A(12, "hola");
$prueba2 = new A(12, "hola");

$prueba->claseA();

$prueba->property = 'property';



##OUTPUT por consola de var_dump de cada propiedad

class A#2 (3) {
  public $id =>
  int(12)
  public $name =>
  string(4) "hola"
  public $property =>
  string(8) "property"
}
/var/www/php/cargador/index.php:15:
class A#3 (2) {
  public $id =>
  int(12)
  public $name =>
  string(4) "hola"
}

Ejercicio 5:
Se activarán las funciones del padre siempre que haya visibilidad desde la clase donde se 
intenta llamar. Si es publica se activará, si es privada no, si es protegida solo desde una clase que herede 
de la clase padre.

Ejercicio 6:
http://bverges.ddns.net/examen/
http://bverges.ddns.net/examen/archivosEnviados --> para comprobar que los archivos se envían
