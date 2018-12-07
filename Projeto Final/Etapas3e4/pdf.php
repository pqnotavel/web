
<?php
/* Carrega a classe DOMPdf */
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;

$document = new Dompdf();

//$document->loadHtml($page);

$connect = mysqli_connect("localhost", "root", "", "casa_do_agricultor");

$query = "SELECT * FROM products";

$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);

$output ='
<h1>Casa do Agricultor</h1>
<style>
table {
   font-family: arial, sans-serif;
   border-collapse: collapse;
   width: 100%;
}

td, th {
   border: 1px solid #dddddd;
   text-align: left;
   padding: 8px;
}

tr:nth-child(even) {
   background-color: #dddddd;
}
</style>
<table>
<tr>
 <th>Nome</th>
 <th>Marca</th>
 <th>Codigo</th>
 <th>Quantidade</th>
</tr>
';


while ($row = mysqli_fetch_array($result))
{
    $output .= '
        <tr>
            <td>'.$row['description'].'</td>
            <td>'.$row['brand'].'</td>
            <td>'.$row['id'].'</td>
            <td>'.$row['quantity'].'</td>
        </tr>
    ';
}

$output .='</table> </html>'; 

$document->loadHtml($output);

$document->setPaper('A4', 'landscape');

$document-> render();

$document-> stream("Webslesson", array("Attachment" => 0));

?>