<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css_res/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="process_res.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name (SAME IN IC)</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>No. IC (Example: 880203011234)</label>
                            <input type="number" id="ic" name="ic" placeholder="Enter your Number IC" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" id="birth" name="birth" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number (Example: 01212345678)</label>
                            <label>Whatsapp Number</label>
                            <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select id="gender" name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Full Address</label>
                            <textarea id="address" name="address" placeholder=" Enter your full address" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Parent / Guardian Name</label>
                            <input type="text" id="parent" name="parent" placeholder="Enter Parent Name" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number Parent / Guardian (Example: 01212345678)</label>
                            <input type="tel" id="mobileP" name="mobileP" placeholder="Enter Mobile Number" required>
                        </div>

                        <div class="input-field">
                            <label>Parent / Guardian</label>
                            <select id="parentGu" name="parentGu" required>
                                <option disabled selected>Select gender</option>
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Brother</option>
                                <option>Sister</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Password" required>
                        
                        </div>

                        <div>
                            <label for="showPassword">
                                <h5>Show Password</h5>
                            </label>
                            <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">
                        </div>

                        <div class="input-field">
                            <label>User Type</label>
                            <select id="user_type" name="user_type" required>
                                <option disabled selected>Select User</option>
                                <option>PartTime</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <br>
                    
                        <button type="submit" name="register" class="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        
                    </div>
                </div> 
            </div>
        </div>
        </form>
    </div>

    <script src="script.js"></script>
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("showPassword");

        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
</body>
</html>