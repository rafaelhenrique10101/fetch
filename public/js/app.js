$(document).ready(function(){



// CONSTANTES

const DASHBOARD_VIEW = "/admin"
const VARIANCE_VALUE_RECHARGE = 10;
const ALERT_ERROR = "messenger-message message alert error message-error alert-error messenger-will-hide-after messenger-hidden";
const ALERT_SUCCESS = "messenger-message message alert success message-success alert-success messenger-will-hide-after";
const ROUTE_DEPOSIT = "./deposit";

// INICIALIZAÇÃO DE ELEMENTOS

var menuSideBar = $("a#id_link_menu");
var contentView = $("#id_page_content");
var baseUrl = window.location.protocol + "//" + window.location.host;
var routeInsertedNavigator = $(location).attr("href").replace(baseUrl, '');
var modal = $("#myModal");
var boxNotification = $("#id_container_alert");
var msgNotification = $("#id_msg_notificacao");
var styleNotification = $("#id_tipo_notificacao");


//===========================================================================================================================
//==============================================  LOAD VIEWS FUCTIONS =======================================================
//===========================================================================================================================

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
        $("#myModal").show();

        var teste = $("#myModal").find("button#id_btn_plus_minus_recarga");
        var teste2 = $("#myModal").find("button#id_btn_modal_recarga");
    });


    // BOTÕES DE SALVAR E CANCELAR DO MODAL DE RECARGA

    $(document).off("click","#id_btn_modal_recarga").on("click", "#id_btn_modal_recarga", function (e){
        var valueRecharge = Number($("#id_value_recharge").val());
        $(this).attr('role') === 'salvar' ? save(valueRecharge, ROUTE_DEPOSIT) : $("#myModal").fadeOut(200);
        
    });

    function save(params, ROUTE_DEPOSIT){

        var route = '.' + routeInsertedNavigator.replace('/admin','');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: ROUTE_DEPOSIT,            
            data:
            {                
                'value' : params
            },
    
            success: function (data) {
                
                if(data.cod){
                    
                    var ALERT = data.cod == 0 ? ALERT_ERROR : ALERT_SUCCESS;

                    $("#myModal").fadeOut(200);
                    $(styleNotification).attr('class','').addClass(ALERT);                    
                    $(msgNotification).html(data.msg + " seu saldo atual é R$ " + data.amount);
                    $(boxNotification).fadeIn(200);                
                    loadViews(route, 'GET', 'HTML', null, contentView)    
                    window.setTimeout(function () {$(boxNotification).fadeOut(200)},5000);

                }             
            }
        });
    }


    // BOTÕES DE AUMENTAR E DIMINUIR VALOR DE RECARGA

    $(document).off("click","button#id_btn_plus_minus_recarga").on("click", "button#id_btn_plus_minus_recarga", function (e){
        
        var currentValue = Number($("#id_value_recharge").val());        
        
        if(currentValue !== 0){
            $(this).attr('role') === 'minus' ? currentValue = currentValue - VARIANCE_VALUE_RECHARGE : currentValue = currentValue + VARIANCE_VALUE_RECHARGE;
            $("#id_value_recharge").val(currentValue);
        }                
    });

    function changeValueRecharge(value){
        $("#myModal").fadeOut(200);
    }

});