<?php
    $idx = $_GET['idx'];
?>

<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body{
                text-align: center;
            }
            .delete{
                margin-top: 100px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="delete">
            <form method="get" action="delete.php">
                <table>
                    <tr>
                        <input type="hidden" name="idx" value="<?=$idx?>">
                        <td>PW: </td>
                        <td><input type="password" name="passwd"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">SUBMIT</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>