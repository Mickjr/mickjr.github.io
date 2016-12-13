<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NFL Standings
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nfl-ot1/seasontd/2016/standings.json?api_key=794xyx4vedg34tvcjdsshke5');


// convert the string to a json object
$jfo = json_decode($json_file);


// exit(print_r($afc_east_teams = $jfo->conferences[0]->divisions[0]->teams));


// AFC East Conference 
$afc_east = $jfo->conferences[0]->divisions[0]->name;

// AFC East Conference Teams
$afc_east_teams = $jfo->conferences[0]->divisions[0]->teams;


// AFC North Conference 
$afc_north = $jfo->conferences[0]->divisions[1]->name;

// AFC North Conference Teams
$afc_north_teams = $jfo->conferences[0]->divisions[1]->teams;


// AFC South Conference 
$afc_south = $jfo->conferences[0]->divisions[2]->name;

// AFC South Conference Teams
$afc_south_teams = $jfo->conferences[0]->divisions[2]->teams;


// AFC West Conference 
$afc_west = $jfo->conferences[0]->divisions[3]->name;

// AFC West Conference Teams
$afc_west_teams = $jfo->conferences[0]->divisions[3]->teams;



// NFC East Conference 
$nfc_east = $jfo->conferences[1]->divisions[0]->name;

// NFC East Conference Teams
$nfc_east_teams = $jfo->conferences[1]->divisions[0]->teams;


// NFC North Conference 
$nfc_north = $jfo->conferences[1]->divisions[1]->name;

// NFC North Conference Teams
$nfc_north_teams = $jfo->conferences[1]->divisions[1]->teams;


// NFC South Conference 
$nfc_south = $jfo->conferences[1]->divisions[2]->name;

// NFC South Conference Teams
$nfc_south_teams = $jfo->conferences[1]->divisions[2]->teams;


// NFC West Conference 
$nfc_west = $jfo->conferences[1]->divisions[3]->name;

// NFC West Conference Teams
$nfc_west_teams = $jfo->conferences[1]->divisions[3]->teams;


?>


<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>NFL Application</title>
   
</head>

<body>
    <div class="container">

        <div class="header">
  
        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $afc_east; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_east_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $afc_west; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_west_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $afc_north; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_north_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $afc_south; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($afc_south_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $nfc_east; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_east_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $nfc_west; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            
            foreach ($nfc_west_teams as $post) {

                if ($post->alias == 'ARI') {
                    
                    $post->alias = 'ARZ';

                }elseif ($post->alias == 'LA') {
                    
                    $post->alias = 'LAR';
                }



            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $nfc_north; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_north_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>

        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title"><?php echo $nfc_south; ?></h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($nfc_south_teams as $post) {
            ?>
                <thead>

                    <tr>
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NFL/teams/logos/".$post->alias.".png alt='".$post->alias."' style='width:60px;height:50px;'> ";?></td>
                        <td><?php echo $post->wins; ?></td>
                        <td><?php echo $post->losses; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>

            </table>
        </div>


        </div><!-- content -->

        <div class="footer">
        <a href="#"></a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>