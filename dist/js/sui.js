$(document).ready(function($) {

    /**
     * Context type
     *
     * A : accessibility: accessibilité true/false
     * C : colors       : css/vars.less
     * D : device       : à définir ...
     * H : helper       : bool
     * S : size         : css/vars.less
     * R : role         : par la liste des roles definit par le projet
     * K : Keyboard     : js/init-shortcut.js
     *
     * La liste de sui propre à chaques types est à définir en fonction des besoins de chaque type
     */

    $.sui = {
        get : function (key){
            return $('html').attr('data-sui-'+key);
        },
        set : function (key, value){

            var urlSession = './php/sui.php';

            var data       = {
                key : key,
                value: value
            }
            // data['sui'][key] = value;

            $.get(urlSession, data);

            return $('html').attr('data-sui-'+key,value);
        },
        is  : function (key, value){
            return ($('html').attr('data-sui-'+key)==value);
        }
    }

    $.setDefault = function (){
        $.sui.set('n','default');
    }

    $(document).on("click",".btn-close-sui",function (e){
        e.preventDefault();
        var t = $(this);
        $.setDefault();
    })

    $(document).on("click", ".btn-sui", function (e){
        e.preventDefault();
        var t = $(this);
        t.toggleClass('active');
        $.sui.set(t.attr('data-k'),t.hasClass('active'));
    });


});
