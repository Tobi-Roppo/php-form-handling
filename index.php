<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PHP practice</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4">
            <h1 class="card-title text-center">User Information</h1>
            <form action="includes/formhandler.php" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="favoritepet" class="form-label">Select your favorite pet:</label>
                    <select id="favoritepet" name="favoritepet" class="form-select">
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                        <option value="fish">Fish</option>
                        <option value="hamster">Hamster</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
