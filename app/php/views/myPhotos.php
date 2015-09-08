<?php $userPhotos = $app->getUserPhotos(); ?>
<?php if (count($userPhotos)) : ?>
    <h2>My photos &nbsp;<span class="badge"><?php echo count($userPhotos) ?></span></h2>
    <div class="gallery-thumb">
        <?php foreach ($userPhotos as $photo) : ?>
            <img src="<?php echo './app/photos/' . $photo->userid . '/'. 'thumbs/' . $photo->filepath ?>">
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="alert alert-info" role="alert">You did not submit any photos yet, you should
        <strong><a href="#" data-toggle="modal" data-target="#uploadModal">upload some</a></strong>.
    </div>
<?php endif; ?>
