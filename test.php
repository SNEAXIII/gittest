<?php
echo "Comment tu t'appellesss ?";
$prenom = readline();
if (strtoupper($prenom) == "JUSTE")
{
    echo "Ha ? Tu n'as pas de prénom ?";
}
else
{
    echo "Bonjour $prenom !";
}
