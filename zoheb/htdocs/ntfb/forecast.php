        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="jq_js/jquery.min.js"></script>
        <script type="text/javascript" src="jq_js/excanvas.min.js"></script>
        <script type="text/javascript" src="jq_js/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="jq_js/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="jq_js/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="jq_js/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript" src="jq_js/shCore.min.js"></script>
        <script type="text/javascript" src="jq_js/shBrushJScript.min.js"></script>
        <script type="text/javascript" src="jq_js/scripts/shBrushXml.min.js"></script>
        <link rel="stylesheet" type="text/css" href="jq_css/jquery.jqplot.css" />
        <script class="code">
            $(document).ready(function(){
                var line1 = [['Rice', 7000], ['Spaghetti', 9000], ['Ground beef', 1500],['Pinto Beans', 1200], ['Green Beans', 3000],['Corn', 6000]];
 
                var plot1 = $.jqplot('chart1', [line1], {
                    title: 'Food vs. Demand(in lbs)',
                    series:[{renderer:$.jqplot.BarRenderer}],
                    axesDefaults: {
                        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
                        tickOptions: {
                            angle: -30,
                            fontSize: '10pt',
							color: '#000000' 
                        }
                    },
				    tickOptions: {
						color:'#000000'
					},
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.CategoryAxisRenderer
                        }
                    }
                });
            });
        </script>

        <div id="chart1" ></div>
