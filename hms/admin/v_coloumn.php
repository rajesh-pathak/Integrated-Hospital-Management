    <table align="center" style="width:40%;">
<tr>
<th>Column 1</th>
<th>Column 2</th>
<th>Column 3</th>
</tr>
<?
$rotate = 0;
$amount = 1;
while($amount <= 50)
{
if($rotate == 0) {
echo '<tr>
<td>test</td>';
$rotate = 1;
}
else if($rotate == 1) {
echo '<td>test2</td>';
$rotate = 2;
}
else if($rotate == 2) {
echo '<td>test3</td>';
$rotate = 0;
echo '</tr>';
}

$amount++;

}
echo '</tr></table>';