
<!DOCTYPE html>
<html>
  <head>
    <title>Add information</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="assets\input.css">

  </head>
  <body>
    <div class="testbox">
      <form action="your_cv.php" method="POST" enctype="multipart/form-data">
        <div class="banner">

        <h1 class="contact-item">Add your information please !</h1>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="contact-item">
            <input type="text" name="name" placeholder="Full Name"  />
          </div>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Email</p>
            <input type="email" name="email" />
          </div>
          <div class="item">
            <p>Phone</p>
            <input type="tel" name="tel" />
          </div>
        </div>

        <div class="item" id="lab">
          <p>College Degree</p>
          <label><input type="radio" value="none" name="degree[]" /> Bachelor's degree</label>
          <label><input type="radio" value="none" name="degree[]" /> Master's degree</label>
          <label><input type="radio" value="none" name="degree[]" />Doctoral degree</label>
        </div>


        <div class="item">
          <p>University Major</p>
          <input type="text" name="major"  />
        </div>


        <div class="item">
          <p>Nationality</p>
          <select >
          <option class="disabled" value="location" disabled selected>Please Select </option>
          <option value="1">Jordanian</option>
          <option value="2">Palestinian</option>
          <option value="3">Moroccan</option>
          <option value="4">Emirati</option>
          <option value="5">Syrian</option>
          <option value="6">Egyptian</option>
        </select>        </div>


        <div class="item">
          <p>Country</p>
          <select >
          <option class="disabled" value="location" disabled selected>Please Select</option>
          <option value="1">Jordan , Salt</option>
          <option value="2">Jerusalem</option>
          <option value="4">Morocco</option>
          <option value="4">The United Arab Emirates</option>
          <option value="5">Syria</option>
          <option value="6">Egyptian</option>

        </select>        </div>


        <div class="item">
          <p>Profile</p>
          <textarea rows="4"  name="profile" ></textarea>
        </div>
        <div class="item">
          <p>Experiance</p>
          <textarea rows="4" name="experiance" ></textarea>
        </div>
        <div class="item">
          <p>Personal Skills</p>
          <textarea rows="4" name="personal_skills" ></textarea>
        </div>
        
        <div class="item" id="lab">
          <p>Languages</p>
          <label><input type="checkbox" value="Arabic" name="languages[]"/>Arabic</label>
          <label><input type="checkbox" value="English" name="languages[]"/>English</label>
          <label><input type="checkbox" value="French" name="languages[]" />French</label>
          <label><input type="checkbox" value="Turkish" name="languages[]"/>Turkish</label>
        </div>

        <div class="item">
          <p>Training Course</p>
          <textarea rows="4" name="training_course" ></textarea>
        </div>

        <div class="item">
          <p>Add Your Own Photo</p>
          <input type="file" id="myFile" name="filename" > 
          </div>

         <div class="btn-block">
         <button class="btn btn-secondary" type="submit" href="./your_cv.php?info=<?= $information?>" ><i class="fa-solid fa-wand-sparkles"></i></button>
        </div> 
      </form>
    </div>
  </body>
</html>
        