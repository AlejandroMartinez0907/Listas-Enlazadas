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
            $nodoActual = $this->inicio;
            while ($nodoActual->siguiente !== null) {
                $nodoActual = $nodoActual->siguiente;
            }
            $nodoActual->siguiente = $nuevoNodo;
        }
    }

    public function mostrarTareas() {
        $nodoActual = $this->inicio;
        echo "<h2>Lista de Tareas</h2><ul>";
        while ($nodoActual !== null) {
            echo "<li>" . htmlspecialchars($nodoActual->tarea) . "</li>";
            $nodoActual = $nodoActual->siguiente;
        }
        echo "</ul>";
    }
}

$listaTareas = new ListaTareas();

$listaTareas->agregarTarea("Comprar leche");
$listaTareas->agregarTarea("Ir al gimnasio");
$listaTareas->agregarTarea("Llamar a mamá");
$listaTareas->mostrarTareas();

?>
