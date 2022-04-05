<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Jenis Kamar</h4>
                        <br>
                        <form action="<?= base_url('index.php/kamar/proses_tambah_data_kamar') ?>" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nomor Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nomor_kamar" id="nomor_kamar"></td>
                                </tr>
                                <tr>
                                    <td>Id Jenis</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_jenis" id="id_jenis" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Keterangan Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="ket_kamar" id="ket_kamar"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Simpan">
                             
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>