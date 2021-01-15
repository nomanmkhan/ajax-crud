<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $('#insert').click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "insert.php",
                    method: "post",
                    data: $('form').serialize(),
                    dataType: "text",
                    success: function(strMessage) {
                        $('#message').text(strMessage);
                    }
                });
            });

            $('#load').click(function(event){
                event.preventDefault();
                $.ajax({
                    url: "load.php",
                    dataType: "html",
                    success: function(Result){
                        $('#result').html(Result);
                    }
                });
            });
            

        });
    </script>
</head>

<body>
    <p id="message"></p>
    <form action="post">
        <table>
        </table>
        <tr>
            <th>Name</th>
        </tr>
        <th><input type="text" id="name" name="name"></br></th>
        <tr>
            <th>Email</th>
        </tr>
        <th><input type="email" id="email" name="email"></br></th>
        <tr>
            <th>Contact</th>
        </tr>
        <th><input type="number" id="contact" name="contact"></br></th>
        <td><input type="submit" id="insert" name="insert"></td>
    </form>


    <form action="post">
    <table>
    <td><tr><button type="submit" name="load" id="load"> load</button></tr></td></table>
    </form>

    <div id="result"></div>



</body>

</html>