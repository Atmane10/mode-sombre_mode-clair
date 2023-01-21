<!DOCTYPE html>
<html>

<head>
    <!-- Importation de la bibliothèque Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Importation des feuilles de style pour la page -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        // déclaration de la fonction toggleDarkMode qui permet de basculer entre les modes sombre et clair
        function toggleDarkMode() {
            // Récupération de l'élément body de la page
            var body = document.getElementById("body");
            // Récupération de la valeur de la classe de l'élément body
            var currentClass = body.className;
            // Changement de la classe de l'élément body entre "dark-mode" et "light-mode" en fonction de sa valeur actuelle
            body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
        }
    </script>
</head>

<body id="body" class="light-mode">
    <!-- Élément de conteneur pour aligner les icônes à droite de la page -->
    <div class="navbar-text ml-auto">
        <!-- Lien qui appelle la fonction toggleDarkMode lorsqu'il est cliqué, contenant une icône de lune en noir -->
        <a href="#" onclick="toggleDarkMode()" class="no-underline" style="color: black;"><i class="fas fa-moon"></i></a>
        <!-- Lien qui appelle la fonction toggleDarkMode lorsqu'il est cliqué, contenant une icône de soleil en blanc -->
        <a href="#" onclick="toggleDarkMode()" class="no-underline" style="color: white;"><i class="fas fa-sun"></i></a>
    </div>
</body>

</html>