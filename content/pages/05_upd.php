<?php
    $pdf = '
    <div class="print-slim">
        <table>
            <tr class="layout">
                <td width="6%"></td>
                <td width="3%"></td>
                <td width="1%"></td>
                <td width="1%"></td>
                <td width="12%"></td>
                <td width="10%"></td>
                <td width="3%"></td>
                <td width="10%"></td>
                <td width="8%"></td>
                <td></td>
                <td width="3%"></td>
            </tr>

            <tr>
                <td rowspan="3" colspan="3" class="text-top border-bold-right">Универсальный<br />передаточный<br />документ</td>
                <td rowspan="14"></td>
                <td>Счет-фактура №</td>
                <td class="text-center border-bottom"><span class="data">XXXX</span></td>
                <td class="text-center">от</td>
                <td class="text-center border-bottom">&mdash;</td>
                <td>(1)</td>
                <td rowspan="2" colspan="2" class="text-top text-right small">
                    Приложение №1 к постановлению Правительства Российской Федерации от 26 декабря 2011 г. №1137
                    <br />(в редакции постановления Правительства Российской Федерации от 19 августа 2017 г. №981)
                </td>
            </tr>

            <tr>
                <td>Исправление №</td>
                <td class="text-center border-bottom">&mdash;</td>
                <td class="text-center">от</td>
                <td class="text-center border-bottom">&mdash;</td>
                <td>(1а)</td>
            </tr>

            <tr>
                <td colspan="3" class="b">Продавец</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(2)</td>
            </tr>

            <tr>
                <td colspan="3" class="border-bold-right"></td>
                <td colspan="3">Адрес</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(2а)</td>
            </tr>

            <tr>
                <td>Статус:</td>
                <td class="text-center border-bold b"><span class="data">X</span></td>
                <td class="border-bold-right"></td>
                <td colspan="3">ИНН/КПП продавца</td>
                <td class="border-bottom" colspan="3"><span class="data">XXXX</span></td>
                <td>(2б)</td>
            </tr>

            <tr>
                <td colspan="3" class="border-bold-right"></td>
                <td colspan="3">Грузоотправитель и его адрес:</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(3)</td>
            </tr>

            <tr>
                <td rowspan="8" colspan="3" class="border-bold-right text-top">1 &ndash; счет-фактура и передаточный документ (акт)<br />2 &ndash; передаточный документ (акт)</td>
                <td colspan="3">Грузополучатель и его адрес:</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(4)</td>
            </tr>

            <tr>
                <td colspan="3">К платежно-расчетному документу №</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(5)</td>
            </tr>

            <tr>
                <td colspan="3" class="b">Покупатель</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6)</td>
            </tr>

            <tr>
                <td colspan="3">Адрес</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6а)</td>
            </tr>

            <tr>
                <td colspan="3">ИНН/КПП покупателя</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(6б)</td>
            </tr>

            <tr>
                <td colspan="3">Валюта: наименование, код</td>
                <td colspan="3" class="border-bottom"><span class="data">XXXX</span></td>
                <td>(7)</td>
            </tr>

            <tr>
                <td colspan="5">Идентификатор государственного контракта, договора, (соглашения) (при наличии)</td>
                <td class="border-bottom"></td>
                <td>(8)</td>
            </tr>

            <tr>
                <td colspan="7" class="divider"></td>
            </tr>
        </table>

        <table class="border">
            <tr class="layout">
                <td width="3%"></td>
                <td width="7%"></td>
                <td></td>
                <td width="4%"></td>
                <td width="4%"></td>
                <td width="6%"></td>
                <td width="5%"></td>
                <td width="6%"></td>
                <td width="8%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="6%"></td>
                <td width="8%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="7%"></td>
            </tr>

            <tr class="text-center">
                <td rowspan="2">№<br />П/П</td>
                <td rowspan="2" class="border-bold-right">Код товара/<br />работ, услуг</td>
                <td rowspan="2">Наименование товара (описание выполненных работ, оказанных услуг), имущественного права</td>
                <td rowspan="2">Код<br />вида това-<br />ра</td>
                <td colspan="2">Единица измерения</td>
                <td rowspan="2">Коли-<br />чество<br />(объем)</td>
                <td rowspan="2">Цена (тариф)<br />за единицу изме-<br />рения</td>
                <td rowspan="2">Стоимость товаров (работ, услуг), имуще-<br />ственных прав без налога - всего</td>
                <td rowspan="2">В том числе сумма акциза</td>
                <td rowspan="2">Нало-<br />говая<br />ставка</td>
                <td rowspan="2">Сумма<br />налога, предъяв-<br />ляемая покупа-<br />телю</td>
                <td rowspan="2">Стоимость товаров (работ, услуг), имуще-<br />ственных прав с налогом - всего</td>
                <td colspan="2">Страна происхождения товара</td>
                <td rowspan="2">Регистра-<br />ционный<br />номер<br />таможенной<br />декларации</td>
            </tr>

            <tr class="text-center">
                <td>Код</td>
                <td>Условное обозна-<br />чение (нацио-<br />нальное)</td>
                <td>Цифро-<br />вой код</td>
                <td>Краткое<br />наиме-<br />нование</td>
            </tr>

            <tr class="text-center small">
                <td>А</td>
                <td class="border-bold-right">Б</td>
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
                <td>1</td>
                <td class="border-bold-right text-center">&mdash;</td>
                <td><span class="data">XXXX</span></td>
                <td class="text-center">&mdash;</td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td class="text-center">&mdash;</td>
                <td class="text-center">&mdash;</td>
                <td class="text-center">&mdash;</td>
            </tr>

            <tr>
                <td colspan="2" class="border-bold-right"></td>
                <td colspan="6" class="b">Всего к оплате</td>
                <td><span class="data">XXXX</span></td>
                <td colspan="2" class="text-center b">X</td>
                <td><span class="data">XXXX</span></td>
                <td><span class="data">XXXX</span></td>
                <td colspan="3"></td>
            </tr>
        </table>

        <table>
            <tr class="layout">
                <td></td>
                <td width="1%"></td>
                <td width="19%"></td>
                <td width="10%"></td>
                <td width="1%"></td>
                <td width="14%"></td>
                <td width="1%"></td>
                <td width="19%"></td>
                <td width="10%"></td>
                <td width="1%"></td>
                <td width="14%"></td>
            </tr>

            <tr>
                <td class="border-bold-right"></td>
                <td colspan="10" class="divider"></td>
            </tr>

            <tr>
                <td rowspan="4" class="border-bold-right"></td>
                <td rowspan="4"></td>
                <td>Руководитель организации<br />или иное уполномоченное лицо</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Главный бухгалтер<br />или иное уполномоченное лицо</td>
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
                <td>Индивидуальный предприниматель<br />или иное уполномоченное лицо</td>
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
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
                <td colspan="4" class="sign">(реквизиты свидетельства о государственной регистрации индивидуального предпринимателя)</td>
            </tr>

            <tr>
                <td class="border-bold-right"></td>
                <td colspan="10" class="border-bold-bottom divider"></td>
            </tr>
        </table>

        <table>
            <tr class="layout">
                <td width="20%"></td>
                <td width="9%"></td>
                <td></td>
                <td width="3%"></td>
            </tr>

            <tr>
                <td colspan="4" class="divider"></td>
            </tr>

            <tr>
                <td colspan="2">Основание передачи (сдачи) / получения (приемки)</td>
                <td><span class="data">XXXX</span></td>
                <td>[8]</td>
            </tr>

            <tr>
                <td colspan="2"></td>
                <td class="sign">(договор; доверенность и др.)</td>
                <td></td>
            </tr>

            <tr>
                <td>Данные о транспортировке и грузе</td>
                <td colspan="2"></td>
                <td>[9]</td>
            </tr>

            <tr>
                <td></td>
                <td colspan="2" class="sign">(транспортная накладная, поручение экспедитору, экспедиторская / складская расписка и др. / масса нетто/ брутто груза, если не приведены ссылки на транспортные документы, содержащие эти сведения)</td>
                <td></td>
            </tr>
        </table>

        <table>
            <tr class="layout">
                <td width="17%"></td>
                <td width="1%"></td>
                <td width="12%"></td>
                <td width="1%"></td>
                <td width="15%"></td>
                <td width="3%"></td>
                <td width="1%"></td>
                <td width="1%"></td>
                <td width="17%"></td>
                <td width="1%"></td>
                <td width="12%"></td>
                <td width="1%"></td>
                <td width="15%"></td>
                <td width="3%"></td>
            </tr>

            <tr>
                <td colspan="6">Товар (груз) передал / услуги, результаты работ, права сдал</td>
                <td rowspan="13" class="border-bold-right"></td>
                <td rowspan="13"></td>
                <td colspan="6">Товар (груз) получил / услуги, результаты работ, права принял</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>[10]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>[15]</td>
            </tr>

            <tr>
                <td class="sign">(должность)</td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
                <td class="sign">(должность)</td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
            </tr>

            <tr>
                <td>Дата отгрузки, передачи (сдачи)</td>
                <td></td>
                <td class="border-bottom"><span class="data">XXXX</span></td>
                <td></td>
                <td></td>
                <td>[11]</td>
                <td>Дата получения (приемки)</td>
                <td></td>
                <td class="border-bottom"></td>
                <td></td>
                <td></td>
                <td>[16]</td>
            </tr>

            <tr>
                <td colspan="6">Иные сведения об отгрузке, передаче</td>
                <td colspan="6">Иные сведения о получении, приемке</td>
            </tr>

            <tr>
                <td colspan="5"><br /></td>
                <td>[12]</td>
                <td colspan="5"><br /></td>
                <td>[17]</td>
            </tr>

            <tr>
                <td colspan="5" class="sign">(ссылки на неотъемлемые приложения, сопутствующие документы, иные документы и т.п.)</td>
                <td></td>
                <td colspan="5" class="sign">(информация о наличии/отсутствии претензии; ссылки на неотъемлемые приложения, и другие  документы и т.п.)</td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>[13]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>[18]</td>
            </tr>

            <tr>
                <td class="sign">(должность)</td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
                <td class="sign">(должность)</td>
                <td></td>
                <td class="sign">(подпись)</td>
                <td></td>
                <td class="sign">(ф.и.о.)</td>
                <td></td>
            </tr>

            <tr>
                <td colspan="6">Наименование экономического субъекта – составителя документа (в т.ч. комиссионера / агента)</td>
                <td colspan="6">Наименование экономического субъекта - составителя документа</td>
            </tr>

            <tr>
                <td colspan="5"><span class="data">XXXX</span></td>
                <td>[14]</td>
                <td colspan="5"><span class="data">XXXX</span></td>
                <td>[19]</td>
            </tr>

            <tr>
                <td colspan="5" class="sign">(может не заполняться при проставлении печати в М.П., может быть указан ИНН / КПП)</td>
                <td></td>
                <td colspan="5" class="sign">(может не заполняться при проставлении печати в М.П., может быть указан ИНН / КПП)</td>
                <td></td>
            </tr>

            <tr>
                <td class="text-center small">М.П.</td>
                <td colspan="5"></td>
                <td class="text-center small">М.П.</td>
                <td colspan="5"></td>
            </tr>
        </table>
    </div>
    ';

    $content = str_replace('{$pdf}', $pdf, $html);

    $mpdf->AddPage('L');
    $mpdf->WriteHTML($content, 2);
