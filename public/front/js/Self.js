$(document).ready(function () {
    $("#owl-demo2").owlCarousel({

        autoPlay: 2000, //Set AutoPlay to 3 seconds
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });
});
function getlang(sel)
{
    if (sel.value === 'en') {
        var pageURLen = window.location.href;
        if (pageURLen.includes('fa')){
            var stren = pageURLen.replace('fa', 'en');
            location.href = stren;
        }
        else if (pageURLen.includes('fra')){
            var strfra = pageURLen.replace('fra', 'en');
            location.href = strfra;
        }
        else if (pageURLen.includes('ar')){
            var strar = pageURLen.replace('ara', 'en');
            location.href = strar;
        }
        else if((!pageURLen.includes('en'))){
            var stren = pageURLen.replace('public', 'public/en');
            location.href = stren;
        }

    }
    else if (sel.value === 'fa'){
        var pageURLfa = window.location.href;
        if (pageURLfa.includes('en')){
            var strfa = pageURLfa.replace('en', 'fa');
            location.href = strfa;
        }
        else if (pageURLfa.includes('ar')){
            var strar = pageURLfa.replace('ara', 'fa');
            location.href = strar;
        }
        else if (pageURLfa.includes('fra')){
            var strfra = pageURLfa.replace('fra', 'fa');
            location.href = strfra;
        }
    }
    else if (sel.value === 'fra'){
        var pageURLfra = window.location.href;
        if (pageURLfra.includes('fa')){
            var strfa = pageURLfra.replace('fa', 'fra');
            location.href = strfa;
        }
        else if (pageURLfra.includes('ar')){
            var strar = pageURLfra.replace('ara', 'fra');
            location.href = strar;
        }
        else if (pageURLfra.includes('en')){
            var strfra = pageURLfra.replace('en', 'fra');
            location.href = strfra;
        }
        else if((!pageURLfra.includes('fra'))){
            var stren = pageURLfra.replace('public', 'public/fra');
            location.href = stren;
        }


    }
    else if (sel.value === 'ara'){
        var pageURLara = window.location.href;
        if (pageURLara.includes('fa')){
            var strfa = pageURLara.replace('fa', 'ara');
            location.href = strfa;
        }
        else if (pageURLara.includes('en')){
            var strar = pageURLara.replace('en', 'ara');
            location.href = strar;
        }
        else if (pageURLara.includes('fra')){
            var strfra = pageURLara.replace('fra', 'ara');
            location.href = strfra;
        }
        else if((!pageURLara.includes('ara'))){
            var stren = pageURLara.replace('public', 'public/ara');
            location.href = stren;
        }
    }
}

$('#thumbs img').click(function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
});
