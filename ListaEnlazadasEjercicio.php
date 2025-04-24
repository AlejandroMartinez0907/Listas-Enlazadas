<?php
class Nodo {
    public $tarea;
    public $siguiente;

    public function __construct($tarea) {
        $this->tarea = $tarea;
        $this->siguiente = null;
    }
}

class ListaTareas {
    public $inicio;

    public function __construct() {
        $this->inicio = null;
    }

    public function agregarTarea($tarea) {
        $nuevoNodo = new Nodo($tarea);
        if ($this->inicio === null) {
            $this->inicio = $nuevoNodo;
        } else {
            $actual = $this->inicio;
            while ($actual->siguiente !== null) {
                $actual = $actual->siguiente;
            }
            $actual->siguiente = $nuevoNodo;
        }
    }

    public function imprimirHTML(){
        $actual = $this->inicio;
        echo "<h2>Lista de Tareas</h2><ul>";

        while ($actual != null) {
            echo "<li>" . htmlspecialchars($actual->tarea) . "</li>";
            $actual = $actual->siguiente;
        }

        echo "</ul>";
    }
}

$listaTareas = new ListaTareas();

$listaTareas->agregarTarea("Comprar leche");
$listaTareas->agregarTarea("Ir al gimnasio");
$listaTareas->agregarTarea("Pasear a la mascota");

$listaTareas->imprimirHTML();
?>