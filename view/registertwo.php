<h1> Register below </h1>
    <form action="../actions/registerprocess.php" method = "POST" name="form1">
        <input type="text" name="fullname" placeholder="Enter your name" id="fullname" required></br>
        <input type="text" name="email" placeholder="Enter your email" id="email" required></br>
        <input type="password" name="password" placeholder="Enter your password" id="password" required></br>
        <input type="text" name="country" placeholder="Enter your country" id="country" required></br>
        <input type="text" name="city" placeholder="Enter your city" id="city" required></br>
        <input type="text" name="number" placeholder="Enter your contact number" id="number" required></br>
        <button type="submit" name ="save"  onclick="checkExpression(document.form1.number)" > Register </button>
    </form>