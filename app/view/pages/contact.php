<?php
?>
Contact
<style>
  .name{
      height: 80px;
      border-radius: 100px;
      color: chartreuse;
  }
  .submit{
      border-radius: 15px;
      background-color: cadetblue;
      margin-left: 50px;
      margin-top: 50px;
      cursor: pointer;
  }
  .submit:hover{
      background-color: darkmagenta;
  }
</style>
<form action="" method="post">
    <label>
        Name= <input type="text" name="Name" value="Janith Heshara" class="name"/><br/>
        Address= <input type="text" name="Address" value="12345@" /><br/>
        E-mail= <input type="text" name="email" value="janithheshara@gmail.com" /><br/>
        Password= <input type="password" name="Password" value="12345@" /><br/>

    </label>
    <input type="submit" value="Submit" class="submit"/>
</form>
