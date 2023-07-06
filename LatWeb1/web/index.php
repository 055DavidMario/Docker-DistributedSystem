<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-top: 50px;
        }

        table {
            width: 400px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #333333;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php
        $name = "David Mario Yohanes Samosir";
        $nim = "2115101055";
        $studyProgram = "Computer Science";
        $class = "4 - IKI";
    ?>

    <h1>Hello, I'm <?php echo $name; ?></h1>

    <table>
        <tr>
            <th>Personal Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Study Program</td>
            <td><?php echo $studyProgram; ?></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><?php echo $class; ?></td>
        </tr>
    </table>
</body>
</html>
