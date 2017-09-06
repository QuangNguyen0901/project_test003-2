<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="javascript">
        function load_ajax() {
            $.ajax({
                url: "noidung.php",
                type: "post",
                dataType: "text",
                data: {},
                success: function (result) {
                    $('#result').html(result);
                }
            });
        }

        function load_ajax_2() {
            $.ajax({
                url: "result.php",
                type: "post",
                dataType: "text",
                data: {
                    number: $('#number').val()
                },
                success: function (result2) {
                    $('#result_2').html(result2);
                }
            });
        }
    </script>

</head>
<body>
<div id="result">
    Nội dung ajax sẽ được load ở đây
</div>
<input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
<br>
<p>----------------------------------------------------</p>

<div id="result_2">
    Nội dung ajax sẽ được load ở đây
</div>
<br/>
<input type="text" value="" id="number"/>
<input type="button" name="clickme" id="clickme_2" onclick="load_ajax_2()" value="Click Me_2"/>
<br>
<p>----------------------------------------------------</p>

<div id="result01">TEXT</div>
<div id="result02">JSON</div>
<div id="result03">XML</div>
<br/>
<input type="button" name="clickmeA" id="text-click" value="Get List By Text"/>
<input type="button" name="clickmeA" id="json-click" value="Get List By Json"/>
<input type="button" name="clickmeA" id="xml-click" value="Get List By XML"/>

<script language="javascript">
    $('#text-click').click(function () {
        $.ajax({
            url: 'text.php',
            type: 'get',
            dataType: 'text',
            success: function (result) {
                $('#result01').html(result);
            }
        });
    });
</script>

<script language="javascript">
    $('#json-click').click(function () {
        $.ajax({
            url: 'json.php',
            type: 'get',
            dataType: 'json',
            success: function (result_json2) {
//result_json2  khai bao bien chua noi dung lay ve tu file json.php

                var html = '';
                html += '<table border="1" cellspacing="0" cellpadding="10">';
                html += '<tr>';
                html += '<td>';
                html += 'ID';
                html += '</td>';
                html += '<td>';
                html += 'User Name';
                html += '</td>';
                html += '<tr>';

                // Kết quả là một object json
                // Nên ta sẽ loop result
                $.each(result_json2, function (key, item) {
                    html += '<tr>';
                    html += '<td>';
                    html += item['user_id_json'];
                    html += '</td>';
                    html += '<td>';
                    html += item['username_json'];
                    html += '</td>';
                    html += '<tr>';
                });

                html += '</table>';

                $('#result02').html(html);
            }
        });
    });
</script>

<script language="javascript">
    $('#xml-click').click(function () {
//        var html = '';
//        html += '<table border="1" cellspacing="0" cellpadding="10">';
//        html += '<tr>';
//        html += '<td>';
//        html += 'USER ID';
//        html += '</td>';
//        html += '<td>';
//        html += 'USER NAME';
//        html += '</td>';
//        html += '<tr>';

        $.ajax({
//            url: 'xm.xml',
            url: 'xml.php',
            type: 'get',
            dataType: 'xml',
            success: function (result) {
//                console.log("aaa");
                // HTML lúc đầu
                var html = '';
                html += '<table border="1" cellspacing="0" cellpadding="10">';
                html += '<tr>';
                html += '<td>';
                html += 'USER ID';
                html += '</td>';
                html += '<td>';
                html += 'USER NAME';
                html += '</td>';
                html += '<tr>';

                // Lặp để lấy data
                $(result).find('items').each(function (key, val) {
                    html += '<tr>';
                    html += '<td>';
                    html += $(val).find('user_id').text();
                    html += '</td>';
                    html += '<td>';
                    html += $(val).find('username').text();
                    html += '</td>';
                    html += '<tr>';
                });

                html += '</table>';

                $('#result03').html(html);
            },error: function(xhr, status, error) {
                alert(xhr.responseText);
                console.log(error);
            }
        })
//        $('#result03').html(html);
    })

</script>


</body>
</html>