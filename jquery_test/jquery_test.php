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
<!----------------------------------------------------------------------->
<br/>
<input type="textbox" id="inputid" value="Giá trị input"/> Ăn <br/>
<input type="button" id="view1" value="Xóa Type"/>
<input type="button" id="view2" value="Thêm vào thuộc tính type = radio"/>

<script language="javascript">

    // Bắt đầu code jquery
    $(document).ready(function(){

        // Xóa thuộc tính type khi click vào button 1
        $('#view1').click(function(){
            $('#inputid').removeAttr('value');
        });


        // Thêm vào thuộc tính type = radio
        $('#view2').click(function(){
            $('#inputid').attr('type', 'radio');
        });

    });

</script>
<!----------------------------------------------------------------------->
<h1>Ví dụ 1</h1>
<strong>Sở thích của bạn là gì? </strong> <br/>
<input type="checkbox" id="an" name="sothich" value="1"/> Ăn <br/>

<input type="button" id="view11" value="Xem Name và Type"/>
<input type="button" id="view21" value="Đổi type thành textbox"/>
<input type="button" id="view31" value="Đổi type thành checkbox"/>

<!--id khong duoc dat trung nhau-->

<script language="javascript">

    // Bắt đầu code jquery
    $(document).ready(function(){

        // Khi click vào button có id = view1
        $('#view11').click(function(){

            // Lấy tên của checkbox có id là an
            var name = $('#an').attr('name');

            // lấy type của checkbox
            var type = $('#an').attr('type');

            alert('Name là ' + name + ' và type là ' + type);

        });


        // Khi click vào button có id = view2
        $('#view21').click(function(){
            // Thay đổi kiểu thành textbox
            $('#an').attr('type', 'textbox');

        });


        // Khi click vào button có id = view3
        $('#view31').click(function(){
            // Thay đổi kiểu thành radio
            $('#an').attr('type', 'radio');

        });

    });

</script>



</body>
</html>