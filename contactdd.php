<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailing Devils </title>
    <link rel="stylesheet" href="dd3.css">
</head>
<body>
    <header>
      <img src="img1.png" alt="img1" class="img1"  > 
     </header>
    <nav>
        <ul>
           <li><a href="homedd.html">Home</a></li> 
           <li><a href="aboutdd.html">About</a></li>
           <li><a href="servicesdd.html">Services</a></li>
           <li><a href="#contactdd.php">Contact Us</a></li>
        </ul>
     </nav>
     <p class="p4"></p>
     <section>
        <h1><b>Get in touch with us by completing the form below</b></h1>
        <h2><b>Our team will contact you soon with quotation of your selected service for your car</b></h2>
        <form action="contactconfermationdd.php" method="POST">

            <fieldset>
                <legend><em>Personal Details</em></legend>

                    <label for="firstname">First Name: </label>
                    <input type="text" id="firstname" name="firstname" required><br><br>

                    <label for="lastname">Last Name: </label>
                    <input type="text" id="lastname" name="lastname" required><br><br>

                    <label for="mobilenumber">Mobile Number: </label>
                    <input type="tel" id="mobilenumber" name="mobilenumber" pattern="[0-9]{10}" required><br><br>

                    <label for="emailaddress">E-mail:</label>
                    <input type="emailaddress" id="emailaddress" name="emailaddress" required><br><br>

                    <label for="country">Select your Country</label>
                    <select id="country" name="country">
                    <option value="India">India</option>
                    <option value="Canada">Canada</option>
                    <option value="UnitedStates">United States</option>
                    <option value="Dubai">Dubai</option>
                    </select><br><br>

                    <label for="pincode">Pin Code:</label>
                    <input type="text" id="pincode" name="pincode" required><br><br>

                    </fieldset>
                    <br><br>

                    <fieldset>
                        <legend><em>Services Inquiry</em></legend>

                        <label for="servicereq">Service Required:</label>

                        <input type="checkbox" id="ppf"  name="servicereq" value="ppf">
                        <label for="ppf">PPF (Paint-Protection-Film)</label>

                        <input type="checkbox" id="dragonppf" name="servicereq" value="dragonppf">
                        <label for="dragonppf">Dragon PPF (Special PPF)</label>

                        <input type="checkbox" id="ceramiccoating" name="servicereq" value="ceramiccoating">
                        <label for="ceramiccoating">Ceramic Coating</label>

                        <input type="checkbox" id="colorwrap" name="servicereq" value="colorwrap">
                        <label for="colorwrap">Color Wrap</label></br><br>

                        <input type="checkbox" id="windowtint" name="servicereq" value="windowtint">
                        <label for="windowtint">Window Tinting</label>

                        <input type="checkbox" id="alloypaint" name="servicereq" value="alloypaint">
                        <label for="alloypaint">Alloy Paint</label>
                        
                        <input type="checkbox" id="deepcleaning" name="servicereq" value="deepcleaning">
                        <label for="deepcleaning">Deep Cleaning (Includes removing Seats and floor cleaning)</label><br><br>

                        <label for="carmodel">Car Model</label>
                        <input type="text" id="carmodel" name="carmodel" required><br><br>
                        
                        <label for="mfyear">Manufacture Year</label>
                        <input type="text" id="mfyear" name="mfyear" required><br><br>

                    
                    </fieldset>

                    <button type="submit">Submit Application</button>
                    <button type="reset">Reset</button>

        </form>
   
        <footer class="footer">
        <p class="p5">Open all 7 days from 10 AM to 8 PM<br>
   <img src="imgfoot.png" alt="imgfoot" class="imgfoot"><br><br>
   &copy; 2023 DETAILING DEVILS</p>
         </footer>
    
</body>
</html>