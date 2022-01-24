<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <style type="text/css">
         .{
             margin:0;
             padding: 0;
         } 
         body{
            background-image:url("abc.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family:sans-serif;
            margin-top: 40px;
        }
        h1{
            padding: 5px;
            background-color: rgba(241, 158, 79,0.6);
            color:rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-radius: 10px;
        }
        table{
            width: 100%;
            border-radius: 10px;
            border-width: 0px;
            border-collapse: collapse;
            border-spacing: 0;
            text-align: center;
            overflow: hidden;
            box-shadow: 0 12px 12px rgba(32,32,32,0.3);
        }
        td{
            color: black;
        }
        th{
            border-width: 0px;
            background-color: rgba(241, 158, 79,0.6);
;
        }
      </style>
    <title>Agent Data</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-center">Attendance Details</h1><br>
            <table class="table table-border table-hover table-stripped">
                <tr>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>Phone</th>
                    <th>USN</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Date & Time Of Entry</th>
                    <th>Delete</th>
                </tr>
                <?php 
                include 'conn.php';
                $q="select a.name, a.address, a.phone, a.usn, a.gender, a.dob, t.dtime from student a, time t where a.usn=t.usn";
                $query=mysqli_query($con,$q);
                while($res=mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $res['name']; ?></th>
                    <td><?php echo $res['address']; ?></th>
                    <td><?php echo $res['phone']; ?></th>
                    <td><?php echo $res['usn']; ?></th>
                    <td><?php echo $res['gender']; ?></th>
                    <td><?php echo $res['dob']; ?></th>
                    <td><?php echo $res['dtime']; ?></th>
                    <td><button class="btn-danger btn" name="del"><a href="delete.php?id=<?php echo $res['usn']; ?>" class="text-white">Delete</a></button></td>
                    
                </tr>
             <?php  } ?>

            </table> 
        </div>
    </div>
    
</body>
</html>