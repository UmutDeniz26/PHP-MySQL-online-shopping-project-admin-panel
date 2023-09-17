
<?php

function updateAboutSettings($about_title,$about_motto,$about_content,$about_video,$about_vision,$about_mission,$db)
{
    $setup = $db->prepare(" UPDATE about 
                            SET about_title=:a, about_motto=:b, about_content=:c, 
                                about_video=:d, about_vision=:e, about_mission=:f
                            WHERE about_id=:id               
                        ");
    $update = $setup->execute(
        array(
            "a" => $about_title,
            "b" => $about_motto,
            "c" => $about_content,
            "d" => $about_video,
            "e" => $about_vision,
            "f" => $about_mission,
            "id" => 0
        )
    );
    Header("Location:../production/about-settings.php?updateStatus=$update");
}
include_once('connectdb.php');
if (isset($_POST["save-updated-settings"])) {
    updateAboutSettings($_POST["about_title"],$_POST["about_motto"],$_POST["about_content"],
        $_POST["about_video"],$_POST["about_vision"],$_POST["about_mission"],$db);
} else {
    Header("Location:../production/about-settings.php?updateStatus=0");
}

?>