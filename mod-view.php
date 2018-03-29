<!DOCTYPE html>
<html>
    <body>
        <form action="includes/resource_requests.inc.php" method="POST">
            What country do you want to add resources to? <input type="text" name="country"><br>
            What resource do you want to add? <input type="text" name="resource"><br>
            How much do you want to add? <input type="number" step="100" name="amount"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>