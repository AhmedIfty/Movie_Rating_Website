
<!-- Modal -->
<form action="insert_rating.php?id=<?php echo $_GET['id'] ?>" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate this content</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
                <!-- <div class="form-group">
                    <label for="rating">Your rating (out of 10)</label>
                    <input type="text" name="rating" class="form-control">
                </div> -->
                
                <div class="form-group">
                    <label for="rating">Your rating (out of 10)</label>
                    <select class="form-select" name="rating" aria-label="Default select example">
                        <!-- <option selected>select rating</option> -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="review" class="form-label">Your review</label>
                    <textarea type="text" class="form-control" name="review" rows="3"></textarea>
                </div>

                <!-- <div class="form-group">
                    <label for="review">Your review</label>
                    <input type="text" name="review" class="form-control">
                </div> -->
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name="add_rating" value="ADD">
        </div>
        </div>
    </div>
    </div>
</form>