<?php

  require_once('lib/spyc/spyc.php');
  
	if(preg_match("/(\/en\/)/", $url) != 0){
		$idioma = 'lexico_en.yml';
	}
	else if(preg_match("/(\/fr\/)/", $url) != 0){
		$idioma = 'lexico_fr.yml';
	}
	else if(preg_match("/(\/it\/)/", $url) != 0){
		$idioma = 'lexico_it.yml';
	}
	else if(preg_match("/(\/de\/)/", $url) != 0){
		$idioma = 'lexico_de.yml';
	}
	else {
		$idioma = 'lexico_es.yml';
	}

  $datos = Spyc::YAMLLoad('idiomas/'.$idioma);
  $datos_alergenos = $datos['alergenos'];
  $datos_bebida = $datos['bebida'];
  $datos_ingredientes = $datos['ingrediente'];
  $datos_nombre = $datos['nombre'];
  $datos_info_mapa = $datos['mapa'];


	class Cartel {
    private function traducirNombre($nombre){
      return $GLOBALS['datos_nombre'][$nombre];
    }
    
    private function traducir_bebida($elemento){
      return $GLOBALS['datos_bebida'][$elemento];
    }
    
    private function traducirVarios($elemento, $libreria){
      $retorno = [];
      foreach($elemento as $ing){
        $valor = $GLOBALS[$libreria][$ing];
        array_push($retorno, $valor);
      }
      return $retorno;
    }

    public function comer($nombre, $imagen, $ingredientes){
      $this->nombre = $this->traducirNombre($nombre);
      $this->imagen = $imagen;
      $this->ingredientes = $this->traducirVarios($ingredientes, 'datos_ingredientes');
    }

    public function beber($nombre, $imagen, $descripcion){
      $this->nombre = $nombre;
      $this->imagen = $imagen;
      $this->descripcion = $this->traducir_bebida($descripcion);
    }
    
    // public function emplatar($nombre, $imagen, $ingredientes, $alergenos, $imag){
    //   $this->nombre = $this->traducirNombre($nombre);
    //   $this->imagen = $imagen;
    //   $this->ingredientes = $this->traducirVarios($ingredientes, 'datos_ingredientes');
    //   $this->alergenos = $this->traducirVarios($alergenos, 'datos_alergenos');
    //   $this->aler_imag = $imag;
    // }
  }

  class Info {
    public function crear($info){
      $this->info = $this->obtener($info);
    }

    private function obtener($info){
      return $GLOBALS['datos_info_mapa'][$info];
    }
  }

?>