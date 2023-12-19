<?php
    include 'connect.php';

    if(isset($_POST['displaySend'])) {
        $table = '<table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">SI No</th>
                <th scope="col">IndexNo </th>
                <th scope="col">FirstName </th>
                <th scope="col">LastName </th>
                <th scope="col">OtherName </th>
                <th scope="col">Admission Date </th>
                <th scope="col">Former School </th>
                <th scope="col">DOB </th>
                <th scope="col">Gender </th>
                <th scope="col">Contact </th>
                <th scope="col">Region </th>
                <th scope="col">Actions </th>
            </tr>
        </thead>';
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        $number = 1;

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $indexNumber = $row['indexNumber'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $otherName = $row['otherName'];
            $dateOfAdmission = $row['dateOfAdmission'];
            $nameOfFormerSchool = $row['nameOfFormerSchool'];
            $dateOfBirth = $row['dateOfBirth'];
            $gender = $row['gender'];
            $phoneNumber = $row['phoneNumber'];
            $region = $row['region'];
            $table .= '<tr>
                <td scope="row">'.$number.'</td>
                <td>'. $indexNumber   .'</td>
                <td>'. $firstName .' </td>
                <td>'. $lastName .' </td>
                <td>'. $otherName.' </td>
                <td>'. $dateOfAdmission  .' </td>
                <td>'. $nameOfFormerSchool .' </td>
                <td>'. $dateOfBirth .' </td>
                <td>'. $gender .' </td> 
                <td>'. $phoneNumber .' </td>
                <td>'. $region  .' </td>
                <td>
                    <button class="btn btn-dark">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
        $table .= '</table>';
        echo $table;
    }
?>
