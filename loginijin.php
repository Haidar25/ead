<?php
    session_start();
    if(isset($_SESSION['username'])){
        if($_SESSION['username']=="user")
            header("location:http://localhost/ead/form_ijin.php/");
        else
            header("location:http://localhost/ead/index.php/");
    }
?>
<div id="modalLoginIjin" class="popupContainer add" style="display:none;">
    <header class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close">&times;</span>
    </header>

    <div class="form">
      <form action="system/loginijin.php" method="post">
        <input name ="username" type="text" id="nama" placeholder="Username" autocomplete="off"><br/>
        <input name ="password" type="password" id="password" placeholder="Password" autocomplete="off"><br/>
        <button id="submit" type="submit" name="submit" value="submit">Login</button>
      </form>
    </div>
</div>