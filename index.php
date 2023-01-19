<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Styles pour le bouton de mode sombre */
        #dark-mode-btn {
            position: absolute;
            /* positionne le bouton en haut à droite */
            top: 10px;
            right: 10px;
        }

        /* Styles pour le mode sombre */
        body.dark-mode {
            background-color: #222;
            /* couleur de fond sombre */
            color: #fff;
            /* couleur de texte claire */
        }

        /* Styles pour le mode clair */
        body.light-mode {
            background-color: #fff;
            /* couleur de fond claire */
            color: #222;
            /* couleur de texte sombre */
        }
    </style>
</head>

<body class="light-mode">
    <!-- Bouton pour basculer entre les modes sombre et clair -->
    <button id="dark-mode-btn">
        <i class="fas fa-moon"></i>
    </button>

    <script>
        var darkModeBtn = document.getElementById("dark-mode-btn");
        // Ecoute de l'événement click sur le bouton
        darkModeBtn.addEventListener("click", function() {
            // Récupération de l'élément body
            var body = document.getElementsByTagName("body")[0];
            // Si la classe actuelle est "light-mode", on la remplace par "dark-mode"
            if (body.classList.contains("light-mode")) {
                body.classList.remove("light-mode");
                body.classList.add("dark-mode");
            }
            // Sinon, si la classe actuelle est "dark-mode", on la remplace par "light-mode"
            else {
                body.classList.remove("dark-mode");
                body.classList.add("light-mode");
            }
        });
    </script>
</body>

</html>