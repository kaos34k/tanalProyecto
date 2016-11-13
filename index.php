Tu fecha de nacimiento: 
    <form class="form-edad">          
            <select name="dia">'; 
           <?php  $i = 1; 
            while( $i <= 31) {
                echo '<option>'.$i++.'</option>';
            }  ?> 
            </select> 
                <select name="mes"> 
                    <option value="1">Enero</option> 
                    <option value="2">Febrero</option> 
                    <option value="3">Marzo</option> 
                    <option value="4">Abril</option> 
                    <option value="5">Mayo</option> 
                    <option value="6">Junio</option> 
                    <option value="7">Julio</option> 
                    <option value="8">Agosto</option> 
                    <option value="9">Septiembre</option> 
                    <option value="10">Octubre</option> 
                    <option value="11">Noviembre</option> 
                    <option value="12">Diciembre</option> 
                </select> 
            <select name="anio">'; 
            <?php 
                $o = 1960;
                while($o <= date("Y")){ 
                    echo '<option>'.$o++.'</option>';
                } 
            ?>     
            </select> 
        </form>
        <button class="validar-edad-btn">Enviar</button> 
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script  src="./mais.js"></script>
