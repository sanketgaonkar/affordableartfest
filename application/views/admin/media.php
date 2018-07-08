<?php require 'common/header.php'; ?>
<section class="content container-fluid">
    <div class="col-md-12 text-right btn-common-action"><?=$add_new?></div>
    <div class="col-md-12 table_top_div">
        <h4 class="card-title"><i class="fa fa-newspaper-o"></i><?=$page_heading?></h4>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Description</th>
                <th>Link</th>
                <th>Sort Order</th>
                <th class="text-center" style="width: 130px"><i class="fa fa-cog"></i></th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($media as $key => $value) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $value['Description'] ?></td>
                <td><?= $value['Link'] ?></td>
                <td><?= $value['sort_order'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/edit_media/' . $value['id'], '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>') ?>
                    <?= anchor('Mog_admin/delete_media/' . $value['id'], '<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>','onclick="return confirm(\'Are you sure you want to delete?\')"') ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</section>
<?php require 'common/footer.php'; ?>