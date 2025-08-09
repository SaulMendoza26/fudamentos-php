<?php
class tiempoMilitar
{

    public function __construct(
        public int $hora,
        public int $minutos,
        public int $segundos,
        public string $tiempo
    ) {
    }
    public function convertidoTiempoMilitar()
    {
       // $tiempoTotal = "";
        if ($this->tiempo === "PM") {

            return $tiempoTotal = "" . ($this->hora + 12) . ":" . $this->minutos . ":" . $this->segundos . " " . $this->tiempo;
        } else if ($this->tiempo === "AM" && $this->hora === 12) {
            return $tiempoTotal = " 00" .":" . $this->minutos . ":" . $this->segundos . " " . $this->tiempo;
        } else {
            return $tiempoTotal = $this->hora . ":" . $this->minutos . ":" . $this->segundos . " " . $this->tiempo;
        }
    }
}
$prueba = new tiempoMilitar(12, 34, 45, "PM");
echo $prueba->convertidoTiempoMilitar()
    ?>