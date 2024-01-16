<!-- Modal -->
<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
                <div class="form-group">
                    <label for="f_name">Title</label>
                    <input type="text" name="f_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="l_name">Year released</label>
                    <input type="text" name="l_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">duration</label>
                    <input type="text" name="age" class="form-control">
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name="add_students" value="ADD">
        </div>
        </div>
    </div>
    </div>
</form>