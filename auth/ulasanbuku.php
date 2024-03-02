     <!-- Default box -->
     <div class="card">
            <div class="card-body">
                <h1>Ulasan Buku</h1>
                <hr>
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
            <tr>
                <th>No</th>
                <th>UserID</th>
                <th>BukuID</th>
                <th>Rating</th>
                <th>Ulasan</th>
                <th>Aksi</th>
             </tr>
        </thead>
        <tbody>
        <?php
                            $no = 1;
                            foreach ($fung->viewulasanbuku() as $d) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['UserID'] ?></td>
                                    <td><?= $d['BukuID'] ?></td>
                                    <td><?= $d['Rating'] ?></td>
                                    <td><?= $d['Ulasan'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $d['UlasanID'] ?>">Edit</button>

                                        <a class="btn btn-danger btn-sm" href="dashboard.php?page=hapusulasanbuku&UlasanID=<?=$d['UlasanID']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>

                                    </td>
                                </tr>
                            <?php } ?>
    </tbody>
    </table>
</div>



                <!-- /.modal -->
        <?php 
            foreach($fung->viewulasanbuku() as $k){ ?>
<div class="modal fade" id="edit<?= $k['UlasanID']?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Ulasan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <form action="dashboard.php?page=updateulasanbuku" method="post">
                            <div class="modal-body">
                        
                                <input type="text" name="UlasanID" value="<?= $k['UlasanID']; ?>" hidden>
                                <div class="form-group">
                                    <label for="">Ulasan Buku</label>
                                    <input type="text" class="form-control" name="UserID" value="<?= $k['UserID']; ?>" required="">
                                    <input type="text" class="form-control" name="BukuID" value="<?= $k['BukuID']; ?>" required="">
                                    <input type="text" class="form-control" name="Rating" value="<?= $k['Rating']; ?>" required="">
                                    <input type="text" class="form-control" name="Ulasan" value="<?= $k['Ulasan']; ?>" required="">
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                   
                                </div>
                               
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
          <?php  }
            ?>
            
            <!-- /.modal -->