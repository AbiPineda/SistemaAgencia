<!doctype html>
<html lang="en">
  <head>
    <!--Google font API-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="input.css">
    <title>ToDoSite</title>
  </head>
  <body>
    <div class = "title">
      <div class = "text-title">
        <p><strong>To Do List Example</strong></p>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link" href="#toDoList">Form<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#emailSignUp">SignUp</a>
          </li>
        </ul>
      </div>
    </nav>
   
    <form id ="toDoList">
   
    
    </form>
    <!---Manipulate Part One add new item-->
    <div id = "newItem">
      <button type="button" class="btn btn-info">Add Item</button>
    </div>
    <!--Manipulate Part One submit new item-->
    <div id = "submitNew">
        <form class="form-inline">
              <label class="sr-only" for="inlineFormInput">Name</label>

              <input type="text" class="form-control" id="submitinlineFormInput" placeholder="Add Task">

              <label class="sr-only" for="inlineFormInputGroup">Username</label>


              <button type="submit" class="btn btn-primary" id= "submitButton">Submit</button>
        </form>
    </div>
    <div id = "SecondSection"></div>
    <div id = "Explaination"></div>
    <!--Table-->
    <div id = "sampleTable"></div>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="inputNew.js"></script>
  </body>
</html>