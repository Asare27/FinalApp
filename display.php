<?php
    include 'connect.php';

    if(isset($_POST['displaySend'])) {
        $table = '<table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col"> SI No</th>
                <th scope="col"> IndexNo </th>
                <th scope="col">FirstName </th>
                <th scope="col">LastName </th>
                <th scope="col">OtherName </th>
                <th scope="col">Admission Date </th>
                <th scope="col">Former School </th>
                <th scope="col">DOB </th>
                <th scope="col">Gender </th>
                <th scope="col">Denomination </th>
                <th scope="col">Contact </th>
                <th scope="col">Home Town </th>
                <th scope="col">Birth Place </th>
                <th scope="col">District </th>
                <th scope="col">Region </th>
                <th scope="col">Actions </th>
            </tr>
        </thead>';

        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        $number = 1;

        while($row = mysqli_fetch_assoc($result)) {
            $table .= '<tr>
                <td scope="row">'.$number.'</td>
                <td>'. $row['IndexNumber'] .' </td>
                <td>'. $row['firstName'] .' </td>
                <td>'. $row['lastName'] .' </td>
                <td>'. $row['otherName'] .' </td>
                <td>'. $row['dateOfAdmission'] .' </td>
                <td>'. $row['nameOfFormerSchool'] .' </td>
                <td>'. $row['dateOfBirth'] .' </td>
                <td>'. $row['gender'] .' </td>
                <td>'. $row['religiousDenomination'] .' </td>
                <td>'. $row['phoneNumber'] .' </td>
                <td>'. $row['hometown'] .' </td>
                <td>'. $row['placeOfBirth'] .' </td>
                <td>'. $row['district'] .' </td>
                <td>'. $row['region'] .' </td>
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
