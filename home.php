<?php
if(isset($_SESSION['admin'])){
?>
<div class="conten">
    <div class="desc">
        <h1>Selamat Datang</h1>
        <h1>Admin <?php echo $_SESSION['admin']['nama']?></h1>
    </div>
    <div class="my_img">
        <img src="img/OIG.png" alt="foto saya">
    </div>
</div>
<?php
}else{
?>
<div class="conten">
    <div class="desc">
        <h1>Hey There.</h1>
        <h1>I'm Fadhil Firoos.</h1>
        <p>I am a web developer, I specialize in back end</p>
    </div>
    <div class="my_img">
        <img src="img/my.png" alt="foto saya">
    </div>
</div>
<div class="porto">
    <p>My Project</p><hr>
    <img src="img/porto1.png" alt="porto1">
</div>
<?php
}
?>