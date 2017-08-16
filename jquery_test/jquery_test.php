<!DOCTYPE html>
<html>
<head>
    <title>Chạy chương trình jquery đầu tiên</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">
        .yellow{
            background: yellow;
            height: 20px;
        }

        .red{
            background: red;
            height: 20px;
        }
    </style>

</head>
<body>
<h1>jQuery</h1>
<input type="text" id="id-textbox" value=""/> <br/>
<input type="button" id="id-button" value="Alert"/>
<script language="javascript">

    $('#id-button').click(function()
    {
        // Cách 1: Khai báo biến và lấy giá trị
        // var textbox = $('#id-textbox');
        // alert(textbox.val());

        // Cách 2: Truy xuất trực tiếp
        alert($('#id-textbox').val());
    });

</script>

<!----------------------------------------------------------------------->
<script language="javascript">

    function length_1()
    {
        var element = $('#container');
        alert(element.length);
    }

    function length_0()
    {
        var element = $('#id_not_found');
        alert(element.length);
    }

</script>
<div id="container"></div>
<input type="button" value="Length = 1" onclick="length_1()"/>
<input type="button" value="Length = 0" onclick="length_0()"/>
<!----------------------------------------------------------------------->


<script language="javascript">

    function clickEvent()
    {
        // Truy vấn đối tượng
        var element = $('.container');

        // Gán CSS background màu đỏ
        $(element).css({
            background : "red"
        });
    }
</script>
<script language="javascript">

    function clickEvent2()
    {
        // Truy vấn đối tượng
        var element = $('.container');

        // Lấy value
        var value = $(element).html();

        alert(value);
    }
</script>

<div class="container">
    Container1
</div>
<div class="container">
    Container2
</div>
<div class="container">
    Container3
</div>
<div class="container">
    Container4
</div>

<input type="button" value="Đổi màu nền" onclick="clickEvent()"/>
<input type="button" value="Lấy giá trị" onclick="clickEvent2()"/>
<!----------------------------------------------------------------------->

<div class="yellow"></div>
<div class="red"></div>
<input type="button" value="Đảo Ngược Màu" id="button-dao-nguoc"/>

<script>
    $(document).ready(function(){

        // Nếu click vào button đảo ngược
        $('#button-dao-nguoc').click(function(){

            // Lấy đối tượng cần thực thi
            var object = $('div');

            // Lặp qua từng đối tượng object
            for (var i = 0; i < object.length; i++){
                // Thực hiện đổi màu
                // nếu có class red thì đổi thành yello
                // nếu có calss yellow thì đổi thành red
                if ($(object[i]).hasClass('red')){
                    $(object[i]).removeClass('red').addClass('yellow');
                }
                else if ($(object[i]).hasClass('yellow')){
                    $(object[i]).removeClass('yellow').addClass('red');
                }
            }
        });
    });

</script>


</body>
</html>