
<?php
include 'connect.php';

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
        "sssssssssssss",
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
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}
?>
