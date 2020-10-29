<?php
    $pdf = '
    <div class="print">
        <table>
            <tr>
                <td class="text-center h1">Акт №<span class="data">XXXX</span> от <span class="data">XXXX</span> г.</td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="15%"></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-top">Исполнитель:</td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="2" class="divider"></td>
            </tr>

            <tr>
                <td class="text-top">Заказчик:</td>
                <td><span class="data">XXXX</span></td>
            </tr>
        </table>

        <br />

        <table class="border">
            <tr class="layout">
                <td width="5%"></td>
                <td></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="12%"></td>
                <td width="12%"></td>
            </tr>

            <tr class="text-center">
                <th>№</th>
                <th>Наименование товара (услуги)</th>
                <th>Кол-во</th>
                <th>Ед.</th>
                <th>Цена</th>
                <th>Сумма</th>
            </tr>

            <tr>
                <td class="text-center">1</td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="5" class="no-border text-right b">Итого:</td>
                <td class="b"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="5" class="no-border text-right b">В том числе НДС:</td>
                <td class="b"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="5" class="no-border text-right b">Всего к оплате:</td>
                <td class="b"><span class="data">XXXX</span></td>
            </tr>
        </table>

        <br />

        <table>
            <tr>
                <td>Всего наименований: <span class="data">XXXX</span>, на сумму <span class="data">XXXX</span> руб.</td>
            </tr>

            <tr>
                <td class="b"><span class="data">XXXX</span></td>
            </tr>
        </table>

        <br />

        <table>
            <tr>
                <td>Выше перечисленные услуги выполнены полностью и в срок. Заказчик не имеет претензий к качеству, объему и срокам оказания услуг.</td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="16%"></td>
                <td width="1%"></td>
                <td width="32%"></td>
                <td width="2%"></td>
                <td width="16%"></td>
                <td width="1%"></td>
                <td width="32%"></td>
            </tr>

            <tr>
                <td class="b">Исполнитель:</td>
                <td></td>
                <td class="b"><span class="data">XXXX</span></td>
                <td></td>
                <td class="b">Заказчик:</td>
                <td></td>
                <td class="b"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>ИНН / КПП:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>ИНН / КПП:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>Юр. адрес:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>Юр. адрес:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>Банк:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>Банк:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>БИК:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>БИК:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>Кр./сч.:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>Кр./сч.:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>Рс./сч.:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td>Рс./сч.:</td>
                <td></td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="7"><br /><br /></td>
            </tr>

            <tr>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td class="small">М.П.</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="small">М.П.</td>
            </tr>
        </table>
    </div>
    ';

    $content = str_replace('{$pdf}', $pdf, $html);

    $mpdf->AddPage('P');
    $mpdf->WriteHTML($content, 2);
