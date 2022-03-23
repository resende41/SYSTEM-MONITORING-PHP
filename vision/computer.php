<nav class="modulos">
    <div class="modulo azul">
        <h3>SERVERS</h3>
        <ul>
            <li>
                <a>
                    GOOGLE.COM (8.8.8.8)
                    <?php
                    $google = "8.8.8.8";
                        exec("ping -n 1 $google", $output, $rgoogle);
                        if ($rgoogle == 0)
                            echo "- ONLINE";
                        else
                            echo "- OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a>
                    WINDOWS SERVER (8.8.8.8)
                    <?php
                    $adserver = "192.168.1.251";
                        exec("ping -n 1 $adserver", $output, $radserver);
                        if ($radserver == 0)
                            echo "ONLINE";
                        else
                            echo "OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a>
                    LINUX SERVER (192.168.0.251)
                    <?php
                    $linuxserver = "192.168.0.251";
                        exec("ping -n 1 $linuxserver", $output, $rlinuxserver);
                        if ($rlinuxserver == 0)
                            echo "ONLINE";
                        else
                            echo "OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a>
                    APP SERVER (192.168.1.151)
                    <?php
                    $appserver = "192.168.1.151";
                        exec("ping -n 1 $appserver", $output, $rappserver);
                        if ($rappserver == 0)
                            echo "ONLINE";
                        else
                            echo "OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a>
                    SHAREPOINT SERVER (192.168.1.105)
                    <?php
                    $sharepointserver = "192.168.1.105";
                        exec("ping -n 1 $sharepointserver", $output, $rsharepointserver);
                        if ($rsharepointserver == 0)
                            echo "ONLINE";
                        else
                            echo "OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a>
                    BACKUP SERVER (192.168.1.205)
                    <?php
                    $backupserver = "192.168.1.205";
                        exec("ping -n 1 $backupserver", $output, $rbackupserver);
                        if ($rbackupserver == 0)
                            echo "ONLINE";
                        else
                            echo "OFFLINE";
                    ?>
                </a>
            </li>
        </ul>
    </div>
</nav>