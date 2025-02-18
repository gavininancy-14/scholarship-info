<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Student Details</h2>
    <table id="studentTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Category</th>
                <th>Contact Number</th>
                <th>Parent Name</th>
                <th>Parent Occupation</th>
                <th>Annual Income</th>
                <th>Current Studying</th>
                <th>CGPA Percentage</th>
            </tr>
        </thead>
        <tbody>
            <!-- Student details will be loaded here -->
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            fetchStudents();
        });

        function fetchStudents() {
            $.ajax({
                url: "../api/studentsdetail.php",
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.status === "error") {
                        console.error("Error:", response.message);
                        alert(response.message);
                        return;
                    }

                    let rows = "";
                    response.data.forEach(function (student) {
                        rows += `
                            <tr>
                                <td>${student.id}</td>
                                <td>${student.name}</td>
                                <td>${student.email}</td>
                                <td>${student.category}</td>
                                <td>${student.contact_number}</td>
                                <td>${student.parent_name}</td>
                                <td>${student.parent_occupation}</td>
                                <td>${student.annual_income}</td>
                                <td>${student.current_studying}</td>
                                <td>${student.cgpa_percentage}</td>
                            </tr>
                        `;
                    });

                    $("#studentTable tbody").html(rows);
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    alert("Error fetching student details");
                }
            });
        }
    </script>

</body>
</html>
