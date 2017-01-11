
@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap no-m-h">

    @include('layouts.sidebar-place')


    <div class="col-md-7 m-top-40">
        <h1>Title Here</h1>
        <div class="m-x-auto" style="width:370px; border:0; overflow: hidden;">
            <img style="width:370px;border:0;" id="usa_image" src="assets/ImageMapster/examples/images/new-jersey-county-map.gif" usemap="#usa" >
        </div>
        <map id="usa_image_map" name="usa">
        <area shape="poly" state="SX" href="page/sussex" alt="sussex" coords="245,6,334,62,258,148,261,153,260,157,256,160,256,163,252,163,246,169,243,168,239,170,240,167,233,162,229,164,225,166,170,99,167,103,163,103,168,94,175,92,178,88,183,85,188,78,189,74,192,73,200,58,200,53,198,50,200,47,204,43,204,40,210,28,214,27,214,25,217,23,218,24,219,19,223,17,226,17,227,11,238,10,245,5" target="_self" />
        <area shape="poly" state="PX" href="page/passaic" alt="passaic" coords="376,87,332,61,297,103,300,106,300,111,298,112,296,120,301,120,303,117,312,113,317,121,316,125,321,123,323,125,325,127,329,129,334,130,337,127,338,132,352,134,354,139,353,140,357,142,358,153,356,160,356,162,359,164,361,166,359,168,359,171,364,175,372,179,377,184,380,184,394,196,398,199,399,197,399,188,402,183,404,187,403,180,399,176,397,170,396,162,397,162,394,158,393,148,394,145,390,140,382,142,381,141,371,139,366,137,360,128,375,87" target="_self" />
        <area shape="poly" state="BN" href="page/bergen" alt="bergen" coords="462,135,374,86,360,128,366,137,382,141,382,142,390,140,394,145,393,149,394,157,398,162,396,163,399,176,403,180,404,187,402,183,399,188,400,196,398,199,395,201,395,204,396,206,394,209,400,216,404,213,406,214,407,218,411,210,413,205,418,203,424,202,426,198,432,200,437,208,446,190,446,186,453,172,453,170,462,136" target="_self" />
        <area shape="poly" state="WN" href="page/warren" alt="warren" coords="126,137,134,130,137,127,144,126,155,119,158,109,161,109,163,104,168,104,170,98,225,166,219,172,218,175,213,175,216,183,211,188,209,189,211,192,205,199,205,204,200,205,192,210,188,212,188,216,173,233,171,238,168,239,161,244,156,245,153,247,149,247,145,253,142,253,137,260,134,260,130,265,122,265,121,269,118,271,118,275,108,282,108,274,107,272,107,269,111,269,109,261,107,259,115,251,113,247,107,248,105,241,111,230,108,226,108,223,114,218,115,212,121,213,126,215,128,210,133,208,135,205,135,201,139,198,139,195,134,191,136,188,145,187,147,183,147,178,140,170,140,165,133,157,132,150,128,150,128,146,125,145,126,138,125,137" target="_self" />
        <area shape="poly" state="MS" href="page/morris" alt="morris" coords="336,222,333,228,320,240,307,253,301,253,295,259,291,259,290,254,291,251,290,248,291,245,294,244,293,239,290,233,290,230,283,227,282,220,237,234,233,232,223,228,209,225,191,210,199,205,205,204,205,198,211,192,209,189,216,183,213,175,217,175,219,172,225,166,233,162,239,167,239,170,242,168,245,168,251,163,256,164,255,160,260,156,261,153,258,147,298,102,301,108,300,112,298,113,296,119,301,119,304,117,312,113,316,121,316,125,322,123,327,129,334,131,337,127,338,133,351,134,354,141,357,143,358,154,356,162,361,166,358,169,360,172,354,168,347,168,344,166,342,172,344,181,346,183,344,188,345,194,342,195,343,198,339,200,338,204,335,205,334,213,332,220,334,222" target="_self" />
        <area shape="poly" state="EX" href="page/essex" alt="essex" coords="403,240,396,252,390,245,385,245,376,246,374,239,355,233,351,237,342,234,333,228,336,222,332,219,336,205,338,204,339,201,344,197,342,195,346,194,344,188,346,183,344,181,342,172,344,166,347,168,355,168,362,174,372,178,377,184,380,184,398,199,395,201,396,205,393,211,389,220,388,226,389,229,395,228,396,226,401,226,401,234,402,239" target="_self" />
        <area shape="poly" state="HN" href="page/hudson" alt="hudson" coords="427,238,422,238,418,245,410,251,410,259,402,260,398,262,390,262,392,259,396,251,403,239,401,234,401,226,396,226,394,229,389,228,388,225,389,219,394,208,399,215,399,216,404,213,406,214,408,218,413,206,418,203,424,203,425,199,432,200,436,208,432,217,428,221,427,236" target="_self" />
        <area shape="poly" state="UN" href="page/union" alt="union" coords="375,276,364,277,352,281,350,274,345,275,310,279,309,276,316,273,323,261,324,253,320,256,316,254,311,257,309,251,333,228,342,233,351,237,355,234,374,239,376,245,390,246,395,251,389,261,383,261,378,267,378,280,374,276" target="_self" />
        <area shape="poly" state="MX" href="page/middlesex" alt="middlesex" coords="375,292,370,291,365,298,367,307,359,316,362,324,376,330,366,338,365,346,338,377,330,383,326,388,326,392,307,401,304,400,302,399,301,391,290,386,283,386,276,382,274,378,270,378,268,374,266,375,263,368,266,356,272,355,274,350,274,342,289,332,309,315,307,312,307,308,302,308,295,299,293,294,291,290,296,283,303,281,308,277,310,276,311,278,350,274,353,281,365,276,375,276,378,280,376,290" target="_self" />
        <area shape="poly" state="ST" href="page/somerset" alt="somerset" coords="237,357,217,307,222,310,224,310,234,290,237,289,239,282,237,281,238,274,242,271,238,265,236,265,236,259,238,257,235,255,237,250,238,242,236,234,282,219,283,227,290,230,294,244,291,245,289,249,292,251,291,252,291,260,296,259,302,252,308,253,309,250,311,256,316,254,320,256,324,254,323,260,316,273,303,281,296,283,290,290,302,307,307,309,307,313,309,315,291,330,273,342,272,355,265,356,265,353,261,353,257,351,248,354,244,355,239,357" target="_self" />
        <area shape="poly" state="HU" href="page/hunterdon" alt="hunterdon" coords="144,299,135,288,129,286,121,286,119,288,111,289,108,284,110,280,118,274,118,271,121,269,122,265,130,265,134,260,137,260,142,253,145,253,149,247,154,247,156,244,162,244,168,238,171,237,173,232,188,216,189,212,191,210,210,226,224,228,237,234,238,243,237,251,234,255,237,257,238,258,236,260,236,264,239,266,242,271,238,274,237,280,240,282,237,289,234,289,224,310,221,309,217,307,231,341,227,342,215,343,216,351,217,355,209,355,198,356,202,368,178,369,177,362,172,353,173,350,164,344,154,348,145,341,143,322,145,318,144,310" target="_self" />
        <area shape="poly" state="MR" href="page/mercer" alt="mercer" coords="274,441,264,439,263,437,259,436,252,430,249,431,248,427,243,424,240,428,242,432,237,439,237,432,229,424,227,419,221,412,205,401,200,389,189,378,185,377,176,369,201,368,198,356,217,355,215,343,231,341,238,357,257,351,265,354,265,357,263,368,266,375,269,374,270,379,274,377,276,382,284,385,291,386,301,391,302,399,303,403,285,414,281,421,281,424,270,427,271,424,267,425,274,441" target="_self" />
        <area shape="poly" state="MH" href="page/monmouth" alt="monmouth" coords="425,453,418,452,417,457,410,455,407,449,406,442,401,445,393,455,389,452,383,450,370,451,367,448,369,443,364,437,362,437,363,431,350,429,323,429,291,458,282,462,267,425,271,424,271,427,281,424,281,422,285,414,302,403,302,398,307,400,326,391,326,387,366,346,366,338,369,331,375,330,377,332,378,333,385,330,393,330,397,327,405,334,410,334,425,343,434,344,435,339,434,329,428,322,430,321,435,323,439,333,440,346,441,355,441,371,439,392,429,429" target="_self" />
        <area shape="poly" state="ON" href="page/ocean" alt="ocean" coords="292,484,282,461,291,458,324,429,353,429,363,431,362,438,364,437,368,443,367,448,370,451,384,450,389,451,393,455,403,445,406,442,410,455,417,456,418,452,425,453,415,499,409,560,405,578,401,584,385,619,367,648,358,662,350,663,348,666,344,662,338,664,331,665,323,649,319,647,321,641,324,641,327,634,327,567,299,501" target="_self" />
        <area shape="poly" state="BU" href="page/burlington" alt="burlington" coords="147,492,151,485,155,484,163,479,167,473,182,464,194,464,200,459,201,456,206,455,208,448,212,444,217,447,223,447,229,441,234,442,242,431,240,428,243,423,249,428,249,430,253,431,259,436,263,437,264,440,274,442,326,566,327,633,323,641,321,641,319,647,315,645,317,652,311,649,307,645,307,644,305,647,299,644,295,639,289,641,285,637,284,632,276,631,266,622,262,622,256,621,253,618,256,614,253,602,233,584,228,579,225,579,212,564,205,564,189,566,188,560,180,529,174,524,174,520,170,516,168,516,166,514,170,512,162,511,158,508,156,502,159,497,156,492,151,490" target="_self" />
        <area shape="poly" state="CN" href="page/camden" alt="camden" coords="125,529,127,524,126,517,125,511,125,505,138,497,141,497,147,492,152,490,156,492,159,498,156,503,159,508,162,511,170,512,166,513,168,516,171,516,175,521,174,524,179,529,189,566,208,563,210,565,212,565,224,578,228,579,235,586,194,628,188,619,186,606,180,596,166,593,161,587,155,585,155,578,147,566,144,565,142,570,141,568,138,568,140,564,143,562,141,558,137,554,139,544,131,539,129,536" target="_self" />
        <area shape="poly" state="GR" href="page/gloucester" alt="gloucester" coords="111,531,122,531,125,529,129,537,139,545,137,554,141,558,143,562,140,565,138,568,141,568,143,570,144,565,147,566,154,577,155,585,161,588,166,594,181,596,187,608,188,619,194,629,166,661,144,642,107,607,101,610,95,606,94,601,85,602,76,598,73,599,71,594,69,594,69,590,64,591,60,585,60,579,55,576,51,564,50,559,59,551,69,543,79,542,89,542,96,542,105,537,108,534" target="_self" />
        <area shape="poly" state="SM" href="page/salem" alt="salem" coords="36,573,45,564,53,566,54,571,57,577,59,580,61,586,64,591,68,590,69,593,71,593,73,598,73,600,76,598,85,602,93,601,94,605,101,610,108,608,146,643,142,650,142,664,141,668,143,671,139,681,126,669,115,661,108,655,97,645,75,669,69,669,66,677,62,682,55,679,50,681,52,685,52,691,48,695,50,698,52,696,52,703,48,705,42,699,37,688,32,687,24,680,22,678,14,679,15,665,19,665,18,661,19,653,17,651,20,647,23,638,19,636,11,629,10,620,16,614,22,608,24,596,27,595,29,590,31,589,34,582" target="_self" />
        <area shape="poly" state="CD" href="page/cumberland" alt="cumberland" coords="64,721,57,716,54,712,54,707,46,703,51,702,52,697,50,698,48,694,52,692,48,690,50,687,49,681,55,680,61,682,66,676,69,669,76,669,97,645,118,664,127,669,139,681,143,671,141,668,142,664,142,650,145,644,167,661,182,673,201,693,202,698,200,702,202,706,201,713,200,717,199,728,197,733,193,732,189,759,183,762,183,773,189,779,173,773,167,772,155,772,156,767,151,765,149,766,146,765,143,767,138,767,136,767,136,766,132,767,126,777,124,777,119,771,117,758,106,747,101,747,95,743,96,737,94,735,87,734,83,739,78,734,71,723,73,721,66,717,65,720" target="_self" />
        <area shape="poly" state="AX" href="page/atlantic" alt="atlantic" coords="351,671,351,677,343,688,333,701,322,709,322,714,307,720,301,725,297,729,282,740,283,736,279,736,275,732,265,738,262,740,262,736,257,740,255,736,250,738,250,740,248,738,243,739,242,736,241,738,236,736,230,738,221,733,208,733,199,727,201,711,202,706,199,702,202,699,201,693,166,661,235,585,253,602,254,614,254,619,257,621,266,622,277,631,284,632,285,636,288,640,294,640,299,644,304,646,307,643,311,650,316,652,316,645,323,649,330,665,344,662,349,668" target="_self" />
        <area shape="poly" state="CM" href="page/cape_may" alt="cape_may" coords="273,748,269,753,265,755,256,768,256,773,249,780,241,797,239,799,242,804,240,808,232,816,223,833,221,841,216,845,207,853,200,860,193,860,189,864,183,864,172,864,169,860,172,850,174,846,174,841,178,829,181,823,188,811,192,795,193,785,183,773,183,762,189,758,193,731,197,732,198,727,208,733,220,732,230,737,236,736,239,738,240,738,242,736,243,739,248,738,250,740,250,737,255,737,257,739,262,736,261,740,275,731,280,736,283,736,283,741,277,745" target="_self" />
        </map>
    </div>

    @include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')
<!-- <script src="script_here"></script> -->
<script type="text/javascript" src="assets/ImageMapster/src/redist/when.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/core.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/graphics.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/mapimage.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/mapdata.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/areadata.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/areacorners.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/scale.js"></script>
<script type="text/javascript" src="assets/ImageMapster/src/tooltip.js"></script>

<script type="text/javascript">
    if (window.Zepto) {
        jQuery = Zepto;
        (function ($) {
            if ($) {
                $.fn.prop = $.fn.attr;
            }
        } (jQuery));
    }

    $(document).ready(function () {

        var $statelist, $usamap, ratio,
        mapsterConfigured = function () {
            // set html settings values
            var opts = $usamap.mapster('get_options', null, true);
            if (!ratio) {
                ratio = $usamap.width() / $usamap.height();
            }
            $('#stroke_highlight').prop("checked", opts.render_highlight.stroke);
            $('#strokewidth_highlight').val(opts.render_highlight.strokeWidth);
            $('#fill_highlight').val(opts.render_highlight.fillOpacity);
            $('#strokeopacity_highlight').val(opts.render_highlight.strokeOpacity);
            $('#stroke_select').prop("checked", opts.render_select.stroke);
            $('#strokewidth_select').val(opts.render_select.strokeWidth);
            $('#fill_select').val(opts.render_select.fillOpacity);
            $('#strokeopacity_select').val(opts.render_select.strokeOpacity);
            $('#mouseout-delay').val(opts.mouseoutDelay);
            $('#img_width').val($usamap.width());
        },
        default_options =
        {
            fillOpacity: 0.5,
            render_highlight: {
                fillColor: 'ff0000',
                stroke: true,
                strokeWidth: 3
            },
            render_select: {
                fillColor: 'ff000c',
                stroke: false,
            },
            //render_zoom: {
            //    altImage: 'images/usa_map_huge.jpg'
            //},
            mouseoutDelay: 0,
            fadeInterval: 50,
            isSelectable: true,
            singleSelect: false,
            mapKey: 'state',
            mapValue: 'full',
            listKey: 'name',
            listSelectedAttribute: 'checked',
            sortList: "asc",
            onGetList: listItems,
            clickNavigate: true,
            //onClick: function (e) {
            //    styleCheckbox(e.selected, e.listTarget);
            //    if (!utils.isScrolledIntoView(e.listTarget, false, $statelist)) {
            //        utils.centerOn($statelist, e.listTarget);
            //    }
                //if (e.key==='OH') {
                //    $usamap.mapster('zoom','OH');
                //     return false;
                //}
             //   return true;
            //},
            onConfigured: mapsterConfigured,
            showToolTip: false,
            toolTipClose: ["area-mouseout"]
        };

        function listItems(items) {
            $('.county li a').unbind('mouseenter').on('mouseenter',function(e){
                var link = $(this).data('state');
                return $usamap.mapster('set', true, link);
            });
            $('.county li a').unbind('mouseleave').on('mouseleave',function(e){
                var link = $(this).data('state');
                return $usamap.mapster('set', false, link);
            });
        }


        $usamap = $('#usa_image');
        
        $usamap.mapster(default_options);


    });


           // Utility functions
           // If you are copying code you probably won't need these.


           var utils = {};
           // Tells if an element is completely visible. if the 2nd parm is true, it only looks at the top.

           utils.isScrolledIntoView = function (elem, topOnly, container) {
               var useWindow = false, docViewTop, docViewBottom, elemTop, elemBottom;

               if (!container) {
                   container = window;
                   useWindow = true;
               }


               if (useWindow) {
                   docViewTop = $(container).scrollTop();
                   elemTop = elem.offset().top;
               } else {
                   docViewTop = 0;
                   elemTop = elem.position().top;
               }
               docViewBottom = docViewTop + $(container).height();
               elemBottom = elemTop + elem.height();


               if (topOnly) {
                   return elemTop >= docViewTop && elemTop <= docViewBottom;
               } else {
                   return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
               }
           };

           utils.centerOn = function ($container, $element) {
               $container.animate({
                   scrollTop: $element.position().top - ($container.height() / 2)
               }, 'slow');
           };

</script>
@stop