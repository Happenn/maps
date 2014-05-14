<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��� ������");
$APPLICATION->AddChainItem("��� ������");
?>
<section class='decorated_head'>
    <div class="image align_center">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/map_logo.png" alt=""/>
    </div>

    <h1 class='align_center blue'>��� ������</h1>

    <p>
        �� �������, ������ ��������, ��� ����� ������ ��������������� ������������ ������ ������ ���� � ������������ ������� �������� ������, ������������� �������� ������������. ���������� ���� ������� ��������� ��������, ��� ���������� �������������� ���� � ����� ����� ���������� ������� �� ��� ������� ��������������� ������� �����������. ������� ����������� ������� �������, � ����� ���������� � �������� ��������� ������������ �������� ����� (������������) ������� � ������������ �������, ���������� ����������� � ��������� ������������ �����. ������� ����������� ������� �������, � ����� ����� ������ ��������������� ������������ ��������� ������� �������� ������ ��������. ������������ �������� ����������, ��� ����������� ��������� ����������� ������������ ����� ���������� ����������� �������� ������ ��������.
    </p>

    <ul class="head_menu table_emulate interactive">
        <li class='cell_emulate'><a href='#' data-type='1'>�������</a></li>
        <li class='cell_emulate'><a href='#' data-type='2'>����������� �������������</a></li>
        <li class='cell_emulate'><a href='#' data-type='3'>��������� ��������</a></li>
        <li class='cell_emulate'><a href='#' data-type='4'>�������� �������</a></li>
        <li class='cell_emulate'><a href='#' data-type='5'>��������� ������</a></li>
        <li class='cell_emulate'><a href='#' data-type='all'>���</a></li>
    </ul>

    <div class="shadow_line blue top"></div>

</section>
<section class='main_wrapper'>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "magasines", Array(
	"IBLOCK_TYPE" => "magasines_s2",	// ��� ���������
	"IBLOCK_ID" => "24",	// ��������
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
	"SECTION_CODE" => "",	// ��� �������
	"SECTION_USER_FIELDS" => array(	// �������� �������
		0 => "UF_MAP_POS_TOP",
		1 => "UF_MAP_POS_LEFT",
		2 => "UF_OKRUG_LINK",
		3 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ��������
	"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ���������
	"ELEMENT_SORT_FIELD2" => "name",	// ���� ��� ������ ���������� ���������
	"ELEMENT_SORT_ORDER2" => "asc",	// ������� ������ ���������� ���������
	"FILTER_NAME" => "arrFilter",	// ��� ������� �� ���������� ������� ��� ���������� ���������
	"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
	"SHOW_ALL_WO_SECTION" => "Y",	// ���������� ��� ��������, ���� �� ������ ������
	"HIDE_NOT_AVAILABLE" => "Y",	// �� ���������� ������, ������� ��� �� �������
	"PAGE_ELEMENT_COUNT" => "30",	// ���������� ��������� �� ��������
	"LINE_ELEMENT_COUNT" => "3",	// ���������� ��������� ��������� � ����� ������ �������
	"PROPERTY_CODE" => array(	// ��������
		0 => "EMAILS",
		1 => "ADRESS",
		2 => "YAMAPS_COORDS",
		3 => "SITES",
		4 => "PHONES",
		5 => "TYPE_MARKET",
		6 => "",
	),
	"OFFERS_LIMIT" => "5",	// ������������ ���������� ����������� ��� ������ (0 - ���)
	"ADD_PICT_PROP" => "-",	// �������������� �������� ��������� ������
	"LABEL_PROP" => "-",	// �������� ����� ������
	"PRODUCT_SUBSCRIPTION" => "N",	// ��������� ���������� ��� ������������� �������
	"SHOW_DISCOUNT_PERCENT" => "N",	// ���������� ������� ������
	"SHOW_OLD_PRICE" => "N",	// ���������� ������ ����
	"MESS_BTN_BUY" => "������",	// ����� ������ "������"
	"MESS_BTN_ADD_TO_BASKET" => "� �������",	// ����� ������ "�������� � �������"
	"MESS_BTN_SUBSCRIBE" => "�����������",	// ����� ������ "��������� � �����������"
	"MESS_BTN_DETAIL" => "���������",	// ����� ������ "���������"
	"MESS_NOT_AVAILABLE" => "��� � �������",	// ��������� �� ���������� ������
	"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
	"DETAIL_URL" => "",	// URL, ������� �� �������� � ���������� �������� �������
	"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
	"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
	"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
	"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
	"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
	"DISPLAY_COMPARE" => "N",	// �������� ������ ���������
	"SET_TITLE" => "N",	// ������������� ��������� ��������
	"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
	"PRICE_CODE" => "",	// ��� ����
	"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
	"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
	"PRICE_VAT_INCLUDE" => "N",	// �������� ��� � ����
	"PRODUCT_PROPERTIES" => "",	// �������������� ������
	"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
	"CONVERT_CURRENCY" => "N",	// ���������� ���� � ����� ������
	"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
	"PAGER_TITLE" => "������",	// �������� ���������
	"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
	"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
	"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	),
	false
);?> 
   
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>