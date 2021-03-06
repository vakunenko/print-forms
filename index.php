<?php
    require_once ('vendor/autoload.php');

    $mpdf = new \Mpdf\Mpdf([
        'mode'          => 'utf-8',
        'format'        => 'A4',
        'default_font'  => 'sans-serif',
        'margin_left'   => 12,
        'margin_right'  => 12,
        'margin_top'    => 10,
        'margin_bottom' => 10,
    ]);

    $css  = file_get_contents('framework/styles/css/pdf.min.css');
    $html = file_get_contents('content/templates/pdf.html');

    $mpdf->WriteHTML($css, 1);

    require_once ('content/pages/01_bill.php');              // Счёт
    require_once ('content/pages/02_bill_selfemployer.php'); // Счёт (самозанятый)
    require_once ('content/pages/03_act.php');               // Акт
    require_once ('content/pages/04_act_selfemployer.php');  // Акт (самозанятый)
    require_once ('content/pages/05_upd.php');               // УПД
    require_once ('content/pages/06_sf.php');                // Счёт-фактура
    require_once ('content/pages/07_poa.php');               // Доверенность

    $mpdf->Output('print.pdf', 'I');
