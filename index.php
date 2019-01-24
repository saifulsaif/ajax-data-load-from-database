<?php 
    include 'db.php';
?>
<html>
    <head>
        <title>
            Ajax
        </title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
       <script>
           $(document).ready(function(){
               var commentCount=2;
               $("btnSubmit").click(function(){
                   alert('work');
                   commentCount = commentCount +2;
                   $("#comments").load("load-comments.php", {
                       commentNewCount:commentCount;
                   });
                   
               });
           });
       </script>
<!--       <script>
           $(document).ready(function() {
    $("#btnSubmit").click(function(){
        alert("button");
    }); 
});
       </script>-->
         
    </head>
    <body>
        <div id="comments" style="background-color:#dcd8d8;">
           <?php
                  $sql = "SELECT * FROM comments limit 2";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                     // output data of each row
                     while($row = $result->fetch_assoc()) {
                         echo "<p>";
                         echo " " . $row["author"]. "</br> " . $row["message"].  "<br/>";
                         echo "</p>";
                     }
                 } else {
                     echo "0 results";
                 }
           ?>
        </div>
        <button id="btnSubmit">See More Comments </button>
    </body>
</html>