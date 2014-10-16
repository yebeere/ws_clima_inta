<?php
/**

 */
class ApiController extends Controller
{
public function leerEma($emaUrl){
          if ($stream = fopen($emaUrl, 'r')){
            stream_set_timeout($stream, 20);
            $page = stream_get_contents($stream);
            fclose($stream);
            $lineas = explode("\n", $page);
            return $lineas; // retorno un arreglo con cada fila del archivo
           } else {
               exit("Problemas");
           }
//        try {
//            $fh = fopen($emaUrl, 'r');
//            if (!$fh) {
//                throw new Exception("Could not open the file!");
//            } else {
//                    stream_set_timeout($fh, 20);
//                    $page = stream_get_contents($fh);
//                    fclose($fh);
//                    $lineas = explode("\n", $page);
//                    return $lineas; // retorno un arreglo con cada fila del archivo                
//            }
//        }
//        catch (Exception $e) {
////            echo "Error (File: ".$e->getFile().", line ".
////                  $e->getLine()."): ".$e->getMessage();
//            exit();
//        }  
//        
        
}

public function ActionListaEmas(){
    //$estaciones=Emas::model()->findAll();
     $rawData = Yii::app()->db->createCommand('SELECT codigoEma, nombreEma FROM emas')->queryAll();
     header('Content-type: application/json; charset=utf-8');
     $json=json_encode($rawData);
     echo isset($_GET['callback'])
        ? "{$_GET['callback']}($json)"
        : $json;
     $this->layout=FALSE;
     
//      echo $json;
//     $this->layout=FALSE;
}
public function parseaLineaTabla($lineas,$nroFila){
    
      $datosEma = preg_split("/[\s]+/", ltrim($lineas[$nroFila-2]));
      return $datosEma; // retorna un arreglo con los datos de una linea
    
}
    
 public function actionDatosActuales($ema) {
        
        $respuesta = array();
        //se busca la EMA en base
        $estacion= Emas::model()->find('codigoEma=:ema', array(':ema' => $ema));
        if (is_null($estacion)) {
            $respuesta['error'] = 'NO ES UNA ESTACION METEOROLOGICA VALIDA';
        } else {
                
               // $respuesta['fecha'] = $estacion->dateEma;
               $pagina=$this->leerEma($estacion->urlEma);
               $cadena_buscada="Temp";
               $posicion_coincidencia = strrpos($pagina[0], $cadena_buscada);
               if ($posicion_coincidencia === false) {
                                                        $respuesta['error'] = 'Hay problemas con la EMA';
//                                                        print_r($pagina);
//                                                        exit();
               } else {
                        $cantidadLineas=count($pagina);
                        $datosEma= $this->parseaLineaTabla($pagina,$cantidadLineas);
                        $respuesta['estacion'] = $estacion->nombreEma;
                        $respuesta['fecha'] =$datosEma[$estacion->dateEma-1];
                        $hora=$datosEma[$estacion->timeEma-1]; 
                        $ultimoCaracter=  substr($hora, (strlen($hora)-1),1);
                        if ($ultimoCaracter=== "a" or $ultimoCaracter=== "p"){
                            $hora=$hora."m";
                            
                            $hora = strtotime($hora);
                            $respuesta['hora'] = date("H:i", $hora);
                          } else {
                                $respuesta['hora'] = $datosEma[$estacion->timeEma-1];
                          }
                        $respuesta['humedad'] = $datosEma[$estacion->humedadEma-1];
                        $respuesta['temperatura'] =$datosEma[$estacion->temperaturaEma-1]; 
                        $respuesta['viento'] = $datosEma[$estacion->vientoEma-1];
                        $respuesta['dirViento'] = $datosEma[$estacion->dirVientoEma-1]; 
                        $respuesta['rafagas'] = $datosEma[$estacion->vientoRafagasEma-1]; 
                        $respuesta['presion'] = $datosEma[$estacion->presionEma-1]; 
                        $respuesta['lluvia'] = $datosEma[$estacion->lluviaEma-1]; 
               }
              // $respuesta['datos'] =$pagina; 
            }

        header('Content-type: application/json; charset=utf-8');
        $json=json_encode($respuesta);
        //header('Content-Length: '. sizeof($json));
        echo isset($_GET['callback'])
            ? "{$_GET['callback']}($json)"
            : $json;
        $this->layout=FALSE;
        //exit;
    }

}

/* vim:set ai sw=4 sts=4 et fdm=marker fdc=4: */
?>
