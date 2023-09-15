    <h1>Reserveren</h1>
    <!--de navbar-->

    <h2>Het restaurant is iedere dag van 17:00 - 22:00 geopened. De bar is van 22:00 - 00:00 open.</h2>

    <div class="container">
        <h2>Reserveren</h2>
        <form>
            <div class="form-group">
                <label for="personen">Aantal personen:</label>
                <input type="number" id="personen" name="personen" required>
            </div>
            <div class="form-group">
                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="datum" required>
            </div>
            <div class="form-group">
                <label for="tijd">Tijd:</label>
                <input type="time" id="tijd" name="tijd" required>
            </div>
            <div class="form-group">
                <label for="tafel">Tafel:</label>
                <select id="tafel" name="tafel" required>
                    <option value="Tafel 1">Tafel 1</option>
                    <option value="Tafel 2">Tafel 2</option>
                    <option value="Tafel 3">Tafel 3</option>
                    <option value="Tafel 4">Tafel 4</option>
                </select>
            </div>
            <button type="submit">Reserveren</button>
        </form>
    </div>
