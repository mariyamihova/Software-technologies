<form>
    <div> Name:</div><input type="text" name="person"/>
    <div>Age:</div><input type="number" name="age"/>
    <div>Town:</div>
    <select name="townId">
        <option value="1">Sofia</option>
        <option value="1">Varna</option>
        <option value="1">Plovdiv</option>
    </select>
    <div><input type="submit"/></div>
</form>
<?php var_dump($_GET); ?>
