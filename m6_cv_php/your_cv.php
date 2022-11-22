<?php

$info = json_decode(file_get_contents('api\information.json'));

if (isset($_POST['data'])) {

    $name = isset($_POST['name']) ? $_POST['name']: null;
    $University_major = isset($_POST['major']) ? $_POST['major'] : null;
    $degree = isset($_POST['degree']) ? $_POST['degree'] : null;
    $Job = isset($_POST['Job_title']) ? $_POST['Job_title'] : null;
    $country = isset($_POST['country']) ? $_POST['country'] : null;
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $phone = isset($_POST['tel']) ? $_POST['tel'] : null;
    $about_me = isset($_POST['profile']) ? $_POST['profile'] : null;
    $experiance = isset($_POST['experiance']) ? $_POST['experiance'] : null;
    $course = isset($_POST['training_course']) ? $_POST['training_course'] : null;
    $skills = isset($_POST['personal_skills']) ? $_POST['personal_skills'] : null;
    $language = isset($_POST['languages']) ? $_POST['languages'] : null;
     
 $image = '';
if (!empty($_FILES)) {
    $file_ext = substr(
        $_FILES['filename']['type'], 
        strpos($_FILES['filename']['type'], '/') + 1
    ); 
    $image = "$file_ext";
    move_uploaded_file($_FILES['filename']['tmp_name'], "assets/image/$image");
}
    $info[] = (object) array(
        'name' => $name,
        'major' =>  $University_major,
        'degree' => $degree,
        'Job_title' => $Job,
        'email' => $email,
        'nationality'=> $nationality ,
        'country'=> $country ,
        'tel' => $phone,
        'profile' => $about_me,
        'experiance' => $experiance,
        'training_course' =>  $course,
        'personal_skills' => $skills,
        'languages' => $language,
        'filename' => $image
    );

    $json_info = json_encode($info);

    file_put_contents('api\information.json', $json_info);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Your CV</title>


    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <link href="./assets/style.css"  rel="stylesheet">
    <!-- Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body class="home">


    <header id="header">
        <div id="head" class="parallax"   parallax-speed="2">
            <h1 id="logo" class="text-center">
                
                <img class="img-circle" src="assets/image/<?= $image ?>" alt="">
                <span class="title"><?= $name ?></span>
                <span class="tagline"> <?= $Job ?> 
                </span>
            </h1>
                <ul style="list-style-type:none;">
                <li> Nationality : <?= $nationality ?></li>
                <li>E-mail : <a href="mailto:#"> <?= $email ?></a><br>
                <li>Phone : <a href="mailto:#"> <?= $phone ?></a><br>
              </li>
            </ul>
               </div>

  
    </header>


    <main id="main">

        <div class="container">
            <div class="row section topspace">
                <div class="col-md-12">
                    <h2 class="section-title"><span>PROFILE</span></h2>
                    <p class="texttype">
                    <?= $about_me ?> </p>

                    <h2 class="section-title"><span>Education</span></h2>
                    <?php for ($i = 0; $i < count($degree); $i++) {  ?>
                            <p  class="texttype"> <?= $degree[$i] ?> <?= $University_major?></p>
                        <?php } ?> 

                    <h2 class="section-title"><span>Experiance</span></h2>
                    <p class="texttype">
                    <?= $experiance ?></p>

                    <h2 class="section-title"><span>PERSONAL SKILLS</span></h2>
                    <p class="texttype">
                     <?= $skills ?></p>

                    <h2 class="section-title"><span>TRAINING COURSES</span></h2>
                    <p class="texttype">
                    <?= $course ?></p>

                    <h2 class="section-title"><span>LANGUAGES</span></h2>
                    <p class="texttype">
                    <?php for ($i = 0; $i < count($language); $i++) {  ?>
                            <li  class="texttype"> <?= $language[$i] ?></li>
                        <?php } ?>
                
                <br><br> 
                 </div>
             </div>
        </div>

    </main>


                <footer id="footer">
                    <div class="container">
                                <h3 class="widget-title text-center">Contact Me</h3>
                                <div class="widget-body">
                                    <p class="text-center">
                                    <a href="tel:"> <?= $phone ?></a><br>
                                    <a href="mailto:#"> <?= $email ?></a><br>
                                    </p>
                                </div>
                            </div>
          
            
        </div>

    </footer>
</body>

</html>
