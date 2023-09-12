
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <?php if($this->session->has_userdata('msg'))
        {?>
                    <script>
                        toast();
                        </script>
    <?php //echo $this->session->userdata('msg'); ?>
 <?php
  
        }
 $this->session->unset_userdata('msg');
?>   
                  <h4 class="card-title text-primary">Tambah Data</h4>
                  <p class="card-description text-secondary">
                    Tambah Data
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_client">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Organisasi</label>
                      <input type="text" required="" class="form-control" name="name" id="exampleInputName1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nomor Kontak</label>
                      <input type="text" required="" maxlength="10"  onkeypress="return isNumber(event)" onchange="check_mobnumber()" name="mobile" class="form-control" id="exampleInputEmail3" placeholder="Nomor Kontak">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Organisasi<small>(pilih perusahaan)<small></label>
                      <select class="form-control" name="gender" id="exampleSelectGender">
                          <option value="Desa">Desa</option>
                          <option value="Instansi">Instansi</option>
                          <option value="Company">perusahaan</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">Kota</label>
                      <input type="text" name="city" class="form-control" id="exampleInputCity1" placeholder="Kota">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea name="address" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                      <button type="submit" name="add" class="btn btn-gradient-primary mr-2">Tambah Data</button>
                    <button class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div> 
            
            
            
        </div>
        <!-- content-wrapper ends -->
        <script>
       function check_mobnumber()
{
    a=document.getElementById("mobile").value;
    if(a.length<10)
    {
       document.getElementById("mobile").style.borderColor="red"; 
       number.focus();
       alert("must Have 10 numbers");
    }
    else
    {
        document.getElementById("mobile").style.borderColor="";
    }
    
}
</script>
<script>
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    </script>