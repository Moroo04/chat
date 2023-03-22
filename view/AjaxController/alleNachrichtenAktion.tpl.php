<table id="Nachrichten">
    <?php foreach (array_slice($nachrichten, -20) as $nachricht) { ?>
        <tr>
            <td>
                <i><b><?= $nachricht->getPerson()->getName() . ': ' ?></b></i>
            </td>
            <td>
                <?= $nachricht->getText() ?><br>
            </td>
        </tr>
    <?php } ?>
</table>