<?php 

class Kniga {
    private $naziv;
    private $isbn;
    private $broj_kopija;
function __construct($isbn)
{
echo "<p>Kreirana instanca.</p>";
}

function __destruct()
{
echo "<p>Unistena.</p>";
}
}
$kniga = new Kniga("1893115852"); 

?>