<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            body{
                text-align: center;
            }
            .write{
                display: inline-block;
                border: 2px solid #ccc;
                padding: 10px 30px 20px;
                margin-top: 20px;
                text-align: left;
            }

            td:first-child{
                text-align: right;
            }

            input{
                width: 200px;
            }
        </style>
    </head>
    <body>
        <div class="write">
            <form method="post" action="update_check.php">
                <table>

<?php
include('db_conn.php');
$idx = $_GET['idx'];
$query = "select * from bbs where id=$idx";
$result = mysqli_query($conn, $query);
$ip = $_SERVER['REMOTE_ADDR'];
if(!(mysqli_num_rows($result)==0)){
    $re = mysqli_fetch_row($result);
}
?>
                    <tr>
                    <input type="hidden" name="idx" value="<?=$re[0]?>">
                        <td>ID: </td>
                        <td><input type="text" name="id" value="<?=$re[1]?>" readonly></td>
                    </tr>
                    <tr>
                        <td>TITLE: </td>
                        <td><input type="text" name="title" value="<?=$re[3]?>"></td>
                    </tr>
                    <tr>
                        <td>CONTENT: </td>
                        <td><textarea name="content" cols="26" rows="6"><?=$re[4]?></textarea></td>
                    </tr>
                    <tr>
                        <td>PASSWORD: </td>
                        <td><input type="password" name="pw"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center; padding-top: 10px;"><button type="submit">SUBMIT</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>