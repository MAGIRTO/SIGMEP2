<?php
Class Db{

   private $servidor='localhost';
   private $usuario='root';
   private $password='1234';
   private $base_datos='sigmep';
   private $link;
   private $stmt;
   private $array;

   static $_instance;

   /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
  
   private function __construct(){
      $this->conectar();
   }

   /*Evitamos el clonaje del objeto. Patrón Singleton*/
   private function __clone(){ }

   /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   
   /*Realiza la conexión a la base de datos.*/
   private function conectar(){
      $this->link=mysql_connect($this->servidor, $this->usuario, $this->password);
      mysql_select_db($this->base_datos,$this->link);
      @mysql_query("SET NAMES 'utf8'");
   }

   /*Método para ejecutar una sentencia sql*/
   public function ejecutar($sql){
      $this->stmt=mysql_query($sql,$this->link);
      return $this->stmt;
   }

    

   /*Método para obtener una fila de resultados de la sentencia sql*/
   public function obtener_fila($stmt,$fila){
      if ($fila==0){
         $this->array=mysql_fetch_array($stmt);
      }else{
         mysql_data_seek($stmt,$fila);
         $this->array=mysql_fetch_array($stmt);
      }
      return $this->array;
   }

   //Devuelve el último id del insert introducido
   public function lastID(){
      return mysql_insert_id($this->link);
   }

    public  function obtener_Personas_Select()
   {
         $sql='SELECT nombres,apellidos,cedula FROM Personas'; 
         $stmt= $this->ejecutar($sql);
          while ($x= $this->obtener_fila($stmt,0)){
          echo '<option value="'.$x['cedula'].'">'.$x['nombres'].' '.$x['apellidos'].'</option>';
    }
   }

    public  function obtener_Areas_Select()
   {
         $sql='SELECT nombreAreas, idAreas FROM areas';
         $stmt=$this->ejecutar($sql);
          while ($x=$this->obtener_fila($stmt,0)){
          echo '<option value="'.$x['idAreas'].'">'.$x['nombreAreas'].'</option>';
          }
    
   }
    public  function obtener_Empresas_Select()
   {
          $sql='SELECT idEmpresa, nombreEmpresa FROM empresas';
          $stmt=$this->ejecutar($sql);
          while ($x=$this->obtener_fila($stmt,0)){
          echo '<option value="'.$x['idEmpresa'].'">'.$x['nombreEmpresa'].'</option>';
          }
    }

    public  function obtener_Justificaciones_Select()
   {      

         
          $sql = "SELECT nombres,idJustificaciones,fechaJustificacion,valorContrato, nombreAreas FROM justificaciones j , personas p ,areas a WHERE j.Personas_cedula=p.cedula and j.Areas_idAreas= a.idAreas\n"
    . "ORDER BY `j`.`fechaJustificacion` ASC";
          //$sql='SELECT idEmpresa, nombreEmpresa FROM empresas';
          $stmt=$this->ejecutar($sql);
          while ($x=$this->obtener_fila($stmt,0)){
            $mensaje= "Justificacion hecha por: ".$x['nombres']." por el valor de: ".$x['valorContrato']." El dia: ".$x['fechaJustificacion'];
          echo '<option value="'.$x['idJustificaciones'].'">'.$mensaje.'</option>';
          }
    }

     public  function obtener_Solicitudes_Select()
   {     
          $sql = "SELECT idSolicitudContratos,contratista,cedulaEncargado,nombres,nombreEmpresa FROM solicitudcontratos s , personas p ,empresas e WHERE s.contratista=e.idEmpresa and p.cedula=s.cedulaEncargado";
          //$sql='SELECT idEmpresa, nombreEmpresa FROM empresas';
          $stmt=$this->ejecutar($sql);
          while ($x=$this->obtener_fila($stmt,0)){
            $mensaje= "SOLICITUD PARA: ".$x['nombreEmpresa']." EN LA CUAL EL ENCARGADO ES: ".$x['nombres'];
          echo '<option value="'.$x['idSolicitudContratos'].'">'.$mensaje.'</option>';
          }
    }

    public function obtener_Persona($cedula){
      $sql=" SELECT * FROM personas 
        WHERE cedula=".$cedula." ";
      $this->stmt=mysql_query($sql,$this->link);
      return $this->stmt;
   }

    public  function obtener_Contratos_Select()
   {     
          $sql = "SELECT idContratos,contratista,nombres,nombreEmpresa,supervisor 
          FROM contratos c , personas p ,empresas e 
          WHERE c.contratista=e.idEmpresa and p.cedula=c.supervisor";
          //$sql='SELECT idEmpresa, nombreEmpresa FROM empresas';
          $stmt=$this->ejecutar($sql);
          while ($x=$this->obtener_fila($stmt,0)){
            $mensaje= "CONTRATISTA: ".$x['nombreEmpresa']." ---> SUPERVISOR: ".$x['nombres'];
          echo '<option value="'.$x['idContratos'].'">'.$mensaje.'</option>';
          }
    }



}
//Final del archivo, es importante aunque no obligatorio, si sólo es código php, no cerrar el tag 
?>