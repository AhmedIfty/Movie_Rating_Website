<!-- Modal form for anime -->
<form action="admin_insert_anime.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
                <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year_r">Year Released</label>
                    <input type="text" name="year_r" class="form-control">
                </div>
                <!-- <div class="form-group">
                    <label for="duration">Duration [for movies in hr:min:sec]</label>
                    <input type="text" name="duration" class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="type">Type of content [type 'anime']</label>
                    <input type="text" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label for="season">Num of Seasons</label>
                    <input type="text" name="season" class="form-control">
                </div>
                <div class="form-group">
                    <label for="genre">Genre [separate using ',']</label>
                    <input type="text" name="genre_str" class="form-control">
                </div>
                <div class="form-group">
                    <label for="trailer">Trailer link</label>
                    <input type="text" name="trailer" class="form-control">
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