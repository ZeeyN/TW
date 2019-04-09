<?php include('includes/header.php'); ?>
<?php 






$sql = "SELECT * FROM requests WHERE count > 2 AND operator_id = 10 OR operator_id = 12 ORDER BY id asc";



$requests = Requests::find_by_query($sql); ?>








<div id="page-wraper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<label for="table">Press on headers to sort</label>
				<table class="table table-hover">
					<thead>
						<tr>
							<th >Id</th>
							<th >Offer</th>
							<th >Price</th>
							<th >Count</th>
							<th >Operator</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($requests as $request): ?>
							<tr>
								<td><?= $request->id ?></td>
								<td><?= Offers::find_by_id($request->offer_id) ?></td>
								<td><?= $request->price ?></td>
								<td><?= $request->count ?></td>
								<td><?= Operators::find_by_id($request->operator_id) ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>






















<?php include('includes/footer.php'); ?>