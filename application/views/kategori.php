<?php  if($this->session->flashdata('alert')) : ?>
  <?php echo ' <div class="row"> <div class="col-ls-4"> <div class="social-auth-links text-center"> <div class="alert alert-info"> <b> <i>'.$this->session->flashdata('alert').'</i> </b> </div> </div> </div> </div>' ?>
<?php endif;?>
<section class="content-header">
  <h1>
    Master
    <small>Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/smas_controller/home');?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Master Data</li>
    <li class="active">Kategori Surat</li>
  </ol>
</section>
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Category Table</h3> &nbsp &nbsp
             <!-- <a href="" data-toggle="modal" data-target="#tambah_user"><span class="label label-primary" aria-hidden="true"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Data</span></a> -->

             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Kategori Surat</th>
               </tr>
               </thead>
               <tbody>
              <?php  $no = 1;
                      foreach ($kategori as $k) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k['nama_kategori'];?></td>

                </tr>
              <?php   } ?>
               </tbody>
               <tfoot>
               <tr>
                 <th>No</th>
                 <th>Kategori Surat</th>
                
               </tr>
               </tfoot>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>

   <!-- <div class="modal fade" id="tambah_user" role="dialog">
    		<div class="modal-dialog modal-md">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php echo base_urL('index.php/smas_controller/addkategori');?>" role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Masukan Kategori</label>
                  <div class="input-group">
                     <span class="input-group-addon">+</span>
                     <input type="text" name="nama_kategori" class="form-control" placeholder="Enter Kategori" required>
                   </div>
                </div>
            </div>
              <div class="box-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add Data</button>
              </div>
            </form>
          </div>
    		</div>
    	</div> -->
