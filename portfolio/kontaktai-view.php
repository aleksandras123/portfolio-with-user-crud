<?php include('functions/showUsers.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>KONTAKTAI</title>
    </head>
    <body>
        <h1 style="text-align:center;">MANO KONTAKTAI</h1>
            <div class="container">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Messsage</th>
                      <th scope="col">Delete</th>
                      <th scope="col">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($results as $result): ?>
                    <tr>
                      <th scope="row"><?php echo $result['id'] ?></th>
                      <td><?php echo $result['name'] ?></td>
                      <td><?php echo $result['mail'] ?></td>
                      <td><?php echo $result['subject'] ?></td>
                      <td><?php echo $result['message'] ?></td>
                      <td> <a class="btn btn-danger" href="delete.php?id=<?=$result['id'];?>">Delete</a> </td>
                      <td><a href="edit-view.php?id=<?=$result['id'];?>" class="btn btn-success">Edit</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <a href="contact-index.php" class="btn btn-primary">Created new</a>
            </div>
    </body>
</html>
