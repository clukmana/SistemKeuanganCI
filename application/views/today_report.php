
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Detail Laporan</h4>
                    <form class="form-inline" method="post" action="<?php echo base_url() ?>Home/report">
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                    <div class="input-group-text">From</div>
                      </div>
                        <input type="date" class="form-control" name="from"id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                  
                    <label class="sr-only" for="inlineFormInputGroupUsername2">To</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                    <div class="input-group-text">To</div>
                      </div>
                        <input type="date" name="to" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>
                    
                  
                    <button type="submit" name="view" class="btn btn-sm btn-outline-primary btn-icon-text">Lihat Laporan</button>
                
                  </form>
                    <br>
                  <h5 class="text-secondary">Laporan Hari Ini</h5>
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                        <tr>
<!--                            <th>
                            #
                          </th>-->
                          <th>
                            Nama
                          </th>
                          <th>
                            Jenis Transaksi
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Jumlah
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          <?php              
                  if($fetch_debit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_debit->result() as $row)  
                {  
           ?> 
                        <tr>
<!--                            <td><?php echo $i++ ?></td>-->
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                           <?php echo $row->name ?>
                          </td>
                          <td> <?php echo $row->category_id ?></td>
                          <td>
                        
                              <label class="badge badge-gradient-danger">Pengeluaran</label>
                          </td>
                          <td>
                             <?php echo $row->amount ?>
                          </td>
                           <td>
                             
                          </td>
                        </tr>
                        <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td>Pengeluaran tidak ditemukan</td> 
              
           <?php  
          }  
           ?> 
                      
                      <?php              
                  if($fetch_credit->num_rows() > 0)  
         {  
             
               foreach($fetch_credit->result() as $row)  
                {  
           ?> 
                        <tr>
<!--                            <td><?php echo $i++ ?></td>-->
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td>NILL</td>
                          <td>
                            <label class="badge badge-gradient-success">Jumlah Diterima</label>
                          </td>
                          <td>
                          <?php echo $row->amount ?>
                          </td>
                          
                        </tr>
                         <?php       
             }  
          }  
          else  
           {  
           ?>  
               
                      <td>tidak ada yang diterima</td> 
              
           <?php  
          }  
           ?> 
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>    
            
            
            <script>
		$(function() {
			$("#example").simplePagination({
				previousButtonClass: "btn btn-gradient-primary btn-sm",
				nextButtonClass: "btn btn-gradient-primary btn-sm"
			});


		});
	</script>
            
        </div>
        <!-- content-wrapper ends -->
