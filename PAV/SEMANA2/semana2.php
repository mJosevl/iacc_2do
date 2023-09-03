abstract class Vehiculo2 {
    abstract public function imprimirModelo();
    abstract public function imprimirAnio();
}
interface MensajeInterface {
    public function imprimirMensaje1();
    public function imprimirMensaje2();
}

class ImplementacionMensaje implements MensajeInterface {
    public function imprimirMensaje1() {
        echo "Mensaje 1: Esto es el mensaje número 1." . PHP_EOL;
    }

    public function imprimirMensaje2() {
        echo "Mensaje 2: Esto es el mensaje número 2." . PHP_EOL;
    }
}

// Ejecutar la implementación
$implementacion = new ImplementacionMensaje();
$implementacion->imprimirMensaje1();
$implementacion->imprimirMensaje2();
$vehiculo = new class {
    private $nombre = "Toyota Corolla";

    public function imprimirNombre() {
        echo "Nombre del vehículo: " . $this->nombre . PHP_EOL;
    }
};

// Ejecutar la clase anónima
$vehiculo->imprimirNombre();
