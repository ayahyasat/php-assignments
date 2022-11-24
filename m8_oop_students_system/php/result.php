<?php include './header.php';

?>

<?php

$info = json_decode(file_get_contents('./api/form.json'));

 
if (isset($_POST['data'])) {

/*     $id=isset($_POST['id']) ? $_POST['id'] : null;
 */    $name = isset($_POST['name']) ? $_POST['name']: null;
    $weight = isset($_POST['weight']) ? $_POST['weight'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $tel = isset($_POST['tel']) ? $_POST['tel'] : null;
    $country = isset($_POST['country']) ? $_POST['country'] : null;
    $color = isset($_POST['color']) ? $_POST['color'] : null;
    $agree = isset($_POST['agree']) ? $_POST['agree'] : null;
    $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
    $id = isset($_GET['id']) ? $_GET['id'] : null;

  
    $file = '';
if (!empty($_FILES)) {
    $file_ext = substr(
        $_FILES['file']['type'], 
        strpos($_FILES['file']['type'], '/') + 1
    ); 
    $file = "$file_ext";
    move_uploaded_file($_FILES['file']['tmp_name'], "./assets/image/$file");
}

    $info[] = (object) array(
         // 'id' => $info[array_key_last($info)]->id + 1,
       'id' => count($info) + 1,
       'name' => $name,
        'weight' => $weight,
        'gender' => $gender,
        'email' => $email,
        'country'=> $country ,
        'tel' => $tel,
        'color' => $color,
        'file' => $file,
        'agree' => $agree

    );

    $json_info = json_encode($info);

    file_put_contents('.\api\form.json', $json_info);
}

?>


<h1 class="text-center m-4">Students Information</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Birhday</th>
      <th scope="col">Weight</th>
      <th scope="col">Gender</th>
      <th scope="col">Country</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
      <th scope="col">Color</th>
      <th scope="col">File</th>
      <th scope="col">Agree</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach ($info as $value) :
 ?>
 
    <tr>
    <td> <?= count($info) +1 ?> </td>
      <td> <?=$name?></td>
      <td><?php
      echo $new_date;
      ?></td>
      <td> <?=$weight?></td>
      <td> <?=$gender?></td>
      <td> <?=$country?></td>
      <td> <?=$email?></td>
      <td> <?=$tel?></td>
      <td> <?=$color?></td>
      <td><img src='./assets/image/$value'></td>     
      <td> <?=$agree?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    <?php include './footer.php'; ?>
