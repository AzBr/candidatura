<div class="box_propostas">
    <?php
        foreach($propostas as $proposta){
            $data["proposta"] = $proposta;
            $this->load->view("propostas/box_preview", $data);
        }
    ?>
    <div class="text-center">
        <ul class="pagination pagination-sm">
            <li class="<?php
                if($pagina == 1){
                    echo "disabled";
                }
            ?>"><a href="/propostas/?p=1">&laquo;</a></li>

            <?php
                for($i = $pagina - 4; $i < $pagina; $i++){
                    if($i >= 1){
                        echo "<li><a href=\"/propostas/?p=";
                        echo $i;
                        echo "\">";
                        echo $i;
                        echo "</a></li>";
                    }
                }
            ?>
            <li class="active"><a href="/propostas/?p=<?php echo $pagina;?>"><?php echo $pagina;?></a></li>
            <?php
            for($i = $pagina + 1; $i < $pagina +4 and $i <= $paginas; $i++){
                echo "<li><a href=\"/propostas/?p=";
                echo $i;
                echo "\">";
                echo $i;
                echo "</a></li>";
            }
            ?>
            <li><a href="/propostas/?p=<?php echo $paginas?>">&raquo;</a></li>
        </ul>
    </div>
</div>
