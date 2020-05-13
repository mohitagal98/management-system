<?php include 'include/db_config.php';
include 'include/user_status_check.php';
session_start();
if (!isset($_SESSION['login_status'])){
    header("Location:index.php");
}
else if(isset($_SESSION['login_status'])){
    if ($_SESSION['login_status']==0){
        header("Location:index.php");
    }
}
if (block_check($_SESSION['user_id'],$conn)==4){
    header("Location:acc_blocked.php");
}
if (acc_approval_check($_SESSION['user_id'],$conn)==5){
    header("Location:acc_not_approved.php");
};?>
<html>
<head>

    <title>Chatting System</title>
    <link rel="stylesheet" href="chat/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="icon" type="image/png" href="chat/favicon.png">
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("chat").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "chat1.php", true);
            xhttp.send();
        }

        setInterval(function () {
            loadDoc();
        }, 1000)
    </script>
</head>
<body onload="loadDoc()">
<div class="container">
    <div class="ak"><span><img src="chat/favicon.png"><h2 style="position: relative;
    bottom: 75px;left: 120px">Chating System</h2></span></div>
    <div class="w3-card chat" style="position: relative;bottom: 50px;">
        <div id="chat"></div>
    </div>
    <form style="position: relative;bottom: 50px;" method="post" action="chat_index.php">

        <span><textarea class="w3-input" name="msg" placeholder="Message"></textarea>
            <input class="w3-input w3-ripple w3-hover-blue" type="submit" name="submit" value="Send>>>"></span>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $Name = $_SESSION['full_name'];
        $msg = $_POST['msg'];

        $query = "insert into chat(name,msg) values('$Name','$msg');";
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<audio src='chat/chat.mp3' autoplay></audio>";
        } else {
            echo "<span style='color: red;'>Message Sending Failed!</span>";
        }
    }
    ?>
</div>
</body>
</html>