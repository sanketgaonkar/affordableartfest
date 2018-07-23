<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <div class="col-md-12 table_top_div">
        <h4 class="card-title"><i class="fa fa-list"></i><?=$page_heading?></h4>
    </div>
   <div class="table-responsive col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th class="text-center" style="width: 130px"><i class="fa fa-cog"></i></th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($applications as $key => $value) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $value['firstname'] ?> <?= $value['lastname'] ?></td>
                <td><?= $value['emailid'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/view_application/' . $value['id'], '<button class="btn btn-primary"><i class="fa fa-search"></i></button>') ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</section>
<?php require 'common/footer.php'; ?>