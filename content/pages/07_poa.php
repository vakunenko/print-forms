<?php
    $pdf = '
    <div class="print-compact">
        <table class="border">
            <tr class="layout">
                <td width="14%"></td>
                <td width="14%"></td>
                <td width="14%"></td>
                <td></td>
                <td width="18%"></td>
            </tr>

            <tr class="text-center">
                <td>Номер доверенности</td>
                <td>Дата выдачи</td>
                <td>Срок действия</td>
                <td>Должность и фамилия лица, которому выдана доверенность</td>
                <td>Расписка в получении доверенности</td>
            </tr>

            <tr class="text-center small">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>

            <tr class="text-center">
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
            </tr>
        </table>

        <table class="border">
            <tr class="layout">
                <td width="35%"></td>
                <td width="25%"></td>
                <td width="40%"></td>
            </tr>

            <tr class="text-center no-border-top">
                <td>Поставщик</td>
                <td>Номер и дата наряда (замещающего наряд документа) или извещения</td>
                <td>Номер и дата документа, подтверждающего выполнение поручения</td>
            </tr>

            <tr class="text-center small">
                <td>6</td>
                <td>7</td>
                <td>8</td>
            </tr>

            <tr class="text-center">
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="text-center">
                <td class="sign">(линия отреза)</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="text-right small">
                    Типовая межотраслевая форма №М-2
                    <br />Утверждена постановлением Госкомстата России от 30.10.97 №71а
                </td>
            </tr>
        </table>

        <table>
            <tr class="layout">
                <td width="15%"></td>
                <td></td>
                <td width="6%"></td>
                <td width="9%"></td>
                <td width="12%"></td>
            </tr>

            <tr>
                <td colspan="4"></td>
                <td class="border text-center">коды</td>
            </tr>

            <tr>
                <td rowspan="2" class="text-right">Организация</td>
                <td rowspan="2"><span class="data">XXXX</span></td>
                <td colspan="2" class="text-right">Форма по ОКУД</td>
                <td class="border-bold text-center b">0315001</td>
            </tr>

            <tr>
                <td></td>
                <td class="text-right">по ОКПО</td>
                <td class="border-bold text-center b"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="2" class="sign">(наименование организации)</td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td></td>
                <td width="44%"></td>
                <td width="21%"></td>
            </tr>

            <tr>
                <td class="text-right h2">ДОВЕРЕННОСТЬ №</td>
                <td class="border-bottom h2"><span class="data">XXXX</span></td>
                <td></td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="35%"></td>
                <td width="22%"></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-right">Дата выдачи:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-right">Деверенность действительна по:</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td></td>
            </tr>
        </table>

        <br />

        <table>
            <tr>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td class="sign">(наименование потребителя и его адрес)</td>
            </tr>
            <tr>
                <td><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td class="sign">(наименование плательщика и его адрес)</td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="25%"></td>
                <td width="20%"></td>
                <td width="3%"></td>
                <td width="30%"></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-right">Счет №</td>
                <td colspan="4"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="4" class="sign">(наименование банка)</td>
            </tr>

            <tr>
                <td class="text-right">Доверенность выдана</td>
                <td><span class="data">XXXX</span></td>
                <td></td>
                <td><span class="data">XXXX</span></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="sign">(должность)</td>
                <td></td>
                <td class="sign">(фамилия, имя, отчество)</td>
                <td></td>
            </tr>

            <tr>
                <td class="text-right">Паспорт: серия</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td class="text-center">№</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td></td>
            </tr>

            <tr>
                <td class="text-right">Кем выдан</td>
                <td colspan="4" class="border-bottom"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td class="text-right">Дата выдачи</td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td colspan="3"></td>
            </tr>

            <tr>
                <td class="text-right">На получение от</td>
                <td colspan="4"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="4" class="sign">(наименование поставщика)</td>
            </tr>

            <tr>
                <td class="text-right">Материальных ценностей по</td>
                <td colspan="4"><span class="data">XXXX</span></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="4" class="sign">(наименование, номер и дата документа)</td>
            </tr>

            <tr>
                <td colspan="5" class="border-bottom">&nbsp;</td>
            </tr>
        </table>

        <br />

        <table>
            <tr>
                <td class="text-center b">Перечень товарно-материальных ценностей, подлежащих получению</td>
            </tr>

            <tr>
                <td class="divider"></td>
            </tr>
        </table>

        <table class="border">
            <tr class="layout">
                <td width="7%"></td>
                <td></td>
                <td width="10%"></td>
                <td width="35%"></td>
            </tr>

            <tr class="text-center">
                <td>Номер по порядку</td>
                <td>Материальные ценности</td>
                <td>Единица измерения</td>
                <td>Количество (прописью)</td>
            </tr>

            <tr class="text-center small">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>

            <tr>
                <td class="text-center"><span class="data">1</span></td>
                <td><span class="data">XXXX</span></td>
                <td class="text-center"><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
            </tr>
        </table>

        <br />

        <table>
            <tr class="layout">
                <td width="18%"></td>
                <td width="18%"></td>
                <td width="1%"></td>
                <td width="30%"></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="2">Подпись лица, получившего доверенность</td>
                <td></td>
                <td class="border-bottom"></td>
                <td>удостоверяем</td>
            </tr>

            <tr>
                <td><br /></td>
            </tr>

            <tr>
                <td>Руководитель</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
                <td></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center small">М.П.</td>
                <td colspan="3"></td>
            </tr>

            <tr>
                <td>Главный бухгалтер</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(расшифровка подписи)</td>
                <td></td>
            </tr>
        </table>
    </div>
    ';

    $content = str_replace('{$pdf}', $pdf, $html);

    $mpdf->AddPage('P');
    $mpdf->WriteHTML($content, 2);
