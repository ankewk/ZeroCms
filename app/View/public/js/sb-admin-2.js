$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })
});


function ShowTip(tip, type) {
    var $tip = $('#tip');
    if ($tip.length == 0) {
        $tip = $('<span id="tip" style="font-weight:bold;position:absolute;top:50px;left: 50%;z-index:9999"></span>');
        $('body').append($tip);
    }
    $tip.stop(true).attr('class', 'alert alert-' + type).text(tip).css('margin-left', -$tip.outerWidth() / 2).fadeIn(500).delay(2000).fadeOut(500);
}
function ShowTipAlwaysInTheMiddle(tip,type){
	 var $tip = $('#tip');
	    if ($tip.length == 0) {
	        $tip = $('<span id="tip" style="font-weight:bold;position:fixed;top:50px;left:50%;z-index:9999"></span>');
	        $('body').append($tip);
	    }
	    $tip.stop(true).attr('class', 'alert alert-' + type).text(tip).css('margin-left', -$tip.outerWidth() / 2).fadeIn(500).delay(2000).fadeOut(500);
}
function ShowMsg(msg) {
    ShowTip(msg, 'info');
}
function ShowMiddle(msg){
	ShowTipAlwaysInTheMiddle(msg,'info');
}
function ShowSuccess(msg) {
    ShowTip(msg, 'success');
}
 
function ShowFailure(msg) {
    ShowTip(msg, 'danger');
}
 
function ShowWarn(msg, $focus, clear) {
    ShowTip(msg, 'warning');
    if ($focus) $focus.focus();
    if (clear) $focus.val('');
    return false;
}
