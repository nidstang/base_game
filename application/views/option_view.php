<th scope="col" rowspan="100">
<h3>{opt}</h3><hr></hr>
    <p>{change_lang}</p>
<?php echo form_open('game/opciones/select_idioma') ?>
    <select name="option">
        <option value="english">English</option>
        <option value="spanish">Spanish</option>
    </select>
    <input type="submit" value="{change}" />
<?php echo form_close() ?>
</th>