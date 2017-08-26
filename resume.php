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
                        <td>
                            <?php echo round(intval($data[8])/1024); ?>
                        </td>
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
