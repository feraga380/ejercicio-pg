
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Agregar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>mantenimiento/categorias/store" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="input" class="form-control" id="nombre" name="nombre" />
                            </div>    
                            <div class="form-group">                                
                                <label for="descripcion">Descripción:</label>
                                <input type="input" class="form-control" id="descripcion" name="descripcion" />
                            </div>
                            <div class="form-group">    
                                <button type="sumit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>    
                    </div>
                </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
