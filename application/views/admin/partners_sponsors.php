<?php require 'common/header.php'; ?>
<section class="content container-fluid partner_sponsors">
    <div class="col-md-12 text-right btn-common-action"><?= $add_new ?></div>
    <div class="col-md-12 table_top_div">
        <h4 class="card-title"><i class="fa fa-handshake-o"></i><?= $table_heading ?></h4>
    </div>
    <table class="table table-bordered">
		<thead>
			<tr><td colspan="4" class="text-center hdng">Top level</td></tr>
			<tr>
				<th>Title</th>
				<th>Name</th>
				<th>Description</th>
				<th class="text-center"><i class="fa fa-cog"></i></th>
			</tr>	
		</thead>
		<tbody>
			<tr>
				<td><?= $partners_sponsors['level1'][0]['Title'] ?></td>
				<td><?= $partners_sponsors['level1'][0]['Name'] ?></td>
				<td><?= $partners_sponsors['level1'][0]['Description'] ?></td>
				<td class="text-center">
					<?= anchor('Mog_admin/edit_partners_sponsors/'.$partners_sponsors['level1'][0]['id'],'<i class="fa fa-edit"></i>','class="btn btn-primary"')?>
				</td>
			</tr>
		</tbody>
       <thead>
			<tr><td colspan="4" class="text-center hdng">Mid level</td></tr>
			<tr>
				<th>Title</th>
				<th>Name</th>
				<th>Description</th>
				<th class="text-center"><i class="fa fa-cog"></i></th>
			</tr>	
		</thead>
		<tbody>
        <?php foreach ($partners_sponsors['level2'] as $key => $value2) { ?>
            <tr>
                <td><?= $value2['Title'] ?></td>
                <td><?= $value2['Name'] ?></td>
                <td><?= $value2['Description'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/edit_partners_sponsors/'.$value2['id'],'<i class="fa fa-edit"></i>','class="btn btn-primary"')?>
                    <?= anchor('Mog_admin/delete_partners_sponsors/'.$value2['id'],'<i class="fa fa-trash-o"></i>','class="btn btn-danger"')?>
                </td>
            </tr>
        <?php } ?>
		</tbody>
		<thead>
			<tr><td colspan="4" class="text-center hdng">Partners</td></tr>
			<tr>
				<th>Title</th>
				<th colspan="2">Tag</th>
				<th class="text-center"><i class="fa fa-cog"></i></th>
			</tr>	
		</thead>
		<tbody>
        <?php foreach ($partners_sponsors['level3'] as $key => $value3) { ?>
            <tr>
                <td><?= $value3['Title'] ?></td>
                <td colspan="2" ><?= $value3['Name'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/edit_partners_sponsors/'.$value3['id'],'<i class="fa fa-edit"></i>','class="btn btn-primary"')?>
                    <?= anchor('Mog_admin/delete_partners_sponsors/'.$value3['id'],'<i class="fa fa-trash-o"></i>','class="btn btn-danger"')?>
                </td>
            </tr>
        <?php } ?>
		</tbody>
		<thead>
			<tr><td colspan="4" class="text-center hdng">Sponsors</td></tr>
			<tr>
				<th>Title</th>
				<th colspan="2">Tag</th>
				<th class="text-center"><i class="fa fa-cog"></i></th>
			</tr>	
		</thead>
		<tbody>
        <?php foreach ($partners_sponsors['level4'] as $key => $value4) { ?>
            <tr>
                <td><?= $value4['Title'] ?></td>
                <td colspan="2"><?= $value4['Name'] ?></td>
                <td class="text-center">
                    <?= anchor('Mog_admin/edit_partners_sponsors/'.$value4['id'],'<i class="fa fa-edit"></i>','class="btn btn-primary"')?>
                    <?= anchor('Mog_admin/delete_partners_sponsors/'.$value4['id'],'<i class="fa fa-trash-o"></i>','class="btn btn-danger"')?>
                </td>
            </tr>
        <?php } ?>
		</tbody>
    </table>
</section>
<?php require 'common/footer.php'; ?>