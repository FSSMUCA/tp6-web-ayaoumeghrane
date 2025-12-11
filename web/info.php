<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #0066ff;
        }

        p {
            font-size: 1rem;
        }

        .result {
            background: #eef7ff;
            padding: 10px;
            border-radius: 6px;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Informations PHP</h2>

    <?php
        // --- Variables chaînes de caractères ---
        $etablissement = "Institut Supérieur de Technologie";
        $module = "Développement Web";
        $annee = "2024/2025";

        // --- Variables numériques ---
        $a = 15;
        $b = 7;

        // --- Opérations ---
        $addition = $a + $b;
        $multiplication = $a * $b;
        $soustraction = $a - $b;
        $division = $a / $b;
    ?>

    <h3>Informations générales</h3>
    <p><strong>Nom de l’établissement :</strong> <?php echo $etablissement; ?></p>
    <p><strong>Module :</strong> <?php echo $module; ?></p>
    <p><strong>Année :</strong> <?php echo $annee; ?></p>

    <h3>Variables numériques</h3>
    <p>Valeur de a : <?php echo $a; ?></p>
    <p>Valeur de b : <?php echo $b; ?></p>

    <h3>Résultats des opérations</h3>

    <div class="result">Addition (a + b) = <?php echo $addition; ?></div>
    <div class="result">Multiplication (a * b) = <?php echo $multiplication; ?></div>
    <div class="result">Soustraction (a - b) = <?php echo $soustraction; ?></div>
    <div class="result">Division (a / b) = <?php echo number_format($division, 2); ?></div>

</div>

</body>
</html>
