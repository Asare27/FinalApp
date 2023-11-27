<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  </head>
  <body>

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 150vh; overflow-y: auto;">
      <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Index Number</label>
                <input type="text" class="form-control" name="indexnumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Other Name</label>
                <input type="text" class="form-control" name="othername" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Date of Admission</label>
                <input type="date" class="form-control" name="dateofadmission" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Name of Former School</label>
                <input type="text" class="form-control" name="nameofformerschool" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="dateofbirth" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Gender</label>
                <div class="d-flex align-items-center mt-2">
                    <select class="form-control" name="gender">
                        opt
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Religious Denomination</label>
                <input type="text" class="form-control" name="religiousdenomination" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phonenumber" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Home Town</label>
                <input type="text" class="form-control" name="hometown" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Place of Birth</label>
                <input type="text" class="form-control" name="placeofbirth" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>District</label>
                <input type="text" class="form-control" name="district" required>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Region</label>
                <input type="text" class="form-control" name="region" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="adduser()" >Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Update Model -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group"> 
          <label for="updatename">Name</label>
          <input type="text" class="form-control" id="updatename"  placeholder="Enter your name">
        </div>
        <div class="form-group"> 
          <label for="updateemail">Email</label>
          <input type="email" class="form-control" id="updateemail"  placeholder="Enter your email">
        </div>
        <div class="form-group"> 
          <label for="updatemobile">Mobile</label>
          <input type="text" class="form-control" id="updatemobile"  placeholder="Enter your mobile number">
        </div>
        <div class="form-group"> 
          <label for="updateplace">Place</label>
          <input type="text" class="form-control" id="updateplace"  placeholder="Enter your place">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="updateDetails()">Update</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>
    <div class="container my-3">
         <h1 class="text-center">Ayisec Student Registration Portal</h1>
            <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#completeModal">
              Add New Student
            </button>
            <div id="displayDataTable"></div>
      
    </div>
 
  <!-- JQuerry ---->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- Bootstrap Javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"> </script>

   <script>
    //function to Keep the data when you refresh the screen;
    $(document).ready(function(){
        displayData();
    });

    // Display Function
    function displayData(){
      var displayData = "true";

      $.ajax({
        url: "display.php",
        type: 'post',
        data:{
            displaySend:displayData
        },
        success:function(data,status){
          $('#displayDataTable').html(data);
        }
      });
    }
    // Function to Add users into the database;
    function adduser(){
        var nameAdd = $('#completename').val();
        var emailAdd = $('#completeemail').val();
        var mobileAdd = $('#completemobile').val();
        var placeAdd = $('#completeplace').val();
        $.ajax({
        url:"insert.php",
        type: 'post',
        data:{
          nameSend:nameAdd,
          emailSend:emailAdd,
          mobileSend:mobileAdd,
          placeSend:placeAdd, 
        },
        success: function(data,status){
         // console.log(status);
         $('#completeModal').modal('hide');
         displayData();
        }
      });
    }
    //Delete record

    function DeleteUser(deleteid){
      $.ajax({
        url:"delete.php",
        type: 'post',
        data:{
          deleteSend: deleteid,
        },
        success:function(data,status){
            displayData();
        }
      });
    }
    //Update Function
    function GetDetails(updateid){
      $('#hiddendata').val(updateid);

      $.post("update.php",{updateid:updateid},function(data,status){
        var userid = JSON.parse(data);
        $('#updatename').val(userid.name);
        $('#updateemail').val(userid.email);
        $('#updatemobile').val(userid.mobile);
        $('#updateplace').val(userid.place);
      });

      $('#updateModal').modal('show');
    }
    // Onclick update event function
    function updateDetails(){
      var updatename = $('#updatename').val();
      var updateemail = $('#updateemail').val();
      var updatemobile = $('#updatemobile').val();
      var updateplace = $('#updateplace').val();
      var hiddendata = $('#hiddendata').val();

      $.post("update.php",{
        updatename:updatename,
        updateemail:updateemail,
        updatemobile: updatemobile,
        updateplace:updateplace,
        hiddendata: hiddendata
      },function(data,status){
        $('#updateModal').modal('hide');
        displayData();
      });
    }

   </script>
  </body>
</html>