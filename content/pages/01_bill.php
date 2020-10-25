<?php
    $pdf = '
    <div class="print">
        <table>
            <tr>
                <td class="small">Внимание! Оплата данного счёта означает согласие с условиями поставки товара или оказания услуг. Уведомление об оплате обязательно, в противном случае не гарантируется наличие товара на складе. Товар отпускается по факту прихода денег на р/с Поставщика.</td>
            </tr>

            <tr>
                <td class="divider"></td>
            </tr>

            <tr>
                <td class="small">Образец заполнения платежного поручения.</td>
            </tr>

            <tr>
                <td class="divider"></td>
            </tr>
        </table>

        <table class="border">
            <tr class="layout">
                <td width="10%"></td>
                <td width="20%"></td>
                <td width="10%"></td>
                <td width="20%"></td>
                <td width="10%"></td>
                <td width="30%"></td>
            </tr>

            <tr>
                <td rowspan="2" colspan="4"><span class="data">XXXX</span>
                <br /><br /><span class="small">Банк получателя</span></td>
                <td>БИК</td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>Сч. №</td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td>ИНН</td>
                <td><span class="data">XXXX</span></td>
                <td>КПП</td>
                <td><span class="data">XXXX</span></td>
                <td rowspan="2">Сч. №</td>
                <td rowspan="2"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="4"><span class="data">XXXX</span>
                <br /><br /><span class="small">Получатель</span></td>
            </tr>
        </table>

        <br />

        <table>
            <tr>
                <td class="text-center h1">Счёт на оплату №<span class="data">XXXX</span> от <span class="data">XXXX</span> г.</td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="15%"></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-top">Поставщик:</td>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td colspan="2" class="divider"></td>
            </tr>

            <tr>
                <td class="text-top">Покупатель:</td>
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
            <tr class="layout">
                <td></td>
                <td width="10%"></td>
                <td width="20%"></td>
                <td width="1%"></td>
                <td width="30%"></td>
            </tr>

            <tr>
                <td>Генеральный директор</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
            </tr>

            <tr>
                <td colspan="5" class="divider"></td>
            </tr>

            <tr>
                <td>Главный (старший) бухгалтер</td>
                <td class="small text-center">М.П.</td>
                <td></td>
                <td></td>
                <td class="text-center"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
            </tr>
        </table>
    </div>
    ';

    $content = str_replace('{$pdf}', $pdf, $html);

    $mpdf->AddPage('P');
    $mpdf->WriteHTML($content, 2);
