          <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">DataTables.net</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                 
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Jumlah</th>

               
                  <th class="text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>

              	<?php $no=1; foreach ($produk as $dp ): ?>
              	<tr data-id="<?php echo $dp['id']; ?>">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dp['nama_produk']; ?></td>
                  <td><?php echo $dp['harga']; ?></td>
                  <td><?php echo $dp['jumlah']; ?></td>
                 
                  <td class="text-right">
                    <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                    <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                    <button class="btn btn-link btn-danger btn-just-icon hapus-produk"><i class="material-icons">close</i></button>
                    <button class='btn btn-xs btn-danger hapus-produk' data-id='<?php echo $dp['id']; ?>'><i class='glyphicon glyphicon-remove'></i> Hapus</button>
                  </td>
                </tr>
              	<?php endforeach ?>
                
               
              </tbody>
            </table>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
  </div>
  <!-- end row -->
</div>



