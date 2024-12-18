<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Enrollment Form</title>
</head>
<body>

    <div class="nav">
        <div class="logo">
            <p><a href="home.php"> NVC ONLINE COURSE</a></p>
            
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    
    <div class="container">
        <div class="box form-box">
            <header>Enrollment Form</header>
            <form action="" methods="post">
                <div class="field input">
                    <label for="Full name">Full name</label>
                    <input type="text number" name="Full name" id="Full name" autocomplete= "off" required>
                </div>

                <div class="field input">
                    <label for="Cellphone No.">Cellphone No.</label>
                    <input type="number" name="Cellphone No." id="Cellphone No." autocomplete= "off" required>
                </div>

                <div class="field input">
                    <label for="Religion">Religion</label>
                    <input type="text" name="Religion id="Religion autocomplete= "off" required>
                </div>

                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" autocomplete= "off" required>
                </div>

                <div class="input-name">
                    <input type="radio" class="radio-button" name="r1">
                    <label>Male</label>

                    <input type="radio" class="radio-button" name="r1">
                    <label>Female</label>
                </div>

                <form>
                    Date of Birth
                    <input type="date" id="date">
                </form>

                <div class="input-name">
                    <select class="Course">
                        <option>Select a Course</option>
                        <option>Bachelor of Science in Computer Science</option>
                        <option>Bachelor of Science in Tourism Management</option>
                        <option>Bachelor of Science in Criminology</option>
                        <option>Bachelor of Science in Business Administration</option>
                        <option>Bachelor of Science in Hospitality Management</option>
                        

                    </select>
                </div>

                <div class="background">
                </div>
                
                <div class="field input">
                    
                    <input type="submit" class="btn" name="submit" value="Register"
                     required>
                </div>
               
            </form>
        </div>
    </div>
    
</body>
</html>