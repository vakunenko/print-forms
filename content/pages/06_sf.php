<?php
    $pdf = '
    <div class="print-compact">
        <table>
            <tr>
                <td class="text-right small">
                    Приложение № 1
                    <br />к постановлению Правительства Российской Федерации от 26 декабря 2011 г. №1137
                    <br />(в ред. Постановления Правительства РФ от 19.08.2017 №981)
                </td>
            </tr>
        </table>

        <table>
            <tr class="layout">
                <td width="27%"></td>
                <td></td>
                <td width="3%"></td>
            </tr>

            <tr>
                <td colspan="2" class="h2">Счет-фактура №<span class="data">XXXX</span> от <span class="data">XXXX</span></td>
                <td>(1)</td>
            </tr>

            <tr>
                <td colspan="2" class="h2">Исправление № &mdash; от &mdash;</td>
                <td>(1а)</td>
            </tr>

            <tr>
                <td colspan=""><br /></td>
            </tr>

            <tr>
                <td>Продавец:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(2)</td>
            </tr>

            <tr>
                <td>Адрес:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(2а)</td>
            </tr>

            <tr>
                <td>ИНН/КПП продавца:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(2б)</td>
            </tr>

            <tr>
                <td>Грузоотправитель и его адрес:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(3)</td>
            </tr>

            <tr>
                <td>Грузополучатель и его адрес:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(4)</td>
            </tr>

            <tr>
                <td>К платежно-расчетным документам:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(5)</td>
            </tr>

            <tr>
                <td>Покупатель:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6)</td>
            </tr>

            <tr>
                <td>Адрес:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6а)</td>
            </tr>

            <tr>
                <td>ИНН/КПП покупателя:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6б)</td>
            </tr>

            <tr>
                <td>Валюта: наименование, код</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td>(7)</td>
            </tr>

            <tr>
                <td>Идентификатор государственного контракта, договора (соглашения) (при наличии)</td>
                <td class="border-bottom text-bottom"><span class="data">XXXX</span></td>
                <td class="text-bottom">(8)</td>
            </tr>
        </table>

        <br />

        <table class="border">
            <tr class="layout">
                <td></td>
                <td width="4%"></td>
                <td width="3%"></td>
                <td width="7%"></td>
                <td width="5%"></td>
                <td width="6%"></td>
                <td width="9%"></td>
                <td width="7%"></td>
                <td width="6%"></td>
                <td width="7%"></td>
                <td width="9%"></td>
                <td width="6%"></td>
                <td width="8%"></td>
                <td width="7%"></td>
            </tr>

            <tr class="text-center">
                <td rowspan="2">Наименование товара (описание<br />выполненных работ, оказанных услуг),<br />имущественного права</td>
                <td rowspan="2">Код<br />вида<br />товара</td>
                <td colspan="2">Единица измерения</td>
                <td rowspan="2">Коли-<br />чество<br />(объем)</td>
                <td rowspan="2">Цена<br />(тариф)<br />за единицу<br />измерения</td>
                <td rowspan="2">Стоимость<br />товаров (работ,<br />услуг),<br />имущественных<br />прав без<br />налога - всего</td>
                <td rowspan="2">В том<br />числе сумма акциза</td>
                <td rowspan="2">Налоговая ставка</td>
                <td rowspan="2">Сумма<br />налога,<br />предъяв-<br />ляемая<br />покупателю</td>
                <td rowspan="2">Стоимость<br />товаров (работ,<br />услуг),<br />имущественных<br />прав с налогом -<br />всего</td>
                <td colspan="2">Страна происхождения<br />товара</td>
                <td rowspan="2">Регистра-<br />ционный<br />номер<br />таможенной декларации</td>
            </tr>

            <tr class="text-center">
                <td>код</td>
                <td>условное<br />обозначе-<br />ние (нацио-<br />нальное)</td>
                <td>цифровой<br />код</td>
                <td>краткое<br />наименование</td>
            </tr>

            <tr class="text-center small">
                <td>1</td>
                <td>1а</td>
                <td>2</td>
                <td>2а</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>10а</td>
                <td>11</td>
            </tr>

            <tr>
                <td><br /></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="6" class="b">Всего к оплате</td>
                <td class="text-center b"><span class="data">XXXX</span></td>
                <td colspan="2" class="text-center b">X</td>
                <td class="text-center b"><span class="data">XXXX</span></td>
                <td class="text-center b"><span class="data">XXXX</span></td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="21%"></td>
                <td width="12%"></td>
                <td width="1%"></td>
                <td width="15%"></td>
                <td width="2%"></td>
                <td width="21%"></td>
                <td width="12%"></td>
                <td width="1%"></td>
                <td width="15%"></td>
            </tr>

            <tr>
                <td>Руководитель организации или иное уполномоченное лицо</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Главный бухгалтер или иное уполномоченное лицо</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
            </tr>

            <tr>
                <td>Индивидуальный предприниматель или иное уполномоченное лицо</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="4"></td>
            </tr>

            <tr>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
                <td colspan="4" class="sign">(реквизиты свидетельства о государственной регистрации индивидуального предпринимателя)</td>
            </tr>
        </table>
    </div>
    ';

    $content = str_replace('{$pdf}', $pdf, $html);

    $mpdf->AddPage('L');
    $mpdf->WriteHTML($content, 2);
