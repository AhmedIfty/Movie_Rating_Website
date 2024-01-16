<!-- Modal -->
<form action="insert_rating.php?id=<?php echo $_GET['id'] ?>" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Rate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body bg-black d-flex justify-content-center">
        <i class="fa fa-star fa-3x" data-index="0"></i>
        <i class="fa fa-star fa-3x" data-index="1"></i>
        <i class="fa fa-star fa-3x" data-index="2"></i>
        <i class="fa fa-star fa-3x" data-index="3"></i>
        <i class="fa fa-star fa-3x" data-index="4"></i>
      </div>

      <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <!-- <input type="submit" class="btn btn-success" name="save" value="save"> -->
        <!-- <button type="button" class="btn btn-primary">Add rating</button> -->
        <input type="submit" class="btn btn-success" name="add_rating" value="ADD">
      </div>
    </div>
  </div>
</div>

</div>

<?php
    if(isset($_POST['add_rating'])){
        $ratedIndex =$conn-> real_escape_string($_POST['ratedIndex']);
        echo $ratedIndex;
        // $u_id =$conn->real_escape_string($_POST['u_id']);
        // $ratedIndex =$conn-> real_escape_string($_POST['ratedIndex']);
        // $ratedIndex++;

        // if($u_id === 0){
        //     $conn->query(query: "INSERT INTO rating (ratedIndex) VALUES ('$ratedIndex')");
        //     $sql = $conn->query(query:"SELECT user_id FROM rating ORDER BY user_id DESC LIMIT 1");
        //     $uData = $sql->fetch_assoc();
        //     $u_id = $uData['user_id'];
        // }else
        // $conn->query(query:"UPDATE rating SET ratedIndex='$ratedIndex' WHERE user_id = '$u_id'");

        // exit(json_encode(array('user_id' => $u_id))); 
    }
?>


<script src="https://kit.fontawesome.com/9305be1178.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    var ratedIndex = -1, u_id = 0;

    $(document).ready(
        function(){
            resetStarColors();

            if(localStorage.getItem('ratedIndex') != null)
                setStars(parseInt(localStorage.getItem('ratedIndex')));

            $('.fa-star').on('click', function(){
                ratedIndex = parseInt($(this).data('index'));
                localStorage.setItem('ratedIndex', ratedIndex);
                saveToTheDB();
            });

            $('.fa-star').mouseover(function (){
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function (){
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        }
    );

    function saveToTheDB(){
        $.ajax({
            url: "rating_modal.php",
            method: "POST",
            dataType: 'json',
            data: {
                save: 1,
                u_id:u_id,
                ratedIndex:ratedIndex
            }, success: function(r){
                u_id = r.u_id;
            }
        });
    }


    function setStars(max){
        for (var i=0; i<= max; i++)
            $('.fa-star:eq('+i+')').css('color', 'gold');
    }
    function resetStarColors(){
       $('.fa-star').css('color','white')
    }
</script>