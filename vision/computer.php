<DOCTYPE html>
<nav class="modulos">
    <div class="modulo azul">
        <h3>INTERNAL SERVERS</h3>
        <ul>
            <li>
                <a class="server">
                    <?php
                    $servers = array(
                        "192.168.1.251" => "WINDOWS SERVER",
                        "192.168.1.151" => "APP SERVER",
                        "192.168.1.105" => "SHAREPOINT SERVER",
                        "192.168.1.205" => "BACKUP"
                    );
                    asort($servers);
                    
                    foreach($servers as $ip => $site){
                        $comando = "ping -n 1 $ip";
                        $output = shell_exec($comando);
                        echo "<td>".$site." - ".$ip." - "."STATUS:";
                        if (mb_strpos($output, 'bytes=') !== false)
                            echo "<b> ONLINE</b>"."<br>";
                        else
                            echo " OFFLINE"."<br>";
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>
    <div class="modulo verde">
        <h3>EXTERNAL SERVERS</h3>
        <ul>
            <li>
                <a class="server">
                    <?php
                    $servers = array(
                        "8.8.8.8" => "GOOGLE"
                    );
                    asort($servers);
                    
                    foreach($servers as $ip => $site){
                        $comando = "ping -n 1 $ip";
                        $output = shell_exec($comando);
                        echo "<td>".$site." - ".$ip." - "."STATUS:";
                        if (mb_strpos($output, 'bytes=') !== false)
                            echo "<b> ONLINE</b>"."<br>";
                        else
                            echo " OFFLINE"."<br>";
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
</html>