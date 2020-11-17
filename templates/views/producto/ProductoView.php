<?php require_once INCLUDES.'inc_header.php'; ?>

<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background: #fff">

                <h3 class="text-center mt-3">REGISTRO DE PRODUCTOS</h3>

                <form class="mt-4 bee_add_producto">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Precio: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="precio" id="precio">
                        </div>
                    </div>

                    <div class="text-left ml-5 mt-3 mb-3 text-center" style="margin:auto">
                    <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>
