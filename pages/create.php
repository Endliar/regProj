<?php
include "C:/xampp/htdocs/regProj/ConfigPageLinks/Pagination.php";
include "C:/xampp/htdocs/regProj/ConnectToDb/Database.php";

$database = new \dbProject\ConnectToDb\Database("localhost", "endliar", "0611", "example");

$name = "";
$email = "";
$last_name = "";
$company = "";
$position = "";
$phone_1 = "";

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $last_name = $_POST["last_name"];
    $company = $_POST["company"];
    $position = $_POST["position"];
    $phone_1 = $_POST["phone_1"];

    do {
        if (empty($name) || empty($email) || empty($last_name)) {
            $error_message = "Все поля должны быть заполнены.";
            break;
        }

        $result = $database->query("INSERT INTO Client (first_name, last_name, email, company_name, position, phone_1) VALUES ('$name', '$last_name', '$email', '$company', '$position', '$phone_1');");

        if (!$result) {
            $error_message = "Неверный sql запрос" . $database->error;
            break;
        }

        $name = "";
        $email = "";
        $last_name = "";

        $success_message = "Клиент успешно добавлен";

        header("location: /regProj/frontend/index.php");
        exit;
    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Create Client</title>
</head>
<body>
    <div class="container my-5">
        <h2>Создание нового клиента</h2>

        <?php
        if (!empty($error_message)) {
            echo
            "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$error_message</strong>
                <button type='button' class='btn-close' data-bs-dismiss = 'alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Имя</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "name" value = "<?php echo $name; ?>">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Фамилия</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "last_name" value = "<?php echo $last_name; ?>">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "email" value = "<?php echo $email; ?>">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Компания</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "company" value = "<?php echo $company; ?>">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Должность</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "position" value = "<?php echo $position; ?>">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Телефон</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "phone_1" value = "<?php echo $phone_1; ?>">
                </div>
            </div>
            <br>

            <?php
            if (!empty($success_message)) {
                echo
                "
            <div class='row-mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissable fade show' role='alert'>
                        <strong>$error_message</strong>
                        <button type='button' class='btn-close' data-bs-dismiss = 'alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class = "btn btn-outline-primary" href="/regProj/frontend/index.php" role="button">Вернуться на главную</a>
                </div>
            </div>

        </form>
    </div>
</body>
</html>