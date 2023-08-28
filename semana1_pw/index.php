class Vehiculo {
    public $marca;
    public $modelo;
    public $anio;
    public $color;

    public function __construct($marca, $modelo, $anio, $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año_lanzamiento = $año_lanzamiento;
        $this->color = $color;
    }

    public function obtenerInformacion() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Año: " . $this->año_lanzamiento . ", Color: " . $this->color;
    }
}

$vehiculo1 = new Vehiculo("Toyota", "Corolla", 2022, "Rojo");
$vehiculo2 = new Vehiculo("Ford", "Mustang", 2023, "Negro");

echo $vehiculo1->obtenerInformacion() . "\n";
echo $vehiculo2->obtenerInformacion() . "\n";
