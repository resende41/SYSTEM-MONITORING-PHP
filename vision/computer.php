<link rel="stylesheet" href="recursos/css/estilo.css">
<link rel="stylesheet" href="recursos/css/exercicio.css">
<nav class="modulos">
    <div class="modulo azul">
        <h3>INTERNAL SERVERS</h3>
        <ul>
            <li>
                <a>
                    <?php
                    $server = array(
                        "WINDOWS SERVER" => "192.168.1.251",
                        "APP SERVER" => "192.168.1.151",
                        "SHAREPOINT SERVER" => "192.168.1.105"
                    );
                    
                    foreach($server as $site => $ip){
                        $comando = "ping -n 1 $ip";
                        $output = shell_exec($comando);
                        echo "<td>".$site." - ".$ip." - "."STATUS:";
                        if (mb_strpos($output, 'bytes=') !== false)
                            echo "<b style=color:'green', display:list-item;> ONLINE</b>"."<br>";
                        else
                            echo " OFFLINE"."<br>";
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>
</nav>