<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style = "margin: 50px;">
    <h1>List of Client</h1>
    <br>
    <a class = "btn btn-primary" href = "/regProj/pages/create.php" role="button">New Client</a>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th>id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>company_name</th>
            <th>position</th>
            <th>phone_1</th>
            </tr>
        </thead>

        <?php
        include "C:/xampp/htdocs/regProj/ConfigPageLinks/Pagination.php";
        include "C:/xampp/htdocs/regProj/ConnectToDb/Database.php";

        $pagination = new \dbProject\ConfigPageLinks\Pagination();
        $database = new \dbProject\ConnectToDb\Database("localhost", "endliar", "0611", "example");
        $offset = $pagination->getOffSet();
        $result = $database->query("SELECT * FROM Client LIMIT {$offset}, {$pagination->limit}");
        while ($row = mysqli_fetch_assoc($result)) {
            echo 
                "
                    <tbody>
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['company_name']}</td>
                            <td>{$row['position']}</td>
                            <td>{$row['phone_1']}</td>
                            <td>
                                <a class = 'btn btn-primary btn-sm' href='/pages/edit.php?id=$row[id]'>Update</a>
                                <a class = 'btn btn-danger btn-sm' href='/pages/delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                ";
}
echo $pagination->links();
?>
    </table>
</body>
</html>