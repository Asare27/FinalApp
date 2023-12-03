
<?php
include 'connect.php';
$server_mode = "development";
if (
    isset($_POST['indexNumberSend']) && isset($_POST['firstNameSend']) && isset($_POST['lastNameSend']) && isset($_POST['otherNameSend'])
    && isset($_POST['dateOfAdmissionSend']) && isset($_POST['nameOfFormerSchoolSend']) && isset($_POST['dateOfBirthSend']) && isset($_POST['genderSend'])
    && isset($_POST['religiousDenominationSend']) && isset($_POST['phoneNumberSend']) && isset($_POST['hometownSend']) && isset($_POST['placeOfBirthSend'])
    && isset($_POST['districtSend']) && isset($_POST['regionSend'])
) {
    // Prepare and bind parameters
    $sql = "INSERT INTO student (indexNumber, firstName, lastName, otherName, dateOfAdmission, nameOfFormerSchool, dateOfBirth, gender, religiousDenomination, phoneNumber, hometown, placeOfBirth, district, region) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssss",
        $_POST['indexNumberSend'],
        $_POST['firstNameSend'],
        $_POST['lastNameSend'],
        $_POST['otherNameSend'],
        $_POST['dateOfAdmissionSend'],
        $_POST['nameOfFormerSchoolSend'],
        $_POST['dateOfBirthSend'],
        $_POST['genderSend'],
        $_POST['religiousDenominationSend'],
        $_POST['phoneNumberSend'],
        $_POST['hometownSend'],
        $_POST['placeOfBirthSend'],
        $_POST['districtSend'],
        $_POST['regionSend']
    );

    // Execute the prepared statement
    if ($stmt->execute()) {
        $msg = json_encode(
            [
                "status"=>"success",
                "msg"=>"Data inserted successfully"
            ]
        );
    } else {
        $msg = json_encode(
            [
                "status"=>"error",
                "msg" => ($server_mode == "development")? $conn->error : "Server error!"
            ]
        );
    }
    print_r($msg);

    // Close the statement
    $stmt->close();
}
