//Copyright 2015 Pareto Software, LLC, released under an MIT license: http://opensource.org/licenses/MIT
$( document ).ready(function() {
    var testimonial_ok=false;
    //Inputs that determine what fields to show
    var rating = $('#live_form input:radio[name=rating]');
    var testimonial=$('#live_form input:radio[name=testimonial]');

    var celery=$('#live_form input:radio[name=celery]');

    //Wrappers for all fields
    var bad = $('#live_form textarea[name="feedback_bad"]').parent();
    var ok = $('#live_form textarea[name="feedback_ok"]').parent();
    var great = $('#live_form textarea[name="feedback_great"]').parent();
    var testimonial_parent = $('#live_form #div_testimonial');
    var thanks_anyway  = $('#live_form #thanks_anyway');



    var quiz1 = $('#live_form #div_quiz1');
    var quiz2 = $('#live_form #div_quiz2');

    var all=bad.add(ok).add(great).add(testimonial_parent).add(thanks_anyway)
		.add(quiz1).add(quiz2);

    rating.change(function(){
        var value=this.value;
        all.addClass('hidden'); //hide everything and reveal as needed


		if (value == 'Excellent'){
            testimonial_parent.removeClass('hidden');
            if (testimonial_ok == 'yes'){great.removeClass('hidden');}
            else if (testimonial_ok == 'no'){thanks_anyway.removeClass('hidden');}
        }
        else if (value == 'Yes'){
            quiz1.removeClass('hidden');
        }
        else if (value == 'No'){
            thanks_anyway.removeClass('hidden');
        }
    });


    // celery.change(function(){
    //     all.addClass('hidden');
    //     testimonial_parent.removeClass('hidden');
    //
    //     testimonial_ok=this.value;
    //
    //     if (testimonial_ok == 'yes'){
    //         great.removeClass('hidden');
    //     }
    //     else{
    //         thanks_anyway.removeClass('hidden');
    //     }
    //
    //
    // });
});
