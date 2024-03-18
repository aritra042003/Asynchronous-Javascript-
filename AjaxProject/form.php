<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="formscript.js"></script>
</head>

<body>
    <div id="form-div">
        <h1>Application Form</h1>
        <form action="#" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>Select State</label>
                <select onchange="fetchCities(this.value)">
                    <option>Select State</option>
                    <option>Bihar</option>
                    <option>West Bengal</option>
                    <option>Madhya Pradesh</option>
                    <option>Uttar Pradesh</option>
                </select>
            </div>
            <div>
                <label>Select city</label>
                <select id="cities">
                    <option>First select state</option>
                </select>
            </div>
            <div>
                <input type="submit" value="submit">
            </div>
    </div>
    </form>
</body>

</html>