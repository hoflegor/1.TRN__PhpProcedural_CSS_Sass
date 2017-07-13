<form action="pdf.php" method="post" role="form">
    <label>
        <h2>Lotnisko wylotu:</h2>
        <select name="departure">
            <option value="">Select...</option>
            <?php

            require_once ('functions.php');

            airportsSelect();

            ?>
        </select>
    </label>
    <label>
        <h2>Lotnisko przylotu:</h2>
        <select name="arrival">
            <option value="">Select...</option>
            <?php

            airportsSelect();

            ?>
        </select>
    </label>
    <label>
        <h2>Czas startu:</h2>
        <input type="datetime-local" name="startTime" >
    </label>
    <label>
        <h2>Długość lotu w godzinach:</h2>
        <input type="number" name="flightLength" min="0" step="1">
    </label>
    <label>
        <h2>Cena lotu:</h2>
        <input type="number" name="price" min="0" step="0.01">
    </label>
    <hr>
    <input type="submit" value="Wyślij">
</form>