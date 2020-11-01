 $(document).ready(function() {


    
    cloudTranslation({
        defaultLanguage: "en", // optional | The main language used.
        urlLanguageLocation: UrlLanguageLocation.none, // optional | To append language in the url (ex: www.website.com/en/).
        translatorProvider: TranslatorProvider.none, // optional | Translate text using a translator provider.
        translatorProviderKey: "", // optional | The translator provider key.
        logTranslationsFromProvider: false, // optional | Set to true to log the translation output in the console.
        languages: [
            {
                code: "en",
                displayName: "English"
            },
            {
                code: "ar",
                displayName: "العربية",
                direction: LanguageDirection.rtl
            }
        ]
    });
    var conveniancecount = $("#owl-one").length;
    console.log(conveniancecount)
    if(conveniancecount>0){
    $('#owl-one').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    }); }
    var owl2 = $("#owl-two").length;
    console.log(owl2)
    if(owl2>0){
  $('#owl-two').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});}
    

   
 
    });


    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
