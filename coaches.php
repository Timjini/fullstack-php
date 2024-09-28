<?php
require('controllers/CoachController.php');

$coachController = new CoachController();

$coaches = $coachController->index();

?>

<div>
    <?php foreach ($coaches as $coach) { ?>
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="public/<?php echo $coach['image']; ?>" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><?php echo $coach['full_name']; ?></h5>
                <p class="mb-3 font-normal text-gray-700 "><?php echo $coach['position']; ?></p>
            </div>
        </a>
    <?php } ?>
</div>