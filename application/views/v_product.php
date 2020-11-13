<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Barcode Dengan Zend Library CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Data Product</h2><hr>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Record</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SKU NUMBER</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT PRICE</th>
                        <th>BAR CODE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data->result() as $row):?>
                    <tr>
                        <td style="vertical-align: middle;"><?php echo $row->sku_number;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->product_name;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->product_price;?></td>
                        <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$row->bar_code;?>"></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
 
    <!-- Modal add new product-->
    <form action="<?php echo base_url().'product/simpan'?>" method="post">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
             
                  <div class="form-group">
                    <label for="sku_number" class="control-label">SKU NUMBER:</label>
                    <input type="text" name="sku_number" class="form-control" id="sku_number">
                  </div>
                  <div class="form-group">
                    <label for="product_name" class="control-label">PRODUCT NAME:</label>
                    <input type="text" name="product_name" class="form-control" id="product_name">
                  </div>
                  <div class="form-group">
                    <label for="product_price" class="control-label">PRODUCT PRICE:</label>
                    <input type="text" name="product_price" class="form-control" id="product_price">
                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
    </form>
 
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>