<?php
namespace App;

class Propiedad {
// base de datos
protected static $db;
// mapear el objeto
protected static $columnasDB = ['id','titulo','precio','imagen','descripcion','seccion','vendedores_id','creado'];


    // anterior a php 8
    public $id; 
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $seccion;
    public $vendedores_id;
    public $creado;
    // constructor
    public function __construct($args = []) {
        // Asigna los valores que vienen en el arreglo $args a cada una de las propiedades de la clase
        // Si el valor no existe en el arreglo, asigna un valor nulo
         $this->$id = $args['id'] ?? '';
         $this->$titulo = $args['titulo'] ?? '';
         $this->$precio = $args['precio'] ?? '';
         $this->$imagen = $args['imagen'] ?? 'imagen.jpg';
         $this->$descripcion = $args['descripcion'] ?? '';
         $this->$seccion = $args['seccion'] ?? '';
         $this->$vendedores_id = $args['vendedores_id'] ?? '';
         $this->$creado = date('Y/m/d');    
    }

    public function guardar () {
    // sanitizar los datos
    $atributos = $this->sanitizarDatos();
    
    $string = join(',', array_keys($atributos));
    debuguear($string);
    // insertar en la base de datos
    $query = "INSERT INTO planos (titulo, precio, imagen, descripcion, seccion, creado, vendedores_id) VALUES ('{$this->titulo}', '{$this->precio}', '{$this->imagen}', '{$this->descripcion}', '{$this->seccion}', '{$this->creado}', '{$this->vendedores_id}')";
    $resultado = self::$db->query($query);
    }

    // iterar sobre columnasDB
    // identificar y unir los atributos de la db
    public function atributos () {
        $atributos = [];
        foreach(self::$columnasDB as $columna){
            if($columna === 'id') continue; //si es true lo ignore
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarDatos () {
        $atributos = $this->atributos();
        $sanitizado = [];
    
        // recorrer el array de datos
        foreach($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

// definir la conexion a la base de datos
// static se uas para acceder a la propiedad sin crear un objeto o instancia
public static function setDB($database) {
    // Asigna la base de datos a la propiedad de la clase para que pueda ser utilizada en los metodos
    self::$db = $database;
    }

  }

// Nota: Al utilizar una propiedad estatica, la base de datos se crea solo una vez y se puede acceder a ella desde cualquier objeto de la clase Propiedad.
