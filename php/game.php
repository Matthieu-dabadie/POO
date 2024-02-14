<div class="bg-white col-4 bg-opacity-50 m-5 rounded">
    <?php
    echo '<strong>Page du jeu fictif avec récupération des valeurs...</strong><br>';
    echo '<strong>CODE :</strong>';
    echo '<pre><code> foreach ($_GET as $key => $value) {</code></pre>';
    echo '<pre><code>echo "<p>$key: $value</p>";</code></pre>';
    echo '<pre><code>}</code></pre>';
    echo 'Affichage des données : ';
    foreach ($_GET as $key => $value) {
        echo "<p>$key: $value</p>";
    }
    ?>
</div>