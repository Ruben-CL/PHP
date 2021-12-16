<?php
include_once "Producto.php";
include_once "config.php";

/*
 * Acceso a datos con BD Empresa y Patrón Singleton 
 * Un único objeto para la clase
 */
class AccesoDatos {
    
    private static $modelo = null;
    private $dbh = null;
    private $stmt_products = null;
    private $stmt_product  = null;
    private $stmt_borproduct = null;
    private $stmt_modproduct  = null;
    private $stmt_creaproduct = null;
    
    public static function getModelo(){
        if (self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }
    
    

   // Constructor privado  Patron singleton
   
    private function __construct(){
        
        try {
            $dsn = "mysql:host=".SERVER_DB.";dbname=Empresa;charset=utf8";
            $this->dbh = new PDO($dsn, "root", "root");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }
        // Construyo las consultas
        $this->stmt_products  = $this->dbh->prepare("select * from PRODUCTOS");
        $this->stmt_product   = $this->dbh->prepare("select * from PRODUCTOS where PRODUCTO_NO =:PRODUCTO_NO");
        $this->stmt_borproduct   = $this->dbh->prepare("delete from PRODUCTOS where PRODUCTO_NO =:PRODUCTO_NO");
        $this->stmt_modproduct   = $this->dbh->prepare("update PRODUCTOS set DESCRIPCION=:DESCRIPCION, PRECIO_ACTUAL=:PRECIO_ACTUAL, STOCK_DISPONIBLE=:STOCK_DISPONIBLE where PRODUCTO_NO=:PRODUCTO_NO");
        $this->stmt_creaproduct  = $this->dbh->prepare("insert into PRODUCTOS (PRODUCTO_NO,DESCRIPCION,PRECIO_ACTUAL,STOCK_DISPONIBLE) Values(?,?,?,?)");
      
    }

    // Cierro la conexión anulando todos los objectos relacioanado con la conexión PDO (stmt)
    public static function closeModelo(){
        if (self::$modelo != null){
            $obj = self::$modelo;
            $obj->stmt_products = null;
            $obj->stmt_product  = null;
            $obj->stmt_borproduct  = null;
            $obj->stmt_modproduct  = null;
            $obj->stmt_creaproduct = null;
            $obj->dbh = null;
            self::$modelo = null; // Borro el objeto.
        }
    }


    // Devuelvo la lista de Productos
    public function getProductos ():array {
        $tproduct = [];
        $this->stmt_products->setFetchMode(PDO::FETCH_CLASS, 'Producto');
        
        if ( $this->stmt_products->execute() ){
            while ( $product = $this->stmt_products->fetch()){
               $tproduct[]= $product;
            }
        }
        return $tproduct;
    }
    
    // Devuelvo un usuario o false
    public function getProducto (String $pro) {
        $product = false;
        
        $this->stmt_product->setFetchMode(PDO::FETCH_CLASS, 'Producto');
        $this->stmt_product->bindParam(':PRODUCTO_NO', $pro);
        if ( $this->stmt_product->execute() ){
             if ( $obj = $this->stmt_product->fetch()){
                $product= $obj;
            }
        }
        return $product;
    }
    
    // UPDATE
    public function modProducto($product):bool{
      
        $this->stmt_modproduct->bindValue(':PRODUCTO_NO',$product->PRODUCTO_NO);
        $this->stmt_modproduct->bindValue(':DESCRIPCION',$product->DESCRIPCION);
        $this->stmt_modproduct->bindValue(':PRECIO_ACTUAL',$product->PRECIO_ACTUAL);
        $this->stmt_modproduct->bindValue(':STOCK_DISPONIBLE',$product->STOCK_DISPONIBLE);
        $this->stmt_modproduct->execute();
        $resu = ($this->stmt_modproduct->rowCount () == 1);
        return $resu;
    }

    //INSERT
    public function addProducto($product):bool{
        
        $this->stmt_creaproduct->execute( [$product->PRODUCTO_NO,$product->DESCRIPCION,$product->PRECIO_ACTUAL, $product->STOCK_DISPONIBLE]);
        $resu = ($this->stmt_creaproduct->rowCount () == 1);
        return $resu;
    }

    //DELETE
    public function borrarProducto(String $pro):bool {
        $this->stmt_borproduct->bindParam(':PRODUCTO_NO', $pro);
        $this->stmt_borproduct->execute();
        $resu = ($this->stmt_borproduct->rowCount () == 1);
        return $resu;
    }   
    
     // Evito que se pueda clonar el objeto. (SINGLETON)
    public function __clone()
    { 
        trigger_error('La clonación no permitida', E_USER_ERROR); 
    }
}