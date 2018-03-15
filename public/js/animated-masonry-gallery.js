$(window).load(function () {

var size = 1;
var button = 1;
var button_class = "gallery-header-center-right-links-current";
var normal_size_class = "gallery-content-center-normal";
var full_size_class = "gallery-content-center-full";
var $container = $('#gallery-content-center');
    
$container.isotope({itemSelector : 'img'});


function check_button(){
	$('.gallery-header-center-right-links').removeClass(button_class);
	if(button==1){
		$("#filter-all").addClass(button_class);
		$("#gallery-header-center-left-title").html('All Galleries');
		}
	if(button==2){
		$("#filter-studio").addClass(button_class);
		$("#gallery-header-center-left-title").html('Studio Gallery');
		}
	if(button==3){
		$("#filter-landscape").addClass(button_class);
		$("#gallery-header-center-left-title").html('Landscape Gallery');
		}	
}
	
function check_size(){
	$("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
	if(size==0){
		$("#gallery-content-center").addClass(normal_size_class); 
		$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
		}
	if(size==1){
		$("#gallery-content-center").addClass(full_size_class); 
		$("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
		}
	$container.isotope({itemSelector : 'img'});
}


	
$("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
$("#filter-studio").click(function() {  $container.isotope({ filter: '.studio' }); button = 2; check_button();  });
$("#filter-landscape").click(function() {  $container.isotope({ filter: '.landscape' }); button = 3; check_button();  });
$("#gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


check_button();
check_size();
});











$(window).load(function () {

    var size = 1;
    var button = 1;
    var button_class = "web_gallery-header-center-right-links-current";
    var normal_size_class = "web_gallery-content-center-normal";
    var full_size_class = "web_gallery-content-center-full";
    var $container = $('#web_gallery-content-center');

    $container.isotope({itemSelector : 'img'});


    function check_button(){
        $('.web_gallery-header-center-right-links').removeClass(button_class);
        if(button==1){
            $("#web_filter-all").addClass(button_class);
            $("#web_gallery-header-center-left-title").html('All Galleries');
        }
        if(button==2){
            $("#web_filter-studio").addClass(button_class);
            $("#web_gallery-header-center-left-title").html('Studio Gallery');
        }
        if(button==3){
            $("#web_filter-landscape").addClass(button_class);
            $("#web_gallery-header-center-left-title").html('Landscape Gallery');
        }	
    }

    function check_size(){
        $("#web_gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
        if(size==0){
            $("#web_gallery-content-center").addClass(normal_size_class); 
            $("#web_gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
        }
        if(size==1){
            $("#web_gallery-content-center").addClass(full_size_class); 
            $("#web_gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
        }
        $container.isotope({itemSelector : 'img'});
    }



    $("#web_filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
    $("#web_filter-studio").click(function() {  $container.isotope({ filter: '.studio' }); button = 2; check_button();  });
    $("#web_filter-landscape").click(function() {  $container.isotope({ filter: '.landscape' }); button = 3; check_button();  });
    $("#web_gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


    check_button();
    check_size();
});









$(window).load(function () {

    var size = 1;
    var button = 1;
    var button_class = "website_gallery-header-center-right-links-current";
    var normal_size_class = "website_gallery-content-center-normal";
    var full_size_class = "website_gallery-content-center-full";
    var $container = $('#website_gallery-content-center');

    $container.isotope({itemSelector : 'img'});


    function check_button(){
        $('.website_gallery-header-center-right-links').removeClass(button_class);
        if(button==1){
            $("#website_filter-all").addClass(button_class);
            $("#website_gallery-header-center-left-title").html('All Galleries');
        }
        if(button==2){
            $("#website_filter-studio").addClass(button_class);
            $("#website_gallery-header-center-left-title").html('Studio Gallery');
        }
        if(button==3){
            $("#website_filter-landscape").addClass(button_class);
            $("#website_gallery-header-center-left-title").html('Landscape Gallery');
        }	
    }

    function check_size(){
        $("#website_gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
        if(size==0){
            $("#website_gallery-content-center").addClass(normal_size_class); 
            $("#website_gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
        }
        if(size==1){
            $("#website_gallery-content-center").addClass(full_size_class); 
            $("#website_gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
        }
        $container.isotope({itemSelector : 'img'});
    }



    $("#website_filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
    $("#website_filter-studio").click(function() {  $container.isotope({ filter: '.studio' }); button = 2; check_button();  });
    $("#website_filter-landscape").click(function() {  $container.isotope({ filter: '.landscape' }); button = 3; check_button();  });
    $("#website_gallery-header-center-left-icon").click(function() { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


    check_button();
    check_size();
});