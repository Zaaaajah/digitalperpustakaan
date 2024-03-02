<!-- Default box -->
<div class="card">
            <div class="card-body">
                <h1> Data Peminjaman</h1>
<hr>
<div class="mb-3">
<a href="dashboard.php?page=printlaporan" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-print"></i> Print</a>
</div>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>UserID</th>
                <th>BukuID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
                            $no = 1;
                            foreach ($fung->viewpeminjaman() as $d) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['UserID'] ?></td>
                                    <td><?= $d['BukuID'] ?></td>
                                    <td><?= $d['TanggalPeminjaman'] ?></td>
                                    <td><?= $d['TanggalPengembalian'] ?></td>
                                    <td><?= $d['StatusPeminjaman'] ?></td>
                                    <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#konfirmasi7" disabled>Acc</button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#pengembalian7" disabled>Kembali</button>
                                        
                                <a class="btn btn-danger btn-sm" href="dashboard.php?page=hapuspeminjaman&PeminjamanID=<?=$d['PeminjamanID']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
              </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>            
        <div class="modal fade" id="konfirmasi7">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Pinjaman</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="dashboard.php?page=konfirmasipinjaman" method="post">
            <div class="modal-body">
            <input type="text" name="id_peminjaman" value="7" hidden>
            <input type="text" name="id_buku" value="6" hidden>
            <input type="text" name="id_user" value="3" hidden>
              <div class="form-group">
                <label for="">Judul Buku</label>
                <input type="text" class="form-control" name="judul" value="Naruto" disabled>
              </div>
              <div class="form-group">
                <label for="">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_lengkap" value="user" disabled>
              </div>
              <div class="form-group">
                <label for="">Tanggal Peminjaman</label>
                <input type="date" class="form-control" name="tanggal_peminjaman" value="2024-02-01" disabled>
              </div>
              <div class="form-group">
                <label for="">Tanggal Pengembalian</label>
                <input type="date" class="form-control" name="tanggal_pengembalian" value="2024-02-04">
              </div>
             
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
    

                <div class="modal fade" id="pengembalian7">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pengembalian Buku</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="dashboard.php?page=konfirmasipengembalian" method="post">
            <div class="modal-body">
            <input type="text" name="id_peminjaman" value="7" hidden>
              <div class="form-group">
                <label for="">Judul Buku</label>
                <input type="text" class="form-control" name="judul" value="Naruto" disabled>
              </div>
              <div class="form-group">
                <label for="">Nama Peminjam</label>
                <input type="text" class="form-control" name="nama_lengkap" value="user" disabled>
              </div>
              <div class="form-group">
                <label for="">Tanggal Peminjaman</label>
                <input type="date" class="form-control" name="tanggal_peminjaman" value="2024-02-01" disabled>
              </div>
              <div class="form-group">
                <label for="">Tanggal Pengembalian</label>
                <input type="date" class="form-control" name="tanggal_pengembalian" value="2024-02-04" disabled>
              </div>
             <p>Klik Konfirmasi Buku jika sudah dikembalikan</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Konfirmasi Pengembalian</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->