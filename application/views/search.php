<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

    <img src="<?php echo base_url('public/1.png')?>" alt="" width="100%" height="450" srcset="">
    <div class="container">
        <div class="col-md-5">
            <h3>ข้อมูลศิษย์เก่าที่ค้นหา</h3>
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
                <?php
                foreach ($result as $show) { ?>
                    <tr>
                        <?php echo "<td>" . $show->p_id;"</td>"; ?>
                        <?php echo "<td>" . $show->cname."&nbsp;&nbsp".$show->lname;"</td>"; ?>
                        <?php echo "<td>" . $show->years;"</td>"; ?>
                        <td align="center"><a href=<?php echo site_url('Control/show_users') . "/show_user?user_id=" . $show->p_id; "" ?>><input style="color: red" class="b2" name="delete" type="submit" value="ดูประวัติส่วนตัว" /></a></td>
                    </tr>
            </tbody>
            <!-----สินสุดส่วนข้างใน------>
        <?php } ?>
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