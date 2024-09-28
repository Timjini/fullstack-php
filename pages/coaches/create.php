<?php require('../../header.php'); ?>

<form action="../../actions/createCoach.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
    <div>
        <label for="uploadedFile">Upload File</label>
        <input type="file" name="uploadedFile">
    </div>
    <div>
        <label for="fullName">Full Name</label>
        <input type="text" name="full_name" />
    </div>
    <div>
        <label for="position">Position</label>
        <input type="text" name="position" />
    </div>
    <div>
        <label for="tags">Tags</label>
        <input type="text" name="tags" />
    </div>
    <button type="submit">Submit</button>
</form>