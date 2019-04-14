$(function($){
    'use strict';
    content = $('body').smoothState({
        onStart: {
            duration: 250,
            render: function () {
                content.toggleAnimationClass('is-exiting');
                $('html, body').animate({'scrollTop': 0});
            }
        }
    }).data('smoothState');
});