<?php

function sanitizeInput($input) {
    return htmlspecialchars($input);
};

function upperCaseInput ($input)
{
return strtoupper($input);
};



?>