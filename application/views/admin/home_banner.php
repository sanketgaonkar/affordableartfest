<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <div class="col-md-12 text-right btn-common-action"><?=$add_new?></div>
    <div class="col-md-12 table_top_div">
        <h4 class="card-title"><i class="fa fa-list"></i><?=$page_heading?></h4>
    </div>
    <div class="table-responsive col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Image</th>
                <th>Link</th>
                <th>Active</th>
                <th>Sort Order</th>
                <th class="text-center" style="width: 130px"><i class="fa fa-cog"></i></th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($interns as $key => $value) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $value['image'] ?></td>
                <td><?= $value['Link'] ?></td>
                <td><?= $value['Active'] ?></td>
                <td><?= $value['sort_order'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/edit_home_banner/' . $value['id'], '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>') ?>
                    <?= anchor('Mog_admin/delete_home_banner/' . $value['id'], '<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>','onclick="return confirm(\'Are you sure you want to delete?\')"') ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    </div>
</section>
<?php require 'common/footer.php'; ?>