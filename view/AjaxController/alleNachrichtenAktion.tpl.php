
            <table id="Nachrichten">
                <?php foreach (array_slice($nachrichten, -20) as $nachricht) { ?>
                    <tr>
                        <td>
                            <?= $nachricht->getPerson()->getName() . ': ' . $nachricht->getText() ?><br>
                        </td>
                    </tr>
                <?php } ?>
            </table>
