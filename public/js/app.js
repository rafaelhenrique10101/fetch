$(document).ready(function(){



// CONSTANTES

const DASHBOARD_VIEW = "/admin"
const VARIANCE_VALUE_RECHARGE = 10;
const ALERT_ERROR = "messenger-message message alert error message-error alert-error messenger-will-hide-after messenger-hidden";
const ALERT_SUCCESS = "messenger-message message alert success message-success alert-success messenger-will-hide-after";
const ALERT_INFO = "messenger-message message alert info message-info alert-info messenger-will-hide-after";
const ROUTE_DEPOSIT = "./deposit";
const ROUTE_WITHDRAW = "./withdraw";

// INICIALIZAÇÃO DE ELEMENTOS

var menuSideBar = $("a#id_link_menu");
var contentView = $("#id_page_content");
var baseUrl = window.location.protocol + "//" + window.location.host;
var routeInsertedNavigator = $(location).attr("href").replace(baseUrl, '');
var modal = $("#modal");
var boxNotification = $("#id_container_alert");
var msgNotification = $("#id_msg_notificacao");
var styleNotification = $("#id_tipo_notificacao");


//===========================================================================================================================
//======================================================= FUNÇÕES GLOBAIS ===================================================
//===========================================================================================================================


/*
* Function name = save()
* Params = params, route
* Return = Return the cod and msg
*/

function save(params, route){

    var currentRoute = '.' + routeInsertedNavigator.replace('/admin','');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: route,            
        data:
        {                
            'value' : params
        },

        success: function (data) {
            
            if(data.cod){
                
                var ALERT;
                
                data.cod == 0 ? ALERT = ALERT_ERROR : null;
                data.cod == 1 ? ALERT = ALERT_SUCCESS : null
                data.cod == 2 ? ALERT = ALERT_INFO : null                

                $(modal).fadeOut(200);
                $(styleNotification).attr('class','').addClass(ALERT);                    
                $(msgNotification).html(data.msg);
                $(boxNotification).fadeIn(200);                
                data.cod === '1' ? loadViews(currentRoute, 'GET', 'HTML', null, contentView) : false;
                window.setTimeout(function () {$(boxNotification).fadeOut(200)},10000);

            }             
        }
    });
}


/*
* Function name = loadViews()
* Params = route, method, dataType, parameter and, contentElement
* Return = view in HTML loaded in container contentElement
*/

function loadViews(route, method, dataType, parameters, contentElement){    
    
    $.ajax({
        method: method,
        url: route,
        dataType: dataType,

        success: function (value) {
            var contentViewDashboard = $(value).find('#id_page_content');
            $(contentElement).html($(contentViewDashboard).html());                
        }
    });
};


/*
* Function name = loadModalViews()
* Params = route, method, dataType, parameter and, contentModalElement
* Return = view in HTML loaded in container contentModalElement
*/

function loadModalViews(route, method, dataType, parameters, contentModalElement){    
    
    $.ajax({
        method: method,
        url: route,
        dataType: dataType,

        success: function (value) {            
            $(contentModalElement).html(value);                
        }
    });
};





//===========================================================================================================================
//============================================== MENU ESQUERDO ==============================================================
//===========================================================================================================================

    $(menuSideBar).click(function(e){

        var route;
        var parent_li = $("li[parent-li='" + $(this).attr('parent-li') +"']");
        var currentMenuActive = $("li.active[type='menu-side'");
        
        
        $(this).attr('href') === '/' ? route = '/admin' : route = $(this).attr('href');
        history.pushState(null, null, route);
        $(currentMenuActive).removeClass('active');
        $(parent_li).addClass('active');
        
        route !== '' ? loadViews(route, 'GET', 'HTML', null, contentView) : false;

        e.preventDefault();
    });



//===========================================================================================================================
//============================================== VIEW DE RECARGA ============================================================
//===========================================================================================================================

    // BOTÃO DE RECARREGAR

    $(document).off("click","#id_btn_carregar").on("click", "#id_btn_carregar", function (e){

        var route = "./modal_recharge";
        var containerModal = $(modal).find('.modal-dialog');

        $(modal).show(
            loadModalViews(route, 'GET', 'HTML', null, containerModal)
        );
    });

    // BOTÃO DE SAQUE

    $(document).off("click","#id_btn_sacar").on("click", "#id_btn_sacar", function (e){

        var route = "./modal_withdraw";
        var containerModal = $(modal).find('.modal-dialog');

        $(modal).show(
            loadModalViews(route, 'GET', 'HTML', null, containerModal)
        );
    });


    // BOTÕES DE SALVAR E CANCELAR DO MODAL DE RECARGA

    $(document).off("click","#id_btn_modal_recarga").on("click", "#id_btn_modal_recarga", function (e){
        var valueRecharge = Number($("#id_value_recharge").val());
        $(this).attr('role') === 'salvar' ? save(valueRecharge, ROUTE_DEPOSIT) : $(modal).fadeOut(200);
        $(modal).find('.modal-dialog').html('');
        
    });    

    // BOTÕES DE SALVAR E CANCELAR DO MODAL DE SAQUE

    $(document).off("click","#id_btn_modal_saque").on("click", "#id_btn_modal_saque", function (e){
        var valueWithdraw = Number($("#id_value_withdraw").val());
        $(this).attr('role') === 'salvar' ? save(valueWithdraw, ROUTE_WITHDRAW) : $(modal).fadeOut(200);
        $(modal).find('.modal-dialog').html('');
        
    });    


    // BOTÕES DE AUMENTAR E DIMINUIR VALOR DE RECARGA

    $(document).off("click","button#id_btn_plus_minus_recarga").on("click", "button#id_btn_plus_minus_recarga", function (e){
        
        var currentValue = Number($("#id_value_recharge").val());        
        
        if(currentValue !== 0){
            $(this).attr('role') === 'minus' ? currentValue = currentValue - VARIANCE_VALUE_RECHARGE : currentValue = currentValue + VARIANCE_VALUE_RECHARGE;
            $("#id_value_recharge").val(currentValue);
        }                
    });

    // BOTÕES DE AUMENTAR E DIMINUIR VALOR DE SAQUE

    $(document).off("click","button#id_btn_plus_minus_saque").on("click", "button#id_btn_plus_minus_saque", function (e){
        
        var currentValue = Number($("#id_value_withdraw").val());        
        
        if(currentValue !== 0){
            $(this).attr('role') === 'minus' ? currentValue = currentValue - VARIANCE_VALUE_RECHARGE : currentValue = currentValue + VARIANCE_VALUE_RECHARGE;
            $("#id_value_withdraw").val(currentValue);
        }                
    });
    


});