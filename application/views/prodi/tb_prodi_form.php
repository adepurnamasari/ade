<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_prodi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Prodi <?php echo form_error('Nama_prodi') ?></label>
            <input type="text" class="form-control" name="Nama_prodi" id="Nama_prodi" placeholder="Nama Prodi" value="<?php echo $Nama_prodi; ?>" />
        </div>
	    <input type="hidden" name="No" value="<?php echo $No; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('prodi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>