<br><br>
<div class="container">
    <form class="form" method="POST" action="index.php?create&submit">
        <div class="form-floating mb-3">
            <input type="date" <?php if(isset($datum)){echo "value='$datum'";} ?>class="form-control" name="datum" placeholder="Datum">
            <label>Datum</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" list="kunde" name="kunde" placeholder="Kunde" autocomplete="off">
            <label>Kunde</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="startort" list="startort" placeholder="Startort" autocomplete="off">
            <label>Startort</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="zielort" autocomplete="off" list="zielort" placeholder="Zielort">
            <label>Zielort</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="bemerkung" autocomplete="off" placeholder="Bemerkung">
            <label>Bemerkung</label>
        </div>
        <span style="font-size: 20px;">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="richtung" value="2" checked>
                <label class="form-check-label">Hin- und Rückfahrt</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="richtung" value="0">
                <label class="form-check-label">Hinfahrt( stationär )</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="richtung" value="1">
                <label class="form-check-label">Rückfahrt( stationär )</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="rechnung" onclick='trigger()' id="kassenfahrt" value="0" checked>
                <label class="form-check-label">Kassenfahrt</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="rechnung" onclick='trigger()' value="1">
                <label class="form-check-label">Privatrechnung</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="rechnung" onclick='trigger()' value="2">
                <label class="form-check-label">Rechnungsfahrt</label>
            </div><br>
            <div id="befreit">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="befreiung" value="0" checked>
                    <label class="form-check-label">nicht Befreit</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="befreiung" value="1">
                    <label class="form-check-label">Befreit</label>
                </div>
            </div>
        </span><br>
        <button type="submit" class="btn btn-outline-success form-control">Fahrt eintragen</button>
    </form>
</div>
