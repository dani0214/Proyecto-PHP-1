<link rel="stylesheet" type="text/css" href="vistas/css/formulario_avanzado.css">
<link rel="stylesheet" type="text/css" href="vistas/css/enlaces.css">
<form action="" method="POST" id="busqueda">
    Campo:
    <select name="campo_busqueda" id="campo_busqueda">
        <option value="0" selected disabled>Seleccione un campo</option>
        <option value="nombre_tarea">Nombre Tarea</option>
        <option value="persona_contacto">Contacto</option>
        <option value="tlf_contacto">Telefono</option>
        <option value="email">E-mail</option>
        <option value="poblacion">Poblacion</option>
        <option value="codigo_postal">Codigo Postal</option>
        <option value="provincia">Provincia</option>
        <option value="estado">Estado</option>
        <option value="fecha_creacion">Fecha Creacion</option>
        <option value="operario_encargado">Operario</option>
        <option value="fecha_realizacion">Fecha Realizacion</option>
    </select>
    &nbsp;&nbsp;&nbsp;
    Criterio:
    <select name="criterio_busqueda" id="criterio_busqueda">
        <option value="0" selected disabled>Seleccione un campo</option>
        <option value="<">Menor</option>
        <option value="=">Igual</option>
        <option value=">">Mayor</option>
    </select>
    &nbsp;&nbsp;&nbsp;
    Valor:
    <input type="text" name="valor_busqueda" id="valor_busqueda">
    <input type="submit">
</html>