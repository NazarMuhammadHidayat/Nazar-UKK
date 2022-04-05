<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Jenis Kamar
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data Jenis Kamar
                <a href="<?= base_url('index.php/kamar/tambah_data_kamar') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Kamar</th>
                            <th>Nomor Kamar</th>
                            <th>Id Jenis</th>
                            <th>Keterangan Kamar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id Kamar</th>
                            <th>Nomor Kamar</th>
                            <th>Id Jenis</th>
                            <th>Keterangan Kamar</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_kamar as $tk) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tk["nomor_kamar"] ?></td>
                                <td><?php echo $tk["id_jenis"] ?></td>
                                <td><?php echo $tk["ket_kamar"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/kamar/update_data_kamar/') ?><?php echo $tk['id_kamar'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/kamar/hapus_data_kamar/') ?><?php echo $tk['id_kamar'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>