<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/month_view.css" />
    <title>Document</title>
</head>
<header>
      <div id="navbar" style="z-index: 10">
        <a href="index.php">Home</a>
        <a href="month_view.php">Month View</a>
        <a href="year_view.php">Year View</a>
        <a href="stats.php">Statistics</a>
        <a href="about.php">About</a>        
        <!-- <a href=""></a> -->
        <button
          onclick="window.location.href='https://github.com/andrewlapointe';"
          class="btn"
          style="z-index: 12"
        >
          GitHub
        </button>
      </div>
</header>
<body>
    <div class="flex-container">
        <div class="grid-row">
            <?php
                for ($column = 0; $column <= 6; $column++) {
                    echo "<p class='grid-element'>The number is:$column</p>";
                }
            ?>
        </div>
        <div class="grid-row">
            <?php
                for ($column = 0; $column <= 6; $column++) {
                    echo "<p class='grid-element'>The number is:$column</p>";
                }
            ?>
        </div>
        <div class="grid-row">
            <?php
                for ($column = 0; $column <= 6; $column++) {
                    echo "<p class='grid-element'>The number is:$column</p>";
                }
            ?>
        </div>
        <div class="grid-row">
            <?php
                for ($column = 0; $column <= 6; $column++) {
                    echo "<p class='grid-element'>The number is:$column</p>";
                }
            ?>
        </div>
        <div class="grid-row">
            <?php
                for ($column = 0; $column <= 6; $column++) {
                    echo "<p class='grid-element'>The number is:$column</p>";
                }
            ?>
        </div>

    </div>

</body>
</html>


