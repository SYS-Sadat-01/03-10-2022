<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery.js"></script>
    <link rel="stylesheet" href="./bootstarp.min.css">
    <script src="./bootstrap.min.js"></script>
    <title>Doc</title>
</head>
<body>
<center>
    <h1>PHP Tutorial</h1>
</center>
<hr><br>
<div class="container">
<div class="card text-start">
  <!-- <img class="card-img-top" src="holder.js/100px180" alt="Title"> -->
  <div class="card-body">
    <h4 class="card-title">Database</h4>
    <p class="card-text">Enter Here</p>

    <div class="table-responsive-md">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">FName</th>
                    <th scope="col">Dep</th>
                    <th scope="col">Action</th>



                </tr>
            </thead>
            <tbody>
                <tr class="">
                    
                    <td>1</td>
                    <td>Yousuf</td>
                    <td>Ismail</td>
                    <td>Eng</td>
                    
                    <td>
                        <button class="btn btn-info">Info</button>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
          Create New Student
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Registeration Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                    <div class="modal-body">
                    <div class="container-fluid">
                        <form id="saveStudent">
                            <label for="name">Student Name</label>
                            <input type="text"name="name" class="form-control" placeholder="Student Name">

                            <label for="name">Student Father Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Student Father Name">

                            <label for="name">Student Dep</label>
                            <input type="text" name="dep" class="form-control" placeholder="Student Dep">


                     
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        <script>
            var modalId = document.getElementById('modalId');
        
            modalId.addEventListener('show.bs.modal', function (event) {
                  // Button that triggered the modal
                  let button = event.relatedTarget;
                  // Extract info from data-bs-* attributes
                  let recipient = button.getAttribute('data-bs-whatever');
        
                // Use above variables to manipulate the DOM
            });
        </script>
        
    </div>
    

  </div>
</div>
</div>

</body>
<script src="./js.js"></script>
</html>