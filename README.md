# Print Forms

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

Печатные формы бухгалтерских документов для [mPDF](https://github.com/mpdf/mpdf).

## Использование
Перед началом работы необходимо сделать `composer install` для установки зависимостей.
Шаблоны печатных форм находятся в папке `/content/pages/`, а места заполнения основных данных выделены в блоки `<span class="data">XXXX</span>`.

## Вёрстка и данные
Для проверки вёрстки печатных форм и мест заполнения данных необходимо раскомментировать строки `@import "layout";` и `@import "data";` в файле `/framework/styles/scss/pdf.scss` и заново скомпилировать CSS-файл.

## Список печатных форм документов
- Счёт на оплату
- Счёт на оплату (пример для самозанятых)
- Акт выполненных работ
- Акт выполненных работ (пример для самозанятых)
- Универсальный передаточный документ (УПД)
- Счёт-фактура
- Доверенность (М-2)
