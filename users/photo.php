<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #img {
            display: flex;
            margin: auto;
            width: 180px;
            height: 180px;
        }

        #upload {
            display: flex;
            margin: auto;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="profile">
        <img src="../images/divya.png" id="img" alt=""><br>
        <input type="file" name="image" onchange="preview(event)" id="upload"><br>
    </div>

    <script>
        function preview(event) {
            var input = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function() {
                var result = reader.result;
                var img = document.getElementById('img');
                img.src = result;
            }
            reader.readAsDataURL(input);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>