<div id="uploadModal" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Submit photos</h4>
            </div>
            <div class="modal-body">
                <?php require 'upload.php'; ?>
                <div class="countdown-container">Submit are opened for&nbsp;<div class="countdown submitOpened"></div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="uploadButton" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>