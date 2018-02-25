$(document).ready(function(){



// CONSTANTES

var DASHBOARD_VIEW = "/admin"

// INICIALIZAÇÃO DE ELEMENTOS

var menuSideBar = $("a#id_link_menu");
var contentView = $(".page-content");
var baseUrl = window.location.protocol + "//" + window.location.host;
var routeInsertedNavigator = $(location).attr("href").replace(baseUrl, '');



//loadViews(routeInsertedNavigator, 'GET', 'HTML', null, contentView);


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


});