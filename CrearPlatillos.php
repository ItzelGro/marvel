<?php
class Restaurante 
{
    //Propiedades
    public $productos;// Arreglos para guardar alaos productos
    //public $p;

    //Constructor
    public function _construct()
    {
        //Inicializar el arreglo
        $this->productos=array();
        // Inicializar el apuntador
        ///$this->p=0;
    
    }
    
    //Metodo para insertar un producto en el carrito
    public function insertarProducto($producto)//$i,$img,$nom,$precio
    {
        $this->productos[]=$producto;
    /*$this->productos[$this->p ][0]=$producto[0];
    $this->productos[$this->p][1]=$producto[1];
    $this->productos[$this->p][2]=$producto[2];
    $this->productos[$this->p][3]=$producto[3];
    $this->p++;*/
    }
    //Metodo para cargar productos al arreglo
    public function cargarProductos(){
        $this->productos[0][0] = 1;
        $this->productos[0][1] = 'img/comida/baguette 1.jpg';
        $this->productos[0][2] = 'Baguette Pollo';
        $this->productos[0][3] = 125;
        
        $this->productos[1][0] = 2;
        $this->productos[1][1] = 'img/comida/baguetteArrachera.jpg';
        $this->productos[1][2] = 'Baguette Arranchera';
        $this->productos[1][3] = 130;

        $this->productos[2][0] = 3;
        $this->productos[2][1] = 'img/comida/baguette2.jpg';
        $this->productos[2][2] = 'Baguette Italiano';
        $this->productos[2][3] = 135;

        $this->productos[3][0] = 4;
        $this->productos[3][1] = 'img/comida/wrappollo.jpg';
        $this->productos[3][2] = 'Wrap Pollo';
        $this->productos[3][3] = 125;

        $this->productos[4][0] = 5;
        $this->productos[4][1] = 'img/comida/wrapres.jpg';
        $this->productos[4][2] = 'Wrap Res';
        $this->productos[4][3] = 124

        $this->productos[5][0] = 6;
        $this->productos[5][1] = 'img/comida/wrapvegetariano.jpg';
        $this->productos[5][2] = 'Wrap Vegetariano';
        $this->productos[5][3] = 115;

        $this->productos[6][0] = 7;
        $this->productos[6][1] = 'img/comida/ensalada6.jpg';
        $this->productos[6][2] = 'Cesar';
        $this->productos[6][3] = 60;

        $this->productos[7][0] = 8;
        $this->productos[7][1] = 'img/comida/ensalada1.jpg';
        $this->productos[7][2] = 'Homeslice';
        $this->productos[7][3] = 70;

        $this->productos[8][0] = 9;
        $this->productos[8][1] = 'img/comida/ensaladapasta.jpg';
        $this->productos[8][2] = 'Mediterranean';
        $this->productos[8][3] = 65;

        $this->productos[9][0] = 10;
        $this->productos[9][1] = 'img/comida/pizza1.jpg';
        $this->productos[9][2] = 'Deep Dish Pepperoni Lovers';
        $this->productos[9][3] = 270;

        $this->productos[10][0] = 11;
        $this->productos[10][1] = 'img/comida/pizza2.jpg';
        $this->productos[10][2] = 'Deep Dish Veggie Lovers';
        $this->productos[10][3] = 289;

        $this->productos[11][0] = 12;
        $this->productos[11][1] = 'img/comida/pizza3.jpg';
        $this->productos[11][2] = 'Pizza Napolitana';
        $this->productos[11][3] = 200;

        $this->productos[11][0] = 13;
        $this->productos[11][1] = 'mg/comida/pizza4.jpg';
        $this->productos[11][2] = 'Deep Dish Xtreme Supreme';
        $this->productos[11][3] = 280;

        $this->productos[11][0] = 14;
        $this->productos[11][1] = 'img/comida/pizza6.jpg';
        $this->productos[11][2] = 'Deep Dish Cheesy AF';
        $this->productos[11][3] = 285;

        $this->productos[11][0] = 15;
        $this->productos[11][1] = 'img/comida/pizza7.jpg';
        $this->productos[11][2] = 'Deep Dish Xtreme Supreme';
        $this->productos[11][3] = 285;

        $this->productos[11][0] = 16;
        $this->productos[11][1] = 'img/comida/crepas de nutella.jpg';
        $this->productos[11][2] = 'Crepa Nutella';
        $this->productos[11][3] = 30;

        $this->productos[11][0] = 17;
        $this->productos[11][1] = 'img/comida/crepes-01.jpg';
        $this->productos[11][2] = 'Crepa Mantequilla de Maní';
        $this->productos[11][3] = 30;

        $this->productos[11][0] = 18;
        $this->productos[11][1] = 'img/comida/crepas de zarzamora.jpg';
        $this->productos[11][2] = 'Crepa zarzamora';
        $this->productos[11][3] = 45;

        $this->productos[11][0] = 19;
        $this->productos[11][1] = 'img/comida/frutos.jpg';
        $this->productos[11][2] = 'Crepa Frutas frescas';
        $this->productos[11][3] = 45;

        $this->productos[11][0] = 20;
        $this->productos[11][1] = 'img/comida/crepas de queso philadelphia.png';
        $this->productos[11][2] = 'Crepas Queso Philadelphia';
        $this->productos[11][3] = 38;

        $this->productos[11][0] = 21;
        $this->productos[11][1] = 'img/comida/crepas rellenas de chocolate con frambuesa.jpg';
        $this->productos[11][2] = 'Chocolate';
        $this->productos[11][3] = 40;

        $this->productos[11][0] = 22;
        $this->productos[11][1] = 'img/comida/frappe 2.jpg';
        $this->productos[11][2] = 'Frappuccino Clásico';
        $this->productos[11][3] = 35;

        $this->productos[11][0] = 23;
        $this->productos[11][1] = 'iimg/comida/cajeta.jpg';
        $this->productos[11][2] = 'Frappuccino Cajeta';
        $this->productos[11][3] = 36;

        $this->productos[11][0] = 24;
        $this->productos[11][1] = 'img/comida/piñac.jpg';
        $this->productos[11][2] = 'Piña Colada';
        $this->productos[11][3] = 50;

        $this->productos[11][0] = 25;
        $this->productos[11][1] = 'img/comida/fria1.jpg';
        $this->productos[11][2] = 'Smoothie de Fresa o Durazno';
        $this->productos[11][3] = 37;

        $this->productos[11][0] = 26;
        $this->productos[11][1] = 'img/comida/limana.jpg';
        $this->productos[11][2] = 'Limonada Mineral o Natural';
        $this->productos[11][3] = 22;

        $this->productos[11][0] = 27;
        $this->productos[11][1] = 'img/comida/naranja.jpg';
        $this->productos[11][2] = 'Naranjada Mineral ';
        $this->productos[11][3] = 18;

        $this->productos[11][0] = 28;
        $this->productos[11][1] = 'img/comida/c1.jpg';
        $this->productos[11][2] = 'Cappuccino Vainilla ';
        $this->productos[11][3] = 32;

        $this->productos[11][0] = 29;
        $this->productos[11][1] = 'img/comida/c2.jpg';
        $this->productos[11][2] = 'Cappuccino Caramelo';
        $this->productos[11][3] = 32;

        $this->productos[11][0] = 30;
        $this->productos[11][1] = 'img/comida/te1.jpg';
        $this->productos[11][2] = 'Te Chai Espumoso Manzana Verde ';
        $this->productos[11][3] = 32;

        $this->productos[11][0] = 31;
        $this->productos[11][1] = 'img/comida/fr2.jpg';
        $this->productos[11][2] = 'Té Frutales ';
        $this->productos[11][3] = 20;

        $this->productos[11][0] = 32;
        $this->productos[11][1] = 'img/comida/te3.jpg';
        $this->productos[11][2] = 'Tizana Moras';
        $this->productos[11][3] = 35;

        $this->productos[11][0] = 33;
        $this->productos[11][1] = 'img/caliente5.jpg';
        $this->productos[11][2] = 'Tizana Avellan';
        $this->productos[11][3] = 35;
    }
    //Metodo para mostrar los elemntos del arreglo
    function mostrarProductos()
    {
        //Obtener el tamaño del arreglo
        $tam=sizeof($this->productos);
        $numProductos =0;
        //Recorrer el arreglo
        echo "<div id='lista de producto 'class='container'>";
        echo "<h1 id='en cabezado' class='encabezado'>Tecnolofia a tu alcance>/h1>";
        for($i = 0 ; $i <4; $i++)
        {
            echo "< div class='row'>";
            for($j = 0 ; $j <3; $j++)
            {
                echo"<div class='four columns'>";
                echo "<div class= 'card'>";
                echo " img src='".$this->productos[$numProdutos][1] ."'class='imagen-producto u-full-witch'>";
                echo "div class='info-card'>";
                echo "<h4> ".$this->productos[$numProdutos][2] ."</h4>";
                echo "<p> Aqui la descripcion....</p>";
                echo "<img src='img/estrellas.png'>";
                echo "<p class ='precio'><span class='u.pull-right'>$".$this->productos[$numProdutos][3] ."</span></p>";
                echo "          <a href='#' class='u-full-width button-primary button input agregar-carrito' data-id='". $this->productos[$numProductos][4] ."'>Agregar Al Carrito</a>";
                echo "      </div>";
                echo "  </div>"; 
                echo "</div>";
                $numProductos++;
            }
            echo "</div>";
            //echo $this->productos[$i][2]."".$this->productos[$i][3]."<br>";
        }
    }
}

?>