<?php
    include('elements/header.php');
?>
    <main>
        <form action="create_anounce.php" method="post">
            <label for="" class="label_create">Anounce context:</label><br>
            <input class="input_create" type="text" name="ANOUNCE_CONTEXT"><br>
            <label for="" class="label_create">Anounce text:</label><br>
            <textarea class="input_create" name="ANOUNCE_TEXT" id="" cols="100" rows="20"></textarea><br>
            <button id="button" type="submit">Submit</button>
        </form>
    </main>
</body>
</html>