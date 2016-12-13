<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : NCAAFB Associated Press Top 25
* http://www.ourlads.com/ncaa-football-depth-charts/
*/


// copy file content into a string var
$json_file = file_get_contents('http://api.sportradar.us/ncaafb-t1/polls/AP25/2016/10/rankings.json?api_key=vdmmregqeetyd9cry962fvq9');


// convert the string to a json object
$jfo = json_decode($json_file);


// Associated Press Top 25 
$ap25 = $jfo->rankings;



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

    <title>NCAAFB Application</title>
   
</head>

<body>
    <div class="container">

        <div class="header">
  
        <div class="content" style="margin-top:20px;">

           
           <h1 class="main_title">Associated Press Top 25</h1>

            <table class="table table-bordered table-striped">

            <?php
            foreach ($ap25 as $post) {

            	if ($post->id == 'BAMA') {
                    
                    $post->id = 'AL';

                }elseif ($post->id == 'MICH') {
                    
                    $post->id = 'MI';

                }elseif ($post->id == 'CLE') {
                    
                    $post->id = 'CLEM';

                }elseif ($post->id == 'WAS') {
                    
                    $post->id = 'WA';

                }elseif ($post->id == 'OSU') {
                    
                    $post->id = 'OHST';

                }elseif ($post->id == 'WIS') {
                    
                    $post->id = 'WI';

                }elseif ($post->id == 'OKL') {
                    
                    $post->id = 'OK';

                }elseif ($post->id == 'WVU') {
                    
                    $post->id = 'WV';

                }elseif ($post->id == 'UTH') {
                    
                    $post->id = 'UTST';

                }elseif ($post->id == 'WMC') {
                    
                    $post->id = 'WM';

                }elseif ($post->id == 'NEB') {
                    
                    $post->id = 'NB';

                }elseif ($post->id == 'PSU') {
                    
                    $post->id = 'PAST';

                }elseif ($post->id == 'COL') {
                    
                    $post->id = 'COS';

                }elseif ($post->id == 'OKS') {
                    
                    $post->id = 'OKST';

                }elseif ($post->id == 'VT') {
                    
                    $post->id = 'VAT';

                }elseif ($post->id == 'BOISE') {
                    
                    $post->id = 'BOIST';

                }elseif ($post->id == 'WST') {
                    
                    $post->id = 'WA';

                }elseif ($post->id == 'STA') {
                    
                    $post->id = 'STAN';

                }elseif ($post->id == 'MSU') {
                    
                    $post->id = 'MIST';

                }elseif ($post->id == 'UGA') {
                    
                    $post->id = 'GA';

                }elseif ($post->id == 'IOW') {
                    
                    $post->id = 'IA';

                }elseif ($post->id == 'MIS') {
                    
                    $post->id = 'OLEMS';

                }elseif ($post->id == 'TEX') {
                    
                    $post->id = 'TX';

                }elseif ($post->id == 'ORE') {
                    
                    $post->id = 'OR';

                }


            ?>
                <thead>

                    <tr>
                    	<th><?php echo $post->rank; ?></th> 
                        <th><?php echo $post->market; ?> <?php echo $post->name; ?></th>
                        <th>Wins</th>
                        <th>losses</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                    	<td></td>
                        <td><?php echo "<img src = http://www.ourlads.com/images/colleges/FBS_".$post->id.".gif alt='".$post->id."' style='width:30px;height:25px;'> ";?></td>
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