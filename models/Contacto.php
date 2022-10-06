<?php

namespace Model;

class Contacto extends ActiveRecord {
    protected static $tabla = 'contacto';
    protected static $columnasDB = ['id', 'nombre','email','telefono', 'servicio', 'mensaje'];

    public $id;
    public $nombre;
    public $email;
    public $telefono;
    public $servicio;
    public $mensaje;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->servicio = $args['servicio'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
    }

    // Validar el Login de Usuarios
    public function validarContacto() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El nombre es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'El telefono no puede ir vacio';
        }
        if(!$this->servicio) {
            self::$alertas['error'][] = 'El servicio no puede ir vacio';
        }
        if(!$this->mensaje) {
            self::$alertas['error'][] = 'El mensaje no puede ir vacio';
        }
        return self::$alertas;

    }
}
