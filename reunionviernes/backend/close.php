<?php
// Continúo la sesión
session_start();

// Descoloco todas la variables de la sesión
session_unset();

// Destruyo la sesión
session_destroy();

// Doy orden de ir al inicio (redireccionar en frontend (con método de jquery $.ajax))
echo "out";

?> 