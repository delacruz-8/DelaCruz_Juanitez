<!DOCTYPE html>
<html>

<head>
    <title>Skream Order Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

  <div class="skream-title">
        <h1>Skream Game Shop</h1>
    </div>

    <div class="responsive-container-block big-container">
        
        <button class="btn" onclick="home()">Home</button>
<button class="btn" onclick="order()">Order</button>

       
    </div>

   

        <!-- Rest of your existing HTML code -->
        <form action="" method="post">
            <!-- Your form fields are correct and unchanged -->
        </form>
    </div>

    <div class="responsive-container-block big-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $games = $_POST['games'];

            $gameCosts = [
                "MHRise" => 1200,
                "GodOfWar4" => 1700,
                "SpiderMan2" => 2900,
                "Hunt" => 500,
                "RDR2" => 1400,
                "Tekken7" => 2200,
                "Minecraft" => 1500,
                "MHWorld" => 790
                
            ];

            // Calculate total cost based on selected games
            $totalCost = 0;
            foreach ($games as $selectedGame) {
                if (isset($gameCosts[$selectedGame])) {
                    $totalCost += $gameCosts[$selectedGame];
                }
            }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "skreamdb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO skreamtable (name, phone, email, games, total_cost)
                    VALUES ('$name', '$phone', '$email', '" . implode(',', $games) . "', '$totalCost')";

            if ($conn->query($sql) === TRUE) {
                echo " ";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Display total cost to the user
            echo "Total Cost of Selected Games: ₱ " . $totalCost;

            $conn->close();
        }
        ?>

 <div class="responsive-container-block big-container">
        <div class="game-images">
     
            <div class="game-slot">
                <img src="1.png" alt="Game 1">
            </div>

            <div class="game-slot">
                <img src="2.png" alt="Game 2">
            </div>

            <div class="game-slot">
                <img src="3.jpg" alt="Game 3">
            </div>

            <div class="game-slot">
                <img src="4.jpg" alt="Game 4">
            </div>

            <div class="game-slot">
                <img src="5.jpg" alt="Game 5">
            </div>
            <div class="game-slot">
                <img src="6.jpg" alt="Game 6">
            </div>

            <div class="game-slot">
                <img src="7.jpg" alt="Game 7">
            </div>
      
            <div class="game-slot">
                <img src="8.jpg" alt="Game 8">
            </div>
        </div>
<p></p>
        <form action="" method="post">

            <div class="form-group">
                <label for="contact-name">Name*</label>
                <input type="text" class="form-control" id="contact-name" name="name" placeholder="Enter your name.." onkeyup='validateName()' required>
                <span class='error-message' id='name-error'></span>
            </div>

            <div class="form-group">
                <label for="contact-phone">Phone Number*</label>
                <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="Ex: 1231231234" onkeyup='validatePhone()' required>
                <span class='error-message' id='phone-error'></span>
            </div>

            <div class="form-group">
                <label for="contact-email">Email address*</label>
                <input type="email" class="form-control" id="contact-email" name="email" placeholder="Enter Email" onkeyup='validateEmail()' required>
                <span class='error-message' id='email-error'></span>
            </div>

            <div class="form-group">
                <label for="games1">Select Game:*</label>
                <select id="games1" name="games[]" multiple required>
                    <option value="MHRise"> MHRise </option>
                    <option value="GOW4"> GodOfWar 4 </option>
                    <option value="SpiderMan2"> SpiderMan2 </option>
                    <option value="Hunt">Hunt </option>
                    <option value="RDR2">RDR2 </option>
                    <option value="Tekken7">Tekken 7 </option>
                    <option value="Minecraft">Minecraft </option>
                    <option value="MHWorld">MHWorld </option>
 		
                </select>
            </div>

            <div class="form-group">
                <label for="games2">Select Game:</label>
                <select id="games2" name="games[]" multiple >
                     <option value="MHRise"> MHRise </option>
                    <option value="GOW4"> GodOfWar 4 </option>
                    <option value="SpiderMan2"> SpiderMan2 </option>
                    <option value="Hunt">Hunt </option>
                    <option value="RDR2">RDR2 </option>
                    <option value="Tekken7">Tekken 7 </option>
                    <option value="Minecraft">Minecraft </option>
                    <option value="MHWorld">MHWorld </option>
                </select>
            </div>

            <div class="form-group">
                <label for="games3">Select Game:</label>
                <select id="games3" name="games[]" multiple >
                     <option value="MHRise"> MHRise </option>
                    <option value="GOW4"> GodOfWar 4 </option>
                    <option value="SpiderMan2"> SpiderMan2 </option>
                    <option value="Hunt">Hunt </option>
                    <option value="RDR2">RDR2 </option>
                    <option value="Tekken7">Tekken 7 </option>
                    <option value="Minecraft">Minecraft </option>
                    <option value="MHWorld">MHWorld </option>
                </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Clear</button>
        </form>
    </div>

 <script>
         function order() {
            
            location.reload();
        }

        function home() {
         
window.open('home.php', '_blank')
window.opener.close();

        }

    </script>

</body>

</html>
