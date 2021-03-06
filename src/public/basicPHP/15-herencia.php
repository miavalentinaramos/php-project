<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/dirs.php';
function mi_autocargador($clase)
{
    include APP_PATH.'clases/' . $clase . '.php';
}
spl_autoload_register('mi_autocargador');

$titulo = "herencia.php";
include_once TEMPLATES_PATH."header.php";
?>
<p>en este caso crearemos una clase llamada padre con un funcion publica la cual hace un echo</p>
<p>
    <code>
        <pre class="codigo">

&lt;?php
        class Padre
        {
            function __construct()
            {
            
            }
        public function funcion1(){
            echo "Funcion 1 en la clase Padre";
            }
        }   
?&gt;
        </pre>
    </code>
</p>
<p>  a su vez tambien crearemos una clase llamada Hija la cual podemos ver su constructor esta vacio y tampoco posee una funcion, pero "extiende" a clase padre por lo tanto posee la funcion display </p> 
<p>
    <code>
        <pre class=codigo>

&lt;?php
        class Hija <b>extends</b> Padre
        {
            function __construct()
            {
        
            }
        }

?&gt;
        </pre>
    </code>
</p>

<p>al instanciar hija, podemos notar que si llamamos a la funcion1 desde el $obj se mostrara por pantala el mensaje: '"Funcion 1 en la clase Padre"'</p>
<p>
    <code>
        <pre class="codigo">
        
&lt;?php
        $obj = new Hija();
        $obj->funcion1();
?&gt;
        </pre>
    </code>
</p>
<p>resultado:</p>
<?php
$obj = new Hija();
$obj->funcion1();
?>

<?php
include_once(TEMPLATES_PATH.'boton_back.php');
include_once TEMPLATES_PATH."footer.php";
?>