$(document).ready(function(){



// CONSTANTES

const DASHBOARD_VIEW = "/admin"
const VARIANCE_VALUE_RECHARGE = 10;

// INICIALIZAÇÃO DE ELEMENTOS

var menuSideBar = $("a#id_link_menu");
var contentView = $(".page-content");
var baseUrl = window.location.protocol + "//" + window.location.host;
var routeInsertedNavigator = $(location).attr("href").replace(baseUrl, '');
var modal = $("#myModal");


//===========================================================================================================================
//==============================================  LOAD VIEWS FUCTIONS =======================================================
//===========================================================================================================================

function loadViews(route, method, dataType, parameters, contentElement){    
    
    $.ajax({
        method: method,
        url: route,
        dataType: dataType,

        success: function (value) {
            var contentViewDashboard = $(value).find('.page-content');
            $(contentElement).html($(contentViewDashboard).html());                
        }
    });
};

//===========================================================================================================================
//============================================== MENU ESQUERDO ==============================================================
//===========================================================================================================================

    $(menuSideBar).click(function(e){

        var route;
        
        $(this).attr('href') === '/' ? route = '/admin' : route = $(this).attr('href');
        history.pushState(null, null, route);
        
        route !== '' ? loadViews(route, 'GET', 'HTML', null, contentView) : false;

        e.preventDefault();
    });



//===========================================================================================================================
//============================================== VIEW DE RECARGA ============================================================
//===========================================================================================================================

    // BOTÃO DE RECARREGAR

    $(".page-content").off("click","#id_btn_carregar").on("click", "#id_btn_carregar", function (e){
        $(modal).fadeIn(200);
    });


    // BOTÕES DE SALVAR E CANCELAR DO MODAL DE RECARGA

    $(".page-content").off("click","#id_btn_modal_recarga").on("click", "#id_btn_modal_recarga", function (e){
        var valueRecharge = $("#id_value_recharge").val();
        $(this).attr('role') === 'salvar' ? saveRecharge(valueRecharge) : $(modal).fadeOut(200);
        
    });

    function saveRecharge(value){
        $(modal).fadeOut(200);
    }


    // BOTÕES DE AUMENTAR E DIMINUIR VALOR DE RECARGA

    $(".page-content").off("click","#id_btn_plus_minus_recarga").on("click", "#id_btn_plus_minus_recarga", function (e){
        
        var currentValue = Number($("#id_value_recharge").val());        
        
        if(currentValue !== 0){
            $(this).attr('role') === 'minus' ? currentValue = currentValue - VARIANCE_VALUE_RECHARGE : currentValue = currentValue + VARIANCE_VALUE_RECHARGE;
            $("#id_value_recharge").val(currentValue);
        }                
    });

    function changeValueRecharge(value){
        $(modal).fadeOut(200);
    }

});