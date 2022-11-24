<?php include './header.php';

?>
    <form action="./result.php" method="POST" class="my-5">
   <!--  <div>
            <label for="">Student ID: </label>
            <input type="number" name="id" >
        </div> -->
        <div>
            <label for="">Student Name: </label>
            <input type="text" name="name" >
        </div>

        <div>
            <label for="">DOB: </label>
            From:
    <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
 </div>

        <div>
            <label for="">Weight: </label>
            <input type="number" name="weight">
        </div>

        <div>
        <label for="">Please enter your gender:</label>
            <div>
                <label for="">Male</label>
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">

            </div>
            <div>
                <label for="">Female</label>
                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1">
            </div>
        </div>

        <div>
            <label for="">Email: </label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">Phone number: </label>
            <input type="tel" name="tel">
        </div>

        <div>
            <label for="">Where do you live?</label>
            <select name="country">
                <option value="Amman">Amman</option>
                <option value="Salt">Salt</option>
                <option value="Zarqa">Zarqa</option>
                <option value="Mafraq">Mafraq</option>
            </select>
        </div>

        <div>
            <label for="">Your favourit color: </label>
            <input type="color" name="color">
        </div>

        <div>
            <label for="">Please upload your CV: </label>
            <input type="file" name="file">
        </div>

        <div class="d-flex flex-row mb-3">
       <div class="p-2"><label for="">Please confirm if we can contact you through email</label>
       </div>
       <div class="p-2">
       <input class="form-check-input" type="checkbox" value="Yes" name="agree" id="flexRadioDefault1">
        </div>
        </div>
        <div class="btn-block">
         <button class="btn btn-secondary" name="data" type="submit" href="./result.php?info=<?= $information?>" >Submit</button>
        </div>
    </form>

    <hr>



    <?php include './footer.php'; ?>
