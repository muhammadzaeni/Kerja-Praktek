
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> <strong> INPUT DATA PENELITIAN DOSEN </strong> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="#" method="POST">
                <div class=" form-group row " >
                <label for="nama" class="col-md-3 col-form-label "> Nama Perguruan Tinggi </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" name="nama_univer" placeholder="Nama Univeristas" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Jenis Perguruan Tinggi </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="Jenis_perguruan" onchange="tampilkan()">
                                <option value=""  class="form-control">-- Jenis perguruan Tinggi --</option> 
                                <option value="UNIVERSITAS"> Univeristas </option>
                                <option value="INSTITUT"> Institut </option>
                                <option value="POLITEKNIK"> Politeknik </option>
                                <option value="AKADEMI"> Akademi </option>
                                <option value="PTN"> PTN </option>
                                <option value="PTS"> PTS </option>
                                <option value="PTK"> PTK </option>
                                
                            </select>
                         </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Nama Rektor </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" name="nama_rektor" placeholder="Nama Rektor" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Nama Fakultas </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="nama_fakultas"  onchange="tampilkan()">
                                <option value=""  class="form-control">-- Nama Fakultas --</option>
                                <option value="FAKULTAS TEKNIK"> Fakultas Teknik </option>
                            </select>
                         </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Nama Dekan</label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-3 col-form-label"> Nama Prodi </label>
                        <div class="col-md-8">
                            <select class="form-control" required name="nama_prodi" onchange="tampilkan()">
                                <option value=""  class="form-control">-- Nama Prodi --</option>
                                <option value="TEKNIK INFORMATIKA"> Teknik Informatika </option>
                                <option value="TEKNIK SIPIL"> Teknik Sipil </option>
                                <option value="TEKNIK INDUSTRI"> Teknik Industri </option>
                            </select>
                         </div>
                 </div>
                 <div class=" form-group row " >
                    <label for="nama" class="col-md-3 col-form-label "> Nama ketua Prodi </label>
                    <div class="col-md-8" >
                    <input type="text" class="form-control" name="nama_ketua_prodi" placeholder="Nama Ketua Prodi" >
                    </div>
                </div>
            </form>
        </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
        <button type="button" class="btn btn-primary"> Save changes </button>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------- END MODAL --------------------------------------------------------->
<!---------------------------------------- PAGE CONTENT ------------------------------------------------------>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"> Input Data Pengabdian</h4> 
            </div>
                
        </div>
   

            <div class="align-content-around">
                <button  class="btn btn-primary fa fa-plus fa-2x" data-toggle="modal" data-target="#exampleModalLong">
                Tambah   
                </button>
                
         </div>
     </div>
      <table class="table table-striped table-bordered dt-responsive nowrap" >
                <tr>
                        <th> Nama Perguruan </th>
                        <th> Jenis Perguruan Tinggi </th>
                        <th> Nama Rektor </th>
                        <th >Nama Dekan </th>
                        <th> Nama Fakultas </th>
                        <th> Nama Prodi </th>
                        <th> Nama Ketua prodi </th>
                        <th> Action </th>
                </tr>
                <tr>           
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                         <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" >
                         Ubah
                        </button>             
                    </td>
                </tr> 
        </table>
    </div>
</div>
