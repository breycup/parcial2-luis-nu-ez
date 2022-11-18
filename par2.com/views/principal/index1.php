<?php
if (session_status() == 1) session_start();
require_once("models/producto.php");
require_once("controllers/producto_controller.php");
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i0.wp.com/www.madboxpc.com/wp-content/uploads/2013/06/laptop-alienware-14-love-pdp-3.jpg?fit=925%2C460&ssl=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://img.global.news.samsung.com/es/wp-content/uploads/2021/03/Samsung-NVMe-SSD-980_L-Perspective_DL.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://th.bing.com/th/id/OIP.MD7k1y5hzgUfHPE1YYRx5gHaEK?pid=ImgDet&rs=1" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<center>
    <h1>Catalogo de profuctos</h1>
</center>

<hr>
<hr>
<div class="row w-100">
<?php

if (isset($_GET["id"])) {
    $obj = new producto($_GET["id"]);
    $resultado = $obj->Bproducto();
    $n = 5;

    foreach ($resultado as $r) {
        if(count($resultado) == $n){
            $n = 6;

        
?>
                    <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imgs/p<?php echo $resultado["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $resultado["descripcion"] ?></h3>
                        <p class="card-text">
                            Descripcion del producto
                        </p>
                        <h3><?php echo $resultado["costo_compra"] ?></h3>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
<?php
    }

    }
} else {
    $resultado = producto::Mproducto();
    foreach ($resultado as $r) {

    ?>
    
        
            <div class="col">
                <div class="card" style="width:18rem;">
                    <img src="imgs/p<?php echo $r["id_producto"]?>.jpg" alt="ImgIphone13" width="250" height="250">
                    <div class="card-body">
                    <h3><?php echo $r["descripcion"] ?></h3>
                       <p class="card-text">
                            Descripcion del producto
                        </p>
                        <h3><?php echo $r["costo_compra"] ?></h3>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
        



<?php
    }
}
?>
</div>
