<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <div class="table_top_div">
        <h4 class="card-title"><i class="fa fa-list"></i><?=$page_heading?></h4>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Sort Order</th>
                <th style="width: 130px">Action</th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($team as $key => $value) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $value['Name'] ?></td>
                <td><?= $value['Designation'] ?></td>
                <td><?= $value['sort_order'] ?></td>
                <td>
                    <?= anchor('Mog_admin/edit_team/' . $value['id'], '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>') ?>
                    <?= anchor('Mog_admin/delete_team/' . $value['id'], '<button class="btn btn-danger"><i class="fa fa-remove"></i></button>') ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</section>
<?php require 'common/footer.php'; ?>