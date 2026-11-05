<?php

    function calculerTotal($prix, $quantite)
        {
            return $prix * $quantite;
        }

    $total = calculerTotal(100, 3);

    echo "Le total est : " . $total;
    // Test SonarCloud workflow