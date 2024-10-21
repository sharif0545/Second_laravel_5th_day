<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hero Section Input form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container w-25 m-auto">
  <h2 class="text-center">Hero Section Input Form</h2>

  @if ($errors->any())
    @foreach ($errors->all() as $single_error)
    <h6 style="color:red"> {{ $single_error }}</h6>
    @endforeach
    @endif

  <form action="{{ route('admin.heroformsave') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="person_name">Full name :</label>
   
      <input type="text" class="form-control" id="person_name" placeholder="Enter your full name" name="person_name"></br>
    </div>

    <div class="form-group">
      <label for="email">Hello :</label>
   
      <input type="text" class="form-control" id="hello" placeholder="Enter your greetings" name="hello"></br>
    </div>

    <div class="form-group">
      <label for="email">Designation :</label>
      
      <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation"></br>
    </div>


    <div class="form-group">
      <label for="btn_url">My CV Download Link :</label>
     
      <input type="text" class="form-control" id="btn_url" placeholder="Enter btn_url" name="btn_url"></br>
    </div>


    <div class="form-group ">
      <label for="btn_text">btn_text :</label>
    
      <input type="text" class="form-control" id="btn_text" placeholder="Enter btn_text" name="btn_text"></br>
    </div>

    <button type="submit" class="btn btn-secondary btn-default w-100">Submit</button>
  </form>

</div>

</body>
</html>
