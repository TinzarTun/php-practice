<?php 
$connect = mysqli_connect("localhost","root","","abcd");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Display</title>
</head>
<body>

<form>
    Student Name
    <select id="student" onchange="getStudent(this.value)">
        <option value="">Choose Student</option>
        <?php 
        $select = mysqli_query($connect,"SELECT * FROM student");
        while ($data = mysqli_fetch_assoc($select)) {
            echo "<option value='{$data['StudentID']}'>{$data['Name']}</option>";
        }
        ?>
    </select>

    <br><br>

    Student ID
    <input type="text" id="sid" readonly>

    <br><br>

    Phone
    <input type="text" id="phone" readonly>

    <br><br>

    Address
    <textarea id="address" readonly></textarea>
</form>

<script>
    function getStudent(id) {
        if (id === "") {
            document.getElementById("sid").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("address").value = "";
            return;
        }

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "getStudent.php?id=" + id, true);

        xhr.onload = function () {
            if (this.status == 200) {

                try {
                    var data = JSON.parse(this.responseText);
                } catch (e) {
                    alert("Invalid response from server");
                    return;
                }

                document.getElementById("sid").value = data.StudentID;
                document.getElementById("phone").value = data.Phone;
                document.getElementById("address").value = data.Address;
            }
        };

        xhr.send();
    }
    </script>

</body>
</html>
