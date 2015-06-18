//search
var pullSearch = $('.pull-search'), 
		searchInter = $('.search-inter'),
		active = true;
$(function() {
	$(pullSearch).click(function() {
		if (active === false) {
			pullSearch.hide(0);
			searchInter.show(200);
			active = true;
		} else {
			searchInter.hide(0);
			pullSearch.show(200);
			active = false;
		}
	});
});

//Adaptive menu
var pull = $('.pull'), 
		menu = $('nav'), 
		person = $('.person'), 
		statusList = $('.status-list'),
		active = false;
$(function() {
	$(pull).click(function() {
		if (active === false) {
			menu.show();
			person.show();
			statusList.show();
			active = true;
		} else {
			menu.hide();
			person.hide();
			statusList.hide();
			active = false;
		}
	});
	$(person).click(function() {
		if (active === false) {
			statusList.show();
			active = true;
		} else {
			statusList.hide();
			active = false;
		}
	});
});
$(window).resize(function(){
	var w = $(window).width();
	if(w > 830) {
		menu.removeAttr('style');
		person.removeAttr('style');
		statusList.removeAttr('style');
	}
});

//Hide/show block with filters
$('a.filter').click(function(){
		hideDocuments('.wrapper-filters-form');return false;
	});
function hideDocuments (documents) {
	if ($(documents).css('display') == 'none') {
		$(documents).animate({height: 'show'}, 350);
	} else {
		$(documents).animate({height: 'hide'}, 350);
	}
}

//Diagram
//$(function() {
//    if(typeof $(".dial").knob === 'undefined')
//        return;
//    $(".dial").knob();
//    $(".dial").addClass('myDiagram');
//    var value = $(".dial").attr("value");
//    $({animatedVal: 0}).animate({animatedVal: value}, {
//        duration: 2000,
//        easing: "swing",
//        step: function() {
//            $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
//        }
//    });
//});