<?php require 'common/header.php';?>
<section class="content container-fluid partner_sponsors">
    <div class="col-md-12 table_top_div">
        <h4 class="card-title"><i class="fa fa-handshake-o"></i><?= $table_heading ?></h4>
    </div>
    <div class="table-responsive col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr><td colspan="3" class="text-center hdng">Application Guidelines</td></tr>
                <tr>
                    <th colspan="2">Description</th>
                    <th class="text-center" width="100px"><i class="fa fa-cog"></i></th>
                </tr>	
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><?= $application_guidelines['ag']['description'] ?></td>
                    <td class="text-center">
                        <?= anchor('Mog_admin/edit_application_guidelines/' . $application_guidelines['ag']['id'], '<i class="fa fa-edit"></i>', 'class="btn btn-primary"') ?>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr><td colspan="3" class="text-center hdng">GUIDELINES TO APPLY <span class="pull-right"><?=anchor('Mog_admin/edit_guidelines_to_apply','<i class="fa fa-plus"></i>','class="btn btn-primary"')?></span></td></tr>
                <tr>
                    <th>Description</th>
                    <th>Sort Order</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                </tr>	
            </thead>
            <tbody>
                <?php foreach ($application_guidelines['gta'] as $key => $value2) { ?>
                    <tr>
                        <td><?= $value2['description'] ?></td>
                        <td><?= $value2['sort_order'] ?></td>
                        <td class="text-center">
                            <?= anchor('Mog_admin/edit_guidelines_to_apply/' . $value2['id'], '<i class="fa fa-edit"></i>', 'class="btn btn-primary"') ?>
                            <?= anchor('Mog_admin/delete_guidelines_to_apply/' . $value2['id'], '<i class="fa fa-trash-o"></i>', 'class="btn btn-danger"') ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <thead>
                <tr><td colspan="3" class="text-center hdng">TERMS AND CONDITIONS<span class="pull-right"><?= anchor('Mog_admin/edit_terms_and_conditions/', '<i class="fa fa-plus"></i>', 'class="btn btn-primary"') ?></span></td></tr>
                <tr>
                    <th>Description</th>
                    <th>Sort Order</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                </tr>	
            </thead>
            <tbody>
                <?php foreach ($application_guidelines['tac'] as $key => $value3) { ?>
                    <tr>
                        <td><?= $value3['description'] ?></td>
                        <td><?= $value3['sort_order'] ?></td>
                        <td class="text-center">
                            <?= anchor('Mog_admin/edit_terms_and_conditions/' . $value3['id'], '<i class="fa fa-edit"></i>', 'class="btn btn-primary"') ?>
                            <?= anchor('Mog_admin/delet_terms_and_conditions/' . $value3['id'], '<i class="fa fa-trash-o"></i>', 'class="btn btn-danger"') ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'common/footer.php'; ?>