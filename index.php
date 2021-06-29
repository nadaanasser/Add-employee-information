<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Enter employee information</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form method="post" action="gfg.php">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="ID" placeholder="Employee ID" required>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control item" name="name" placeholder="Employee Name" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="department" placeholder="Department" required>
            </div>

            <div class="form-group">
                <input type="date" class="form-control item" name="birth-date" placeholder="Birth Date" required>
            </div>

            <div class="form-group">
                Employee Image <br>
            <input  class="form-control item" type="file" id="img" name="img" accept="image/*" required>
        </div>
 
        <div class="form-group">
             <input id="submit" type="submit" class="btn btn-block create-account"
                        name="submit" value="Create Account" onclick="on_submit()">
                </div>
        </form>
        <div class="social-media">
            
        </div>
    </div>
    
</body>
</html>
