<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <div class="px-4 py-5 my-5 text-center test">
        <button type="button" id="test-button" class="btn btn-secondary" disabled="disabled" onclick="$('#test-modal').show();">Кнопка</button>
        <div id="test-main-result"></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>