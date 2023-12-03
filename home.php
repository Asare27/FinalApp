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
                <h1 class="modal-title fs-5" id="form_tile">New Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 150vh; overflow-y: auto;">
                <div id="student_info">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Index Number</label>
                            <input type="text" class="form-control" id="indexNumber" name="indexNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Other Name</label>
                            <input type="text" class="form-control" id="otherName" name="otherName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Admission</label>
                            <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission"
                                   required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Name of Former School</label>
                            <input type="text" class="form-control" id="nameOfFormerSchool" name="nameOfFormerSchool"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Gender</label>
                            <div class="d-flex align-items-center mt-2">
                                <select class="form-control" id="gender" name="gender">
                                    <option value=""></option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Religious Denomination</label>
                            <input type="text" class="form-control" id="religiousDenomination"
                                   name="religiousDenomination" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Home Town</label>
                            <input type="text" class="form-control" id="hometown" name="hometown" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>District</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Region</label>
                            <input type="text" class="form-control" id="region" name="region" required>
                        </div>
                    </div>
                </div>
                <div id="parent_info" style="display: none">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Index Number</label>
                            <input type="text" class="form-control" id="indexNumber" name="indexNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Other Name</label>
                            <input type="text" class="form-control" id="otherName" name="otherName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Admission</label>
                            <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission"
                                   required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Name of Former School</label>
                            <input type="text" class="form-control" id="nameOfFormerSchool" name="nameOfFormerSchool"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Gender</label>
                            <div class="d-flex align-items-center mt-2">
                                <select class="form-control" id="gender" name="gender">
                                    <option value=""></option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Religious Denomination</label>
                            <input type="text" class="form-control" id="religiousDenomination"
                                   name="religiousDenomination" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Home Town</label>
                            <input type="text" class="form-control" id="hometown" name="hometown" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>District</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Region</label>
                            <input type="text" class="form-control" id="region" name="region" required>
                        </div>
                    </div>
                </div>
                <div id="results_info" style="display: none">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Index Number</label>
                            <input type="text" class="form-control" id="indexNumber" name="indexNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Other Name</label>
                            <input type="text" class="form-control" id="otherName" name="otherName" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Admission</label>
                            <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission"
                                   required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Name of Former School</label>
                            <input type="text" class="form-control" id="nameOfFormerSchool" name="nameOfFormerSchool"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Gender</label>
                            <div class="d-flex align-items-center mt-2">
                                <select class="form-control" id="gender" name="gender">
                                    <option value=""></option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Religious Denomination</label>
                            <input type="text" class="form-control" id="religiousDenomination"
                                   name="religiousDenomination" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Home Town</label>
                            <input type="text" class="form-control" id="hometown" name="hometown" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>District</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Region</label>
                            <input type="text" class="form-control" id="region" name="region" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="addUser()">Submit</button>
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
                    <input type="text" class="form-control" id="updateName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="updateemail">Email</label>
                    <input type="email" class="form-control" id="updateEmail" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="updatemobile">Mobile</label>
                    <input type="text" class="form-control" id="updateMobile" placeholder="Enter your mobile number">
                </div>
                <div class="form-group">
                    <label for="updateplace">Place</label>
                    <input type="text" class="form-control" id="updatePlace" placeholder="Enter your place">
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
<div class="container my-3 d-flex justify-content-end">
    <a href="index.php" class="btn btn-danger my-3 ms-3">Close App</a>
</div>
<div class="container my-3">
    <h1 class="text-center">Ayisec Student Registration Portal</h1>
    <div class="row">
        <div class="col-md-12">
            <div id="insert_alert" class="alert" role="alert"></div>
        </div>
    </div>
    <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#completeModal">
        Add New Student
    </button>
    <div id="displayDataTable"></div>
</div>

<!-- JQuerry ---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>

    //Function to Keep Data when you refresh the screen.
    $(document).ready(function () {
        displayData;
    });

    // Display Function
    function displayData() {
        var displayData = "true";
        $.ajax({
            url: "display.php",
            type: 'post',
            data: {
                displaySend: displayData
            },
            success: function (data, status) {
                $('#displayDataTable').html(data);
            }
        });
    }

    // Function to Add Student Info into the database.
    function addUser() {
        let indexNumberAdd = $('#indexNumber').val(),
            firstNameAdd = $('#firstName').val(),
            lastNameAdd = $('#lastName').val(),
            otherNameAdd = $('#otherName').val(),
            dateOfAdmissionAdd = $('#dateOfAdmission').val(),
            nameOfFormerSchoolAdd = $('#nameOfFormerSchool').val(),
            dateOfBirthAdd = $('#dateOfBirth').val(),
            genderAdd = $('#gender').val(),
            religiousDenominationAdd = $('#religiousDenomination').val(),
            phoneNumberAdd = $('#phoneNumber').val(),
            hometownAdd = $('#hometown').val(),
            placeOfBirthAdd = $('#placeOfBirth').val(),
            districtAdd = $('#district').val(),
            regionAdd = $('#region').val(),
            insert_alert = $("#insert_alert");

        $.post(
            "insert.php",
            {
                indexNumberSend: indexNumberAdd,
                firstNameSend: firstNameAdd,
                lastNameSend: lastNameAdd,
                otherNameSend: otherNameAdd,
                dateOfAdmissionSend: dateOfAdmissionAdd,
                nameOfFormerSchoolSend: nameOfFormerSchoolAdd,
                dateOfBirthSend: dateOfBirthAdd,
                genderSend: genderAdd,
                religiousDenominationSend: religiousDenominationAdd,
                phoneNumberSend: phoneNumberAdd,
                hometownSend: hometownAdd,
                placeOfBirthSend: placeOfBirthAdd,
                districtSend: districtAdd,
                regionSend: regionAdd,
            }, function (data) {
                let parsedData = JSON.parse(data);
                console.log("within the callback function")
                if (parsedData.status === "success") {
                    insert_alert.removeClass("alert-danger");
                    insert_alert.addClass("alert-success");
                    insert_alert.text(parsedData.msg);
                    slideAnimation("student_info", "parent_info");
                    $("#form_tile").text("Parent Info")
                    displayData();
                } else {
                    insert_alert.removeClass("alert-success");
                    insert_alert.addClass("alert-danger");
                    insert_alert.text(parsedData.msg);
                }
            }
        )
    }

    function slideAnimation(previous, next){
        let previousSection = $(`#${previous}`);
        let nextSection = $(`#${next}`);
        previousSection.slideUp("fade", function () {
            previousSection.hide();
            nextSection.show()
        })
    }
</script>

</body>
</html>