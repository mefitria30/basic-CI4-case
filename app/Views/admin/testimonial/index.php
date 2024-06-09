<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Testimonial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Testimonial</h3>

                <div class="card-tools">
                    <a class="btn btn-primary" href="<?= base_url();?>admin/testimonial/create">Create</a>
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Deskripsi</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0; 
                            foreach($testimonial as $key => $row)
                            {
                        ?>
                        <tr>
                            <td><?= ++$no; ?></td>
                            <td><?= $row['username']?></td>
                            <td><?= $row['deskripsi']?></td>
                            <td>
                                <img src="<?= base_url('uploads/'.$row['image'])?>" alt="image" class="rounded-circle"
                                    height="100">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->