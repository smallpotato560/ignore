<html xmlns="http://www.w3.org/1999/html" lang="zh-CN">
<head>
    @yield('css')
    <script src="bootstrap/js/modernizr.js"></script> <!-- Modernizr -->
    <script  rel="script" src="bootstrap/js/jquery.mobile.custom.min.js"></script>
    <script src="bootstrap/js/jquery-2.1.1.min.js"></script>
    <script src='bootstrap/js/newsbox.min.js'></script>
    <script src="easytabs/js/easyResponsiveTabs.js"></script>
</head>

<body>
    <div class="navigation">
        @yield('nav')
    </div>
    <div class="container-fluid">
        @yield("banner")
    </div>

    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="container-fluid">
        @yield('footer')
    </div>

    <script>
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
            pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 5000,
            onToDo: function () {
                //console.log(this);
            }
        });
    </script>
    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            // Child Tab
            $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <script  rel="script" src="bootstrap/js/main.js"></script>
</body>
</html>


