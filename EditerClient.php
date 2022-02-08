<?php
require "Connection.php";
if (isset($_POST['submit'])) {
    $client = [
        'email' => $_POST['email']
    ];
    $woocommerce->post('customers/' . $_POST['id'], $client);
    header('Location: index.php');
}else{
    $id = $_GET['id'];
    $client = json_encode($woocommerce->get('customers/' . $id));
    $client = json_decode($client, true);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>modifier client</title>
</head>

<body>
    <form class="container" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" class="form-control" name="username" placeholder="nom client" 
            value="<?php echo $client['username']; ?>">
        </div>
        <div class="form-group">
            <label for="prix">email</label>
            <input type="email" class="form-control" name="email" placeholder="email" 
            value="<?php echo $client['email']; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="modifier">
    </form>
</body>
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="{{URL::to('src/css/style.css')}}">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>