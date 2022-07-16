<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <form method ="post" action="script.php">
                <div class="name">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name ">
                </div>
                <div class="email">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Your Email ">
                </div>
                
                <div class="subject">
                <label>subject</label>
                <input type="text" name="subject" placeholder="Enter subject ">
                </div>
                <div class="message">
                <label>Message</label>
                <input type="text" name="message" placeholder="Enter Your message here ">
                </div>
                <div class="button">
                    <button type="submit" >Submit</button>
                </div>                         
                
            </form>

        </div>
    </div>
    
</body>
</html>