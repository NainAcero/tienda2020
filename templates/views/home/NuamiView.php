<?php require_once INCLUDES.'inc_header.php'; ?>


<section class="masthead ">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center" style="background: #fff">

                <h3 class="text-center mt-3 ">LISTA DE USUARIOS</h3>
                <br>

                
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data as $producto):  ?>
                        <tr>
                            <th><?php echo $producto->nombre ?></th>
                            <th><?php echo $producto->precio ?></th>
                        </tr>
                      <?php endforeach  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require_once INCLUDES.'inc_footer.php'; ?>
