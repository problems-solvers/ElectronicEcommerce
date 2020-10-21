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
});
    
        // $('#summernote').summernote({
        //     height: 300

        // });
    });