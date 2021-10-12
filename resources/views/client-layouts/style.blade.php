<link href="{{asset('client-assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('client-assets/css/slider.css')}}" rel="stylesheet" type="text/css"/>
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet'
    type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('client-assets/css/DarkBlueTheme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('client-assets/css/mystyleFormenu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('client-assets/Css/loading.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('client-assets/css/product-slider.css')}}" rel="stylesheet" type="text/css"/>



     <script src="{{asset('client-assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('client-assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('client-assets/js/menuscript.js')}}" type="text/javascript"></script>
    <script src="{{asset('client-assets/js/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('client-assets/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('client-assets/js/DisplayHome.Index.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit')}}"></script>
    <script src="{{asset('client-assets/js/product-slider.js')}}" type="text/javascript"></script>
    
        <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
        }
    </script>
      <script type="text/javascript">
        document.onreadystatechange = function () {
            var state = document.readyState
            if (state == 'complete') {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            var $affectedElements = $("p, a, FONTS, h1, h2, h3, h4, h5, h6, table, td, span, b, strong");
            $affectedElements.each(function () {
                var $this = $(this);
                $this.data("orig-size", $this.css("font-size"));
            });
            $("#btn-increase").click(function () {
                changeFontSize(1);
            });
            $("#btn-decrease").click(function () {
                changeFontSize(-1);
            });
            $("#btn-orig").click(function () {
                $affectedElements.each(function () {
                    var $this = $(this);
                    $this.css("font-size", $this.data("orig-size"));
                });
            });
            function changeFontSize(direction) {
                $affectedElements.each(function () {
                    var $this = $(this);
                    $this.css("font-size", parseInt($this.css("font-size")) + direction);
                });
            }
        });
    </script>  