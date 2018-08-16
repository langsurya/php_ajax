<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tst Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
    <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
</head>
<body>
    <form action="controller/simpan.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Anda.."/>
        <input type="text" name="alamat" placeholder="Alamat Anda.."/>
        <input type="submit" name="submit" value="submit">
    </form>
    <hr/>
    <div id="content"></div>
    <script type="text/javascript">
    $(document).ready(function(){
        loadData();

        $('form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type:$(this).attr('method'),
                url:$(this).attr('action'),
                data:$(this).serialize(),
                success:function(){
                    loadData();
                    resetForm();
                }
            });
        })
    })

    function loadData(){
        $.get('controller/data.php', function(data){
            $('#content').html(data);
            $('.hapusData').click(function(e){
                e.preventDefault();
                $.ajax({
                    type:'get',
                    url:$(this).attr('href'),
                    data:$(this).serialize(),
                    success:function(){
                        loadData();
                    }
                });
            })
        })
    }

    function resetForm(){
        $('[type=text').val('');
        $('[name=nama').focus();
    }
    </script>
</body>
</html>