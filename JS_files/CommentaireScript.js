$(document).ready(function(){
    var rating_data = 0;
    $('#add_review').click(function (){
        $('.commentaire-form').css("display: block;");
    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');
        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });
    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }
    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });
    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');
        document.getElementById("user_rating").value = rating_data;
    });

    const TotalReviewq = document.getElementById("total_review");
    const TotalReview= TotalReviewq.textContent;
    var TotalFiveReview =document.getElementById("total_five_star_review");
    var TotalFourReview=document.getElementById("total_four_star_review");
    var TotalThreeReview=document.getElementById("total_three_star_review");
    var TotalTwoReview=document.getElementById("total_two_star_review");
    var TotalOneReview=document.getElementById("total_one_star_review");

    $('#five_star_progress').css('width', (TotalFiveReview.textContent/TotalReview) * 100 + '%');
    $('#four_star_progress').css('width', (TotalFourReview.textContent/TotalReview) * 100 + '%');
    $('#three_star_progress').css('width', (TotalThreeReview.textContent/TotalReview) * 100 + '%');
    $('#two_star_progress').css('width', (TotalTwoReview.textContent/TotalReview) * 100 + '%');
    $('#one_star_progress').css('width', (TotalOneReview.textContent/TotalReview) * 100 + '%');


});