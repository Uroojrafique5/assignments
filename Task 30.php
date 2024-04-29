<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Text with jQuery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#changeTextBtn").click(function(){
        $("#message").text("I am a student of MUET");
    });
});
</script>
</head>
<body>

<p id="message">My Name is Ayesha Arain.</p>
<button id="changeTextBtn">Click here</button>

</body>
</html>