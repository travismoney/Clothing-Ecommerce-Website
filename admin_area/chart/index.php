<?php  

//index.php

include("database_connection.php");

$query = "SELECT year FROM sales GROUP BY year DESC" ;

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>  
<!DOCTYPE html>  
<html>  
    <head>  
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    </head>  
    <body> 
        <br /><br />
            
            <div class="panel panel-default">
               
                <div class="panel-heading">
                
                <h2 align="center">Coloured Malaysia Sales Chart</h2> 
                
                </div>
                
                <div class="panel-heading">
                   
                    <div class="row">
                       
                        <div class="col-md-9">
                           
                            <h3 class="panel-title">Monthly Sales Profit Data</h3>
                            
                        </div>
                        
                        <div class="col-md-3">
                           
                            <select name="year" class="form-control" id="year">
                               
                                <option value="">Select Year</option>
                                
                            <?php
                                
                            foreach($result as $row)
                            {
                                echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
                            }
                                
                            ?>
                            
                            </select>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="panel-body">
                   
                    <div id="chart_area" style="width: 100%; height: 620px;"></div>
                    
                </div>
                
            </div>

    </body>  
    
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(year, title)
{
    var temp_title = title + ' '+year+'';
    $.ajax({
        url:"chart/fetch.php",
        method:"POST",
        data:{year:year},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
}

function drawMonthwiseChart(sales, chart_main_title)
{
    var jsonData = sales;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Profit');
    $.each(jsonData, function(i, jsonData){
        var month = jsonData.month;
        var profit = parseFloat($.trim(jsonData.profit));
        data.addRows([[month, profit]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "Months"
        },
        vAxis: {
            title: 'Profit'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){

    $('#year').change(function(){
        var year = $(this).val();
        if(year != '')
        {
            load_monthwise_data(year, 'Monthly Sales Profit Data');
        }
    });

});

</script>



