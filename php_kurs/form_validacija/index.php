<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validacija</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
        <h2>Form validacija</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="validate.php" method="post">
                    <input type="username" name="username" placeholder="username" class="form-control" required></br>
                    <input type="email" name="email" placeholder="email" class="form-control" required></br>
                    <select name="year">
                        <?php for($i = 1965; $i < 2005; $i++): ?>
                            <option value="<?php echo $i; ?>">Year of birth <?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female"> Female</br></br>

                    <p>Programing lenguage</p>
                    <input type="checkbox" name="languages[]" value="php">PHP 
                    <input type="checkbox" name="languages[]" value="js">JavaScript 
                    <input type="checkbox" name="languages[]" value="java">Java 
                    </br>
                    <button type="submit" name="subBtn" class="btn btn-info form-control">Save</button>
                
                </form>
            </div>
        </div>
    </div>


</body>
</html>