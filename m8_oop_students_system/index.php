<?php include './header.php';
?>
<?php
require './student.php';

// DB Management Tool
// Students Management Tool

$student = new Student();

?>
 <div class="container my-5 py-5">

   <div class="row">
    <div class="col-6">
        <h1 class="text-center m-4">Input Students Information</h1>

   <hr class="opacity-75 m-5">
    <form action="./add_student.php" method="POST" enctype="multipart/form-data" class="my-5">
  
        <div>
            <label for="">Student Name: </label>
            <input type="text" id="full_name" name="name" >
        </div>

        <div>
            <label for="">DOB: </label>
            From:
       <input type="text" id="dob" name="dob">
       </div>

        <div>
        <label for="">Please enter your gender:</label>
            <div>
                <label for="">Male</label>
                <input class="form-check-input" type="radio" name="gender" value="male" id="radio-male">

            </div>
            <div>
                <label for="">Female</label>
                <input class="form-check-input" type="radio" name="gender" value="female" id="radio-female">
            </div>
        </div>

        <div>
            <label for="">Email: </label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="">Phone number: </label>
            <input type="tel" id="phone" name="phone">
        </div>
        <div class="btn-block">

         <button class="btn btn-secondary" name="data" type="submit">Submit</button>
        </div>
        </form>
      </div>

    <div class="col-6">

       <h1 class="text-center m-4">Students Information</h1>

       <hr class="opacity-75 m-5">


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($student->get_students() as $student_row) : ?>
                            <tr>
                                <td><?= $student_row->id ?></td>
                                <td><?= $student_row->name ?></td>
                                <td><?= $student_row->dob ?></td>
                                <td><?= $student_row->phone ?></td>
                                <td><?= $student_row->email ?></td>
                                <td><?= $student_row->gender ?></td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                </div>
        </div>

    </div>
    <?php include './footer.php'; ?>
