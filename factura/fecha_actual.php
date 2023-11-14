<?php
?>
<script>
        // Obtener la fecha actual en formato ISO (YYYY-MM-DD)
        var now = new Date();
        var offset = -5 * 60; // Desplazamiento en minutos
        var localTime = new Date(now.getTime() + offset * 60 * 1000);
        var formattedDate = localTime.toISOString().split('T')[0];
        
        // Establecer la fecha mínima para el campo de fecha
        document.getElementById('fecha').min = formattedDate;
</script>

