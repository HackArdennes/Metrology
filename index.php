<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="style.css" />
            <title>Hack::Ardennes - Metrology</title>
            <meta http-equiv="refresh" content="300; URL=https://metrology.hackardennes.com/">
        </head>
        <body>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <header>
                <div class="gg-logo"></div>
                <div class="gg-title"></div>
            </header>
            <section class="gg-statistics">
            </section>
            <section>
                <div class="gg-social">
                    <p>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://metrology.hackardennes.com/" data-text="Metrologie au #hackathon @CabaretVert ! @github #HackCV17 #DD #OSS" data-via="HackArdennes" data-lang="fr" data-size="large">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        &nbsp;
                        <div class="fb-share-button" data-href="http://metrology.hackardennes.com/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmetrology.hackardennes.com%2F&amp;src=sdkpreparse">Partager</a></div>
                        </p>
                </div>

            </section>
            
            <section>
                <div class="gg-metrologydata">
                    <?php

                    $csv = array_map('str_getcsv', file("metrologie/metriques.csv"));

                    $data = str_getcsv($csv[0][0], ";");
                    $power = str_getcsv($csv[1][0], ";");

                    ?>

                    <table style="color:#9BCCEC; border-width:1px; border-style:solid; border-color:black; width:1000px;">
                        <thead>
                            <tr style="text-align:right;">
                                <th>
                                </th>
                                <th>
                                    Team #1
                                </th>
                                <th>
                                    Team #2
                                </th>
                                <th>
                                    Team #3
                                </th>
                                <th>
                                    Team #4
                                </th>
                                <th>
                                    Team #5
                                </th>
                                <th>
                                    Team #6
                                </th>
                                <th>
                                    Staff
                                </th>
                                <th>
                                    Total
                                </th>
                            </tr>
                        </thead>

                        <tr style="text-align:right;">
                            <td>
                                Data (Kb)
                            </td>
                            <td>
                                <?php echo $data[0]; ?>
                            </td>
                            <td>
                                <?php echo $data[1]; ?>
                            </td>
                            <td>
                                <?php echo $data[2]; ?>
                            </td>
                            <td>
                                <?php echo $data[3]; ?>
                            </td>
                            <td>
                                <?php echo $data[4]; ?>
                            </td>
                            <td>
                                <?php echo $data[5]; ?>
                            </td>
                            <td>
                                <?php echo $data[6]; ?>
                            </td>
                            <td>
                                <?php echo $data[7]; ?>
                            </td>
                            <td>
                                <?php echo $data[8]; ?>
                            </td>

                        </tr>

                        <tr style="text-align:right">
                            <td>
                                Power (kWh)
                            </td>
                            <td>
                                <?php echo $power[0]; ?>
                            </td>
                            <td>
                                <?php echo $power[1]; ?>
                            </td>
                            <td>
                                <?php echo $power[2]; ?>
                            </td>
                            <td>
                                <?php echo $power[3]; ?>
                            </td>
                            <td>
                                <?php echo $power[4]; ?>
                            </td>
                            <td>
                                <?php echo $power[5]; ?>
                            </td>
                            <td>
                                <?php echo $power[6]; ?>
                            </td>
                            <td>
                                <?php echo $power[7]; ?>
                            </td>
                            <td>
                                <?php echo $power[8]; ?>
                            </td>

                        </tr>

                    </table>
                </div>
            </section>

            <section class="gg-race">
		        <div class="gg-metrology">
                    <table width="1100px">
                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #1
                            </td>
                            <td>
                                <img src="metrologie/puissance_1-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_1-day.png"  width="">
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #2
                            </td>
                            <td>
                                <img src="metrologie/puissance_2-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_2-day.png" width="">
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #3
                            </td>
                            <td>
                                <img src="metrologie/puissance_3-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_3-day.png" width="">
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #4
                            </td>
                            <td>
                                <img src="metrologie/puissance_4-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_4-day.png" width="">
                            </td>
                       </tr>

                       <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #5
                            </td>
                            <td>
                              <img src="metrologie/puissance_5-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_5-day.png" width="">
                            </td>
                        </tr>

                       <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Team #6
                            </td>
                            <td>
                                <img src="metrologie/puissance_6-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_6-day.png" width="">
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Staff
                            </td>
                            <td>
                                <img src="metrologie/puissance_7-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_7-day.png" width="">
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align:middle;color:#9BCCEC">
                                Total by day
                            </td>
                            <td>
                                <img src="metrologie/puissance_total-day.png" width="">
                            </td>
                            <td>
                                <img src="metrologie/trafic_total-day.png" width="">
                            </td>
                        </tr>

                    </table>
		        </div>
            </section>
            <!--<section class="gg-mountain"></section>-->
        </body>
    </html>
