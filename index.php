<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Classes Ip</h1>
Digite o endereço IP que pretende verificar
<br>
<br>
<form action="verifica.php"  method="POST">
<input type="text" name="a">
<input type="text" name="b">
<input type="text" name="c">
<input type="text" name="d">
<input type="submit" name="Enviar">
</form>
<br>


<h1>Protocolo</h1>
<form action="protcolo.php" method="post" >
        <div >
    <select   name="nome">
            
        <option value="dns">DNS</option>
        <option value="ftp">FTP</option>
        <option value="http">HTTP</option>
        <option value="ip">IP</option>
    </select>
    <input  type="submit" name="Enviar">
  
</form>

</body>
</html>