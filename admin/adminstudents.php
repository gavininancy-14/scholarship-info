<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .table-container {
            background-color: #d1f7f1;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table-container h1 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        table th, table td {
            text-align: left;
            padding: 10px 15px;
            border: 1px solid #ccc;
        }
        table th {
            background-color: #a6e8dc;
            color: #333;
            font-weight: bold;
        }
        table td {
            background-color: #e6fafa;
        }
        .action-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #ff9800;
        }
        .edit-btn:hover {
            background-color: #e68a00;
        }
        .delete-btn {
            background-color: #f44336;
        }
        .delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Students</h1>
        <table>
            <thead>
                <tr>
                    <th>s.no</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact no</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>john doe</td>
                    <td>johndoe@gmail.com</td>
                    <td>987654321</td>
                    <td>
                        <button class="action-btn edit-btn">Edit</button>
                        <button class="action-btn delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
