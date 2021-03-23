<?php
$ip = $_POST['nome'];


if ($ip=='dns') {
    echo "<h1 >DNS [Domain Name System]</h1>";
    echo "<br>";
    echo "<p>É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácil
de ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá,
corresponder ao endereço IP 192.16831.32.</p>";
}

elseif ($ip=='ftp') {
    echo "<h1 >FTP [File Transfer Protocol]</h1>";
        echo "<br>";
    echo "<p >É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou
upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.</p>";
}

elseif ($ip=='http') {
    echo "<h1>HTTP [HyperText Transfer Protocol]</h1>";
        echo "<br>";
    echo "<p >É o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser,
ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de
Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente
receber a página Web correspondente.</p>";
}

elseif ($ip=='ip') {
    echo "<h1 >IP [Internet Protocol]</h1>";
        echo "<br>";
    echo "<p>É o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor
para que a informação não se perca na rede.</p>";
}

else{
    echo "Erro na pagina";
}

?>