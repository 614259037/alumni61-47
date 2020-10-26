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
  <img src="<?php echo base_url('public/1.png') ?>" alt="" width="100%" height="450" srcset="">

  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <!---row1-->
        <br>
        <h3>ข้อมูลศิษย์เก่า</h3>
        <br>
        <br>
        
        <?php
        foreach ($user_select->result_array() as $show)
        ?>
        <img src="../../../img/<?php echo $show['img'] ?>" width="250" height="250" srcset="">
        <form action="<?php echo site_url('Control/edit') . "/edit?user_id=" . $this->session->userdata('p_id') . "" ?>" method="POST">

      </div>
      <div class="col-md-7">
        <!---row2-->
        <br>
        <h3>ข้อมูลส่วนตัว</h3>
        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">รหัสผ่าน</label>
            <input type="text" class="form-control" id="Input3" placeholder="รหัสผ่าน" name="c_pass" value="<?php echo $show['c_pass'] ?>" required>
          </div>
        </div>
        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input2" style="margin-bottom: 0">คำนำหน้า</label>
            <input type="text" class="form-control" id="Input2" name="fname" value="<?php echo $show['fname'] ?>" readonly>

          </div>
        </div>
        <!--คำนำ-->
        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อ</label>
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อ" name="cname" value="<?php echo $show['cname'] ?>" >
          </div>
        </div>
        <!--ชื่อ-->
        <div class="form-group col-md-4" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">นามสกุล</label>
            <input type="text" class="form-control" id="Input3" placeholder="นามสกุล" name="lname" value="<?php echo $show['lname'] ?>" >
          </div>
        </div>
        <!--นามสกุล-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อเล่น</label>
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อเล่น" name="nname" value="<?php echo $show['nname'] ?>" >
          </div>
        </div>
        <!---ชื่อเล่น-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">วันเกิด</label>
            <input type="date" class="form-control" id="Input3" name="dates" value="<?php echo $show['dates'] ?>" >
          </div>
        </div>
        <!--วันเกิด-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input2" style="margin-bottom: 0">ปีจบการศึกษา</label>
            <input type="text" class="form-control" id="Input2" name="years" value="<?php echo $show['years'] ?>" >
          </div>
        </div>
        <!--ปีจบการศึกษา-->
        <div class="form-group col-md-12" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่ปัจจุบัน</label><br>
            <textarea name="caddress" id="form-control" rows="10" cols="60" ><?php echo $show['caddress'] ?></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <input type="text" class="form-control" id="Input2" name="province" value="<?php echo $show['province'] ?>" >

          </div>
        </div>
        <!--จังหวัด-->

        <hr width=100% size=3>


        <h3>ข้อมูลการทำงาน</h3>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ตำแหน่งงาน</label>
            <input type="text" class="form-control" id="form-control" placeholder="ตำแหน่งงาน" name="joblv" value="<?php echo $show['joblv'] ?>" >
          </div>
        </div>
        <!--ตำแหน่งงาน-->

        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อบริษัท</label>
            <input type="text" class="form-control" id="form-control" placeholder="ชื่อบริษัท" name="jobname" value="<?php echo $show['jobname'] ?>" >
          </div>
        </div>
        <!--ชื่อบริษัท-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12 " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่บริษัท</label><br>
            <textarea name="jobaddress" id="form-control" rows="10" cols="60" ><?php echo $show['jobaddress'] ?></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <input type="text" class="form-control" id="Input2" name="jobprov" value="<?php echo $show['jobprov'] ?>" >

          </div>
        </div>
        <!--จังหวัด-->


        <hr width=100% size=3>
        <h3>ข้อมูลติดต่อ</h3>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" id="form-control" placeholder="เบอร์โทรศัพท์บ้าน" name="hphone" value="<?php echo $show['hphone'] ?>" >
          </div>
        </div>
        <!--เบอร์โทรศัพท์-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">อีเมล์</label>
            <input type="email" class="form-control" id="form-control" placeholder="อีเมล์" name="email" value="<?php echo $show['email'] ?>" >
          </div>
        </div>
        <!--อีเมล-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">facebook</label>
            <input type="text" class="form-control" id="form-control" placeholder="facebook" name="facebook" value="<?php echo $show['facebook'] ?>" >
          </div>
        </div>
        <!--facebook-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" align="center">บันทึก</a>
          </div>
        </div>
        <!--facebook-->
      </div>
      <!---Endrow2-->

    </div>

  </div>
  </form>
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