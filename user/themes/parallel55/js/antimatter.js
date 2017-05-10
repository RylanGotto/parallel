var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function scrollHeader() {
    // Has scrolled class on header
    var zvalue = $(document).scrollTop();
    if ( zvalue > 75 )
        $("#header").addClass("scrolled");
    else
        $("#header").removeClass("scrolled");
}

jQuery(document).ready(function($){

    // ON SCROLL EVENTS
    if (!isTouch){
        $(document).scroll(function() {
            //scrollHeader();
        });
    };

    // TOUCH SCROLL
    $(document).on({
        'touchmove': function(e) {
            //scrollHeader(); // Replace this with your code.
        }
    });

    //Smooth scroll to top
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
    // Responsive Menu

    $('h3 [href="/parallel"]').html('parallel<div id="logo55">55</div>');
    $('#navbar > ul > .has-children > a').on('click', function(e){

        e.preventDefault(); 

    })
$('.has-children > a').each(function(){

    if ($(this).text().trim() === "Careers"){
        that = this
        $(that).next().children().each(function(e){
            orginal_url = $(this).find('a').attr('href')
            new_url = orginal_url.replace('careers', 'facilities')
            //$(this).find('a').attr('href', new_url)
            $($(this).children()[0]).attr('href', new_url)
        })
    }
        

})

});


