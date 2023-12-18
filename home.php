<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skream Game Shop</title>
    <link rel="stylesheet" type="text/css" href="styles1.css">
    
</head>

<body>

    <div class="skream-title">
        <h1>Skream Game Shop</h1>
    </div>

    <div class="responsive-container-block big-container">
        
        <button class="btn" onclick="home()">Home</button>
<button class="btn" onclick="order()">Order</button>

       
    </div>

<div class="responsive-container-block big-container">
    <div class="game-images">
 
        <div class="game-slot">
            <img src="1.png" alt="Game 1">
            <p>Monster Hunter Hunter Rise</p>
            <p>Price: ₱1200</p>
            <p>Discount: 17%</p>
        </div>

        <div class="game-slot">
            <img src="2.png" alt="Game 2">
<p>Spider-Man 2</p>
            <p>Price: ₱2900</p>
            <p>Discount: 10%</p>
        </div>

        <div class="game-slot">
            <img src="3.jpg" alt="Game 3">
<p>God of War</p>
            <p>Price: ₱1700</p>
            <p>Discount: 20%</p>
        </div>

        <div class="game-slot">
            <img src="4.jpg" alt="Game 4">
<p>Hunt</p>
            <p>Price: ₱500</p>
            <p>Discount: 15%</p>
        </div>

        <div class="game-slot">
            <img src="5.jpg" alt="Game 5">
<p>Red Dead Redemption II</p>
            <p>Price: ₱1400</p>
            <p>Discount: 23%</p>
        </div>
        
        <div class="game-slot">
            <img src="6.jpg" alt="Game 6">
<p>Tekken 7</p>
            <p>Price: ₱2200</p>
            <p>Discount: 50%</p>
        </div>

        <div class="game-slot">
            <img src="7.jpg" alt="Game 7">
<p>Minecraft</p>
            <p>Price: ₱1500</p>
            <p>Discount: 6%</p>
        </div>

        <div class="game-slot">
            <img src="8.jpg" alt="Game 8">
<p>Monster Hunter World</p>
            <p>Price: ₱790</p>
            <p>Discount: 10%</p>
        </div>

<div class="game-slot">
            <img src="9.jpg" alt="Game 1">
<p>Counter-Strike 2</p>
            <p>Price: ₱300</p>
            <p>Discount: 5%</p>
        </div>

        <div class="game-slot">
            <img src="10.jpg" alt="Game 2">
<p>Dota 2</p>
            <p>Price: ₱760</p>
            <p>Discount: 11%</p>
        </div>

        <div class="game-slot">
            <img src="11.jpg" alt="Game 3">
<p>Lethal Company</p>
            <p>Price: ₱300</p>
            <p>Discount: 7%</p>
        </div>

        <div class="game-slot">
            <img src="12.jpeg" alt="Game 4">
<p>GTA VI</p>
            <p>Price: ₱1500</p>
            <p>Discount: 10%</p>
        </div>

        <div class="game-slot">
            <img src="13.jpg" alt="Game 5">
<p>Team Fortress 2</p>
            <p>Price: ₱450</p>
            <p>Discount: 12%</p>
        </div>
        
        <div class="game-slot">
            <img src="14.jpg" alt="Game 6">
<p>Overwatch 2</p>
            <p>Price: ₱600</p>
            <p>Discount: 10%</p>
        </div>

        <div class="game-slot">
            <img src="15.jpg" alt="Game 7">
<p>PUBG</p>
            <p>Price: ₱1000</p>
            <p>Discount: 10%</p>
        </div>

        <div class="game-slot">
            <img src="16.jpg" alt="Game 8">
<p>The Finals</p>
            <p>Price: ₱820</p>
            <p>Discount: 17%</p>
        </div>


    </div>
</div>

    <script>
         function order() {
            

            window.open('order.php', '_blank')
window.opener.close();


        }

        function home() {
         
            location.reload();
        }
    </script>
</body>

</html>