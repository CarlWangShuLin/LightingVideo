<?php
$query = "SELECT * ";
$query .= "FROM announcements";
$result = mysqli_query($connection, $query);
//echo $query;
if (!$result) {
    die("query is wrong");
}
?>
<!-- Recent Announcement -->
<div class="recent_videos">
    <div class="card-header" style="font-size: 18px; text-align:center;">
        Announcement
    </div>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <ul class='display'>
        <li>
        <div class='bigsec'>
        <h4>
        <p class='colr'>" . $row["an_name"] . "</p>";
        echo "</h4>
        <p class='txt'>" . $row["an_contents"] . "</p>
        <div class='clear'></div>
        <div class='postedby'>
        <p class='postbytxt'>By: <a href='#'>Lighting Video</a></p>
        </div>
        </div></li></ul> ";
    }
    ?>
</div>