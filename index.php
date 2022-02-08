<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de produits</title>
</head>

<body>
    <?php
    $clients = file_get_contents('http://localhost:81/ecom-project/Clients.php');
	$clients = json_decode($clients, true);
    $produits = file_get_contents('http://localhost:81/ecom-project/Produits.php');
    $produits = json_decode($produits, true);
    ?>
    <center>
        <h2 class="sub-header">Liste des Produits</h2>
    </center>
    <a class="btn btn-success" href="AjouterProduit.php">Ajouter un produit</a>
    <div class='table-responsive'>
        <table id='myTable' class='table table-bordered'>
            <thead class="">
                <tr>
                    <th>id produit</th>
                    <th>nom</th>
                    <th>status</th>
                    <th>prix</th>
                    <th>modifier</th>
                    <th>supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produits as $produit) {
                    echo "<tr><td>" . $produit["id"] . "</td>
                            <td>" . $produit["name"] . "</td>
                            <td>" . $produit["status"] . "</td>
                            <td>" . $produit["price"] . "</td>
                            <td><a class='btn btn-primary' href='EditerProduit.php?id=" . $produit['id'] . "'>Update</a></td>
                            <td><a class='btn btn-danger' href='SupprimerProduit.php?id=" . $produit['id'] . "'>Supprimer</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="">
    <a class="btn btn-success" href="AjouterClient.php">Ajouter un client</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>Name</th>
						<th>Email</th>
                        <th>modifier</th>
                        <th>supprimer</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                    foreach ($clients as $client) {
                        echo "<tr><td>" . $client['id'] . "</td>
                        <td>" . $client['username'] . "</td>
                        <td>" . $client['email'] . "</td><td><a class='btn btn-primary' href='EditerClient.php?id=" . $client['id'] . "'>modifier</a></td>
                        <td><a class='btn btn-danger' href='SupprimerClient.php?id=" . $client['id'] . "'>Supprimer</a></td></tr>";
                    } ?>
				</tbody>
			</table>
		</div>
	</div>
        </script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="{{URL::to('src/css/style.css')}}">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>