<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Create Client</title>
</head>
<body>
    <div class="container my-5">
        <h2>Создание нового клиента</h2>
        <form method="post">
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Имя</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "name" value = "">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Ванюков</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "last_name" value = "">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "email" value = "">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Компания</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "company" value = "">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Должность</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "position" value = "">
                </div>
            </div>
            <div class="row md-3">
                <label for="col-sm-3 col-form-label">Телефон</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name = "phone_1" value = "">
                </div>
            </div>
        </form>
    </div>
</body>
</html>