<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="style.css" />
            <title>Hack::Ardennes - Metrology</title>
            <meta http-equiv="refresh" content="30; URL=https://metrology.hackardennes.com/team01">
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
            <section class="gg-metrology-data">
                <?php
                    $csv = array_map('str_getcsv', file("../metrologie/metriques.csv"));
                    $data = str_getcsv($csv[0][0], ";");
                    $power = str_getcsv($csv[1][0], ";");
                ?>
                <table>
                    <tr>
                        <th>
                        </th>
                        <th>
                            <a href="../team01/">Give'n Care</a>
                        </th>
                        <th>
                            <a href="../team02/">PotoOuTay</a>
                        </th>
                        <th>
                            <a href="../team04/">Fluid Flow</a>
                        </th>
                        <th>
                            <a href="../team05/">Hackathor</a>
                        </th>
                        <th>
                            <a href="../team06/">Les Sardines</a>
                        </th>
                        <th>
                            <a href="../staff/">Staff</a>
                        </th>
                        <th>
                            <a href="..">Total</a>
                        </th>
                    </tr>
                    <tr>
                        <td class="first">
                            Data (Mb)
                        </td>
                        <td>
                            <?php echo round(intval($data[0])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[1])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[2])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[4])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[5])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[6])/1024); ?>
                        </td>
                        <td>
                            <?php echo round(intval($data[7])/1024); ?>
                        </td>
                        <!--
                        <td>
                            <?php echo round(intval($data[8])/1024); ?>
                        </td>
                        -->
                    </tr>
                    <tr>
                        <td class="first">
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
            </section>
            <section>
                <h1>Consommation totale</h1>
            </section>
            <section class="gg-metrology">
                <img src="../metrologie/puissance_total-day.png" width="">
                <img src="../metrologie/trafic_total-day.png"  width="">
            </section>
        </body>
    </html>
