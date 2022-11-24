<?php include './header.php';
?>
<?php
require './index.php';

?>
<div class="col-6">

<h1 class="text-center m-4">Students Information</h1>

<hr class="opacity-75 m-5">


         <table class="table table-hover ">
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