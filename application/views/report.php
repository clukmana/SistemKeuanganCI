
   
      <div class="main-panel">
        <div class="content-wrapper">
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Jumlah Diterima</h4>
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Tanggal
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
                            $total="0";
                  if($fetch_report_credit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_report_credit->result() as $row)  
                {  
                   $total= $row->Total;
           ?> 
                        <tr>
                            <td><?php echo $i++ ?></td>
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td>
                      <?php  $converted = date('d M Y h.i.s A', strtotime($row->date));
                                       echo $reversed = date('d-m-Y', strtotime($converted)); ?>
                          </td>
                          <td>
                            <label class="badge badge-gradient-success">Jumlah diterima</label>
                          </td>
                          <td>Rp. 
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
               
                      <td>Data tidak Ditemukan</td> 
              
           <?php  
          }  
           ?> 
                        
                      <tr><td></td></tr>         
                        
                        
                      </tbody>
                    </table>
                      <p align="right" class="text-success font-weight-bold">Total: Rp. <?php echo $total ?></p>   
                  </div>
                </div>
              </div>
            </div>
             
          </div>    
            
            
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Pengeluaran</h4>
                  <div class="table-responsive">
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Jenis Pengeluaran
                          </th>
                           <th>
                            Tanggal
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
                      $total2="0";
                  if($fetch_report_debit->num_rows() > 0)  
         {  
              $i=1;
               foreach($fetch_report_debit->result() as $row)  
                {
                   $total2=$row->Total;
           ?> 
                        <tr>
                            <td><?php echo $i++ ?></td>
                          <td>
                            <img src="<?php echo base_url() ?>assets/images/faces/806962_user_512x512.png" class="mr-2" alt="image">
                            <?php echo $row->name ?>
                          </td>
                          <td>
                            <?php echo $row->category_id ?>
                          </td>
                                  
                          <td><?php $converted = date('d M Y h.i.s A', strtotime($row->date));
                                       echo $reversed = date('d-m-Y', strtotime($converted));?></td>
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
               
                      <td>Data tidal ditemukan</td> 
              
           <?php  
          }  
           ?> 
                
                        
                        
                        
                      </tbody>
                    </table>
                      <p align="right" class="text-danger font-weight-bold">Total: Rp. <?php echo $total2
                               ?></p> 
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
  <script>
    $(function() {
      $("#example2").simplePagination({
        previousButtonClass: "btn btn-gradient-primary btn-sm",
        nextButtonClass: "btn btn-gradient-primary btn-sm"
      });


    });
  </script>
  <script type="text/javascript">
        window.print();
    </script>
        </div>
        <!-- content-wrapper ends -->
       
