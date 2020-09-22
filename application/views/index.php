<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <img src="./public/1.jpg" alt="" width="1600" height="450" srcset="">
    <div class="container">

        <div class="row">

            <ul class="nav nav-pills">


                    <li class="nav-item" style="float: right;">
                        <a type="button" class="nav-link active btn btn-success" href="login.php">Login</a>
                    </li>
                <li class="nav-item" style="float: right;">
                    <a type="button" class="nav-link active  btn btn-success" href="<?php echo site_url('Welcome/regis');?>/">Register</a>
                </li>
                <li class="nav-item" style="float: right;">
                    <a type="button" class="nav-link active  btn btn-success" href="index.php">Home</a>
                </li>
            </ul>

        </div>
        <div class="col-md-5">
            <h3>ข้อมูลศิษย์เก่า</h3>
        </div>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <!-----ส่วนหัว------>
                <tr>
                    <th class="th-sm">ลำดับ ที่
                    </th>
                    <th class="th-sm">ขื่อ-นามสกุล
                    </th>
                    <th class="th-sm">ปีการศึกษา
                    </th>
                    <th class="th-sm">รายละเอียด
                    </th>
                </tr>
            </thead>
            <!-----สิ้นสุดส่วนหัว------>

                <tbody>

                    <tr>
                        <td>
                            <div align="center"></div>
                        </td>
                        <td>
                            <div align="center"></div>
                        </td>
                        <td>
                            <div align="center"></div>
                        </td>
                        <td align="center"><a href=""><input style="color: red" class="b2" name="delete" type="submit" value="ดูประวัติส่วนตัว" /></a></td>
                    </tr>
                </tbody>
                <!-----สินสุดส่วนข้างใน------>
        </table>
    </div>

    </div>
    <footer style="background-color:rgba(230, 148, 152, 0.973);">
        <br>
        <br>


        <h5 align="center">Copyright © 2012 Nakhon Pathom Rajabhat University. All Rights Reserved.</h5>
        <h5 align="center"> Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand</h5>
        <h5 align="center"> Tel : +6634109300 Fax : +6634261048 E-mail : rajabhat@npru.ac.th</h5>
        <br>
        <br>
    </footer>

</body>

</html>