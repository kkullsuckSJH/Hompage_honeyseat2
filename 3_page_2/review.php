<?php

  $conn = mysqli_connect("localhost", "root", "jih32952", "honeyseat", "3307");
  if (!$conn) {
    echo "connect error";
  }
  mysqli_select_db($conn, "honeyseat");
?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
        <!--review board-->
        <div class="container">

          <table class="table table-hover" >
            <thead>
              <tr>
                <th class="col-xs-0.5">글번호</th>
                <th class="col-xs-2">공연장</th>
                <th class="col-xs-1">층</th>
                <th class="col-xs-0.5">좌석번호</th>
                <th class="col-xs-0.5">별점</th>
                <th class="col-xs-4">제목</th>
                <th class="col-xs-1.5">작성자</th>
                <th class="col-xs-2">날짜</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM `review` ORDER BY `review_num` DESC;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  $datatime = explode('',$row['date']);
                  $date = $datetime[0];
                  $time = $datatime[1];
                  if ($date == Date('Y-m-d')){
                    $row['date'] = $time;
                  }
                  else {
                    $row['date'] = $date;
                  }
               ?>
              <tr>
                <td><?php echo $row['review_num'];?></td>
                <td><?php echo $row['audi_name'];?></td>
                <td><?php echo $row['floor'];?></td>
                <td><?php echo $row['audi_seat_num'];?></td>
                <td><?php echo $row['star'];?></td>
                <td><?php echo $row['content'];?></td>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['date'];?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

          <hr/>

          <a class="btn btn-default"></a>
          <div class="jb-center">
            <div class="text-center">
              <ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
              </ul>
            </div>
          </div>

        <script src="js/jquery-3.1.1.js">

        </script>


        <br>
        <br>
        <h2>[좌석번호]</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
              <li>
                <strong>Bootstrap v4</strong>
              </li>
              <li>jQuery</li>
              <li>Font Awesome</li>
              <li>Working contact form with validation</li>
              <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
          <!-- /.row -->
          <hr>

      </div>
    </body>
</html>

  $sql = "INSERT INTO `user`(`user_id`, `user_pw`, `user_name`, `user_email`) VALUES('{$user_id}', '{$user_pw}', '{$user_name}', '{$user_email}');";
  $result = mysqli_query($conn, $sql);
  header('Location: index.html');

  if (! $result) {
    # code...
    echo "query error";
  }
      mysqli_close($conn);
?>
