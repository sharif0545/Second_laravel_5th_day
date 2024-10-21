<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('admin.aboutformsave') }}" method="POST">
    @csrf
  <label for="fname">My title:</label><br>
  <input type="text" id="who" name="who" value="who"><br>

  <label for="lname">My designation:</label><br>
  <input type="text" id="designation" name="designation" value="designation"><br><br>

  <label for="lname">My description:</label><br>
  <input type="text" id="my_des" name="my_des" value="my_des"><br><br>

  
  <label for="lname">My CV btn link:</label><br>
  <input type="text" id="cv_btn_link" name="cv_btn_link" value="cv_btn_link"><br><br>

  <label for="lname">Download My CV :</label><br>
  <input type="text" id="cv_btn_txt" name="cv_btn_txt" value="cv_btn_txt"><br><br>

  



  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
