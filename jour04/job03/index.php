<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ● id (input type text),
● nom (input type text),
● type (liste déroulante <select>)
● filtrer (input type button). -->
    <!-- <form action="" method="post">
        id:<input type="text" id="id">
        name:<input type="text" id="name">
        type:<select name="" id="type">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        <button id="button">Filter</button>
    </form> -->
    <form>
        <label for="id">id:</label>
        <input type="text" id="id" name="id">

        <label for="name">name:</label>
        <input type="text" id="name" name="name">

        <label for="type">type:</label>
        <select id="type" name="type"></select>

        <input type="button" value="Filter" onclick="filterData()">
    </form>

    <div id="result"></div>


</body>
<script src="script.js"></script>

</html>