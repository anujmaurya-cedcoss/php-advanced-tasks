<?php
include('./data.php');
if (isset($_POST)) {
    $type = $_POST['type'];
}
switch ($type) {
    case 'gen_dropdown':
        $res = "<option>--select--</option>";
        foreach ($products as $key => $value) {
            $res .= "<option id = '$key'>$key</option>";
        }
        echo $res;
        break;

    case 'sub_dropdown':
        $res = "";
        if ($_POST['category'] == '--select--') {
            $res = "<option>--select--</option>";
        }
        echo "$_POST[category]";
        foreach ($products[$_POST['category']] as $key => $value) {
            $res .= "<option id = '$key'>$key</option>";
        }
        echo $res;

    case 'id_dropdown':
        $res = "";
        if ($_POST['subcat'] == '--select--') {
            $res = "<option>--select--</option>";
        }
        foreach ($products[$_POST['category']][$_POST['subcat']] as $key => $arr) {
            $res .= "<option id = '$arr[id]'>$arr[id]</option>";
        }
        echo $res;
        break;
    case 'table':
        $table = '<table>
                    <tr>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                    </tr>';
        foreach ($products[$_POST['category']][$_POST['subcat']] as $key => $arr) {
            if ($arr['id'] == $_POST['id'])
                $table .= "<tr>
                        <td>$_POST[category]</td>
                        <td>$_POST[subcat]</td>
                        <td>$arr[id]</td>
                        <td>$arr[name]</td>
                        </tr>";
        }
        $table .= '</table>';
        echo $table;
        break;
    default:
        break;
}
?>