<?php require 'partials/header.php' ?>

	    <div class="card m-3">
	    	<div class="card-body">
			    <h1 class="card-title">Computer Inventory</h1>
			    <a class="btn btn-primary" href="/computers/create" role="button">Add New</a>
			    <table class="table mt-2 border-bottom">
			    	<thead>
			    		<tr class="text-center">
			    			<th>UserName</th>
			    			<th>UserPass</th>
			    			<th>CompName</th>
			    			<th>AdminPass</th>
			    			<th>WillsBuster</th>
			    			<th>SkySea</th>
			    		</tr>
			    	</thead>
			    	<tbody>
				    	<?php foreach ($computers as $computer) :?>
				    		<tr class="text-center">
					    		<td><?= $computer->userName ?></td>
					    		<td><?= $computer->userPass ?></td>
					    		<td><?= $computer->computerName ?></td>
					    		<td><?= $computer->adminPass ?></td>
					    		<td><?= $computer->withWbuster ? '&#9989;' : '' ?></td>
					    		<td><?= $computer->withSkySea ? '&#9989;' : '' ?></td>
				    		</tr>
				    	<?php endforeach ?>
			    	</tbody>
			    </table>
	    	</div>
	    </div>

<?php require 'partials/footer.php' ?>
    