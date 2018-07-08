$(function() {

    // init Packery
    var $grid = $('.grid').packery({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
    });

    // layout Packery after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.packery();
    });

});